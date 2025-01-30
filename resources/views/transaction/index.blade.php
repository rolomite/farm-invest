<x-app-layout>
    <div class="mt-100 d-none d-lg-block"></div>
    {{--    <x-alert/>--}}
    <section class="project-details-section tw-grid pt-100">
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
                            <div class="mt-4">
                                {{ $transactions->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Project-Details section ======-->

</x-app-layout>
