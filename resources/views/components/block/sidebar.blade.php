<div class="modal fade sidebar-panel-wrapper" id="sidebar-modal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <button class="close" data-dismiss="modal"><i class="far fa-times"></i></button>
            <div class="sidebar-wrapper">
                <div class="sidebar-information-area">
                    <div class="row no-gutters">
                        <div class="col-lg-4 sidebar-widget">
                            <div class="sidebar-info-widget">
                                <x-application-logo variant="dark" />
                                <p>Rooted in Sustainability, Harvesting Prosperity.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 sidebar-widget">
                            <div class="sidebar-info-widget">
                                <h4 class="title">Get In Touch</h4>
                                @if(config('company.address'))
                                    <div class="contact-info-item-two">
                                        <h6 class="title"><i class="far fa-map-marker-alt"></i>Location</h6>
                                        <p>{{ config('company.address') }}</p>
                                    </div>
                                @endif
                                @if(config('company.email'))
                                    <div class="contact-info-item-two">
                                        <h6 class="title"><i class="far fa-envelope-open"></i>Email Us</h6>
                                        <p><a href="mailto:{{config('company.email')}}">{{config('company.email')}}</a></p>
                                    </div>
                                @endif

                                @if(config('company.phone'))
                                <div class="contact-info-item-two">
                                    <h6 class="title"><i class="far fa-phone-plus"></i>Hotline</h6>
                                    <p><a href="tel:{{config('company.phone')}}">{{config('company.phone')}}</a></p>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 sidebar-widget">
                            <div class="sidebar-info-widget">
                                <h4 class="title">Apply Now</h4>
                                <form action="{{ route('register') }}">
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Email Address" required>
                                        <button class="main-btn secondary-btn">Proceed</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== Sidebar Wrapper ======-->
