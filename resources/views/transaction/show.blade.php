<x-app-layout>
    <div class="d-none d-lg-block mt-100"></div>
    <section class="project-details-section pt-100">
        <div class="container">
            <div class="project-details-wrapper pb-60">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-info mb-4 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                            <h3 class="title text-center">{{ \Illuminate\Support\Number::currency(abs($transaction->amount)) }}</h3>
                            <p class="text-center">Amount</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="project-info-widget mb-30 ml-lg-70 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                            <div class="info-content">
                                <h6>Transaction Details</h6>
                                <ul>
                                    <li><span class="title">Amount</span><span class="text">{{ \Illuminate\Support\Number::currency(abs($transaction->amount)) }}</span></li>
                                    <li><span class="title">Status</span><span class="text">{{ $transaction->confirmed ? 'Successful' : 'Pending' }}</span></li>
                                    @if($method)
                                    <li style="display: block">
                                        <span class="title">Payment</span>
                                        <br>
                                        {{ $method?->instruction }}
                                    </li>
                                    <li><span class="title">Method</span><span class="text">{{ $method->name }}</span></li>
                                    @foreach($method->details as $label => $detail)
                                        <li><span class="title">{{ $label }}</span><span class="text">{{ $detail }}</span></li>
                                    @endforeach
                                    @endif
                                    @if($transaction->type === 'deposit')
                                    <li>
                                        <span class="title">Upload Proof</span>
                                        <span class="text">
                                            @if($transaction->meta['attachment'] ?? false)
                                                Uploaded
                                            @else
                                                <form action="{{ route('deposit.upload') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}" />
                                                    <div class="form-group">
                                                        <input type="file" name="upload" id="upload" />
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-sm btn-primary">Upload</button>
                                                    </div>
                                                </form>
                                            @endif
                                        </span>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </section>
</x-app-layout>
