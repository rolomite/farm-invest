<!--====== Start Footer ======-->
<footer class="footer-area gray-bg">
    <div class="container">
        <!--====== Footer Widget ======-->
        <div class="footer-widget-area pt-80 pb-40">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--====== Footer Widget ======-->
                    <div class="footer-widget footer-about-widget mb-40 pr-lg-70 wow fadeInUp">
                        <div class="widget-content">
                            <div class="footer-logo mb-25">
                                <x-application-logo variant="light" />
                            </div>
                            <p>Rooted in Sustainability, Harvesting Prosperity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-2 col-md-6 col-sm-12">
                    <!--====== Footer Widget ======-->
                    <div class="footer-widget contact-info-widget mb-40 wow fadeInDown">
                        <h4 class="widget-title">Get In Touch</h4>
                        <div class="widget-content">
                            <ul class="info-list">
                                @if(config('company.address'))
                                    <li>{{ config('company.address') }}</li>
                                @endif
                                @if(config('company.email'))
                                    <li><a href="mailto:{{ config('company.email') }}">{{ config('company.email') }}</a></li>
                                @endif
                                @if(config('company.address'))
                                    <li><a href="tel:{{ config('company.phone') }}">{{ config('company.phone') }}</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=== Copyright Area ===-->
        <div class="copyright-area">
            <div class="row">
                <div class="col-lg-6">
                    <!--====== Copyright Text ======-->
                    <div class="copyright-text">
                        <p>&copy; {{ now()->format('Y') }} {{ config('app.name') }}. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!--====== Copyright Nav ======-->
                    <div class="copyright-nav float-lg-right">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">T&C</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== End Footer ======-->
