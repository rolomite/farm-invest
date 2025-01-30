<x-app-layout>
    <div class="mt-100 d-none d-lg-block"></div>
{{--    <x-alert/>--}}
    <section class="project-details-section tw-grid lg:tw-grid-cols-2 pt-100">
        <div class="container">
            <div class="project-details-wrapper pb-20">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-info-widget mb-30 ml-lg-70 wow fadeInRight">
                            <div class="info-content">
                                <div class="tw-flex tw-items-start tw-justify-between tw-gap-4">
                                    <h6>Account & Portfolio</h6>
                                    <a class="btn btn-sm btn-dark" href="{{ route('subscribe') }}">New Investment</a>
                                </div>
                                <ul>
                                    <li><span class="title">Balance</span><span class="text ml-auto">{{ \Illuminate\Support\Number::currency($user->balance) }}</span></li>
                                    <li><span class="title">Pending Deposit</span><span class="text ml-auto">{{ \Illuminate\Support\Number::currency($pending_balance) }}</span></li>
                                    @if($user->subscription)
                                        <li><span class="title">Package</span><span class="text ml-auto">{{ $user->subscription->plan->name }}</span></li>
                                        <li><span class="title">Invest Capital</span><span class="text ml-auto">{{ \Illuminate\Support\Number::currency($user->subscription->amount) }}</span></li>
                                        <li><span class="title">Profit</span><span class="text ml-auto">{{ \Illuminate\Support\Number::currency($user->subscription->profit) }}</span></li>
{{--                                        <li><span class="title">Status</span><span class="text ml-auto">{{ $user->subscription->isActive() ? 'Active' : 'Inactive' }}</span></li>--}}
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
                <div class="project-details-wrapper pb-20">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="project-info-widget mb-30 ml-lg-70 wow fadeInRight">
                                <div class="info-content">
                                    <h6>Transactions</h6>
                                    <ul>
                                        @foreach($transactions as $transaction)
                                            <li class="tw-relative">
                                                <span class="text-capitalize">
                                                    {{ $transaction->type }}
                                                    @if($transaction->confirmed)
                                                        <span class="tw-block !tw-text-green-600" style="font-size: 0.8rem;">Successful</span>
                                                    @else
                                                        <span class="tw-block !tw-text-amber-600" style="font-size: 0.8rem;">Pending</span>
                                                    @endif
                                                </span>
                                                <span class="ml-auto">
                                                    <span class="semibold">{{ \Illuminate\Support\Number::currency($transaction->amount) }}</span>
                                                    <span class="tw-block text-right" style="font-size: 0.8rem;">{{ $transaction->created_at->format('d/m/y') }}</span>
                                                </span>
                                                <a class="tw-absolute tw-inset-0" href="{{ route('deposit.show', $transaction) }}"></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--====== End Project-Details section ======-->

    <section class="pricing-section pt-125 pb-60 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-12">
                    <!--====== Section-title ======-->
                    <div class="section-title text-center mb-50 wow fadeInDown">
                        <span class="sub-title"><i class="flaticon-plant"></i>Packages</span>
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
