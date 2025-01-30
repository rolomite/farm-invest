<x-app-layout>
    <div class="mt-100 d-none d-lg-block"></div>
    {{--    <x-alert/>--}}
    <section class="pricing-section pt-125 pb-60 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-12">
                    <!--====== Section-title ======-->
                    <div class="section-title text-center mb-50 wow fadeInDown">
                        <span class="sub-title">
                            <i class="flaticon-plant"></i>
                            Packages
                        </span>
                        <h2>Smart Investment Package</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($plans as $plan)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--====== Pricing Item ======-->
                        <div class="single-pricing-item-two mb-40 wow fadeInUp" data-wow-delay=".2s">
                            <div class="pricing-body">
                                <div class="pricing-title mb-35">
                                    <h3 class="title">{{ $plan->name }}</h3>
                                    <h2 class="price">{{ \Illuminate\Support\Number::currency($plan->price) }}<span class="duration">.</span></h2>
                                </div>
                                <ul class="mb-35">
                                    @foreach($plan->features as $feature)
                                        <li><i class="fas fa-badge-check"></i> {{ $feature }}</li>
                                    @endforeach
                                </ul>
                                <form method="post" action="{{ route('subscribe') }}" class="pricing-button text-center">
                                    @csrf
                                    <button value="{{ $plan->id }}" name="plan_id" class="main-btn filled-btn">Choose Package</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--====== End Pricing Section ======-->

</x-app-layout>
