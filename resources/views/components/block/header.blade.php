@php
$navigations = [
    'Home' => [
        'href' => '/',
        'auth' => false
    ],
    'Dashboard' => [
        'href' =>  route('dashboard'),
        'auth' => true
    ],
    'Deposit' => [
        'href' =>  route('deposit'),
        'auth' => true
    ],
    'Transactions' => [
        'href' =>  route('transactions.index'),
        'auth' => true
    ],
    'Withdraw' => [
        'href' =>  route('withdraw'),
        'auth' => true
    ]
];
@endphp
<!--====== Header Area ======-->
<header class="header-area header-one transparent-header">
    <div class="container-fluid">
        <!--====== Header Top Bar ======-->
        <div class="header-top-bar text-white main-bg d-none d-xl-block">
            <div class="row">
                <div class="col-lg-6">
                    <!--====== Top Left ======-->
                    <div class="top-left">
                        <span>Welcome to {{ config('app.name') }}</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!--====== Top Right ======-->
                    <div class="top-right float-lg-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Header Navigation ======-->
    <div class="header-navigation">
        <div class="nav-overlay"></div>
        <div class="container-fluid">
            <div class="primary-menu">
                <!--====== Site Branding ======-->
                <div class="site-branding">
                    <x-application-logo variant="light" />
                </div>
                <!--====== Nav Menu ======-->
                <div class="nav-menu">
                    <!--====== Site Branding ======-->
                    <div class="mobile-logo mb-30 d-block d-xl-none">
                        <x-application-logo variant="light" />
                    </div>
                    <!--====== main Menu ======-->
                    <nav class="main-menu">
                        <ul>
                            @foreach($navigations as $label => $nav)
                                @if($nav['auth'])
                                    @auth
                                        <li class="menu-item"><a href="{{ $nav['href'] }}">{{ $label }}</a></li>
                                    @endauth
                                @else
                                    <li class="menu-item"><a href="{{ $nav['href'] }}">{{ $label }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </nav>
                    <!--====== Menu Button ======-->
                    <div class="menu-button mt-40 d-xl-none">
                        @auth
                            <button form="logout-form" class="main-btn secondary-btn">Logout</button>
                            <form id="logout-form" action="{{ route('logout') }}"  method="post">@csrf</form>
                        @endauth
                        @guest
                            <a href="{{ route('register') }}" class="main-btn secondary-btn">Become a member</a>
                        @endguest
                    </div>
                </div>
                <!--====== Nav Right Item ======-->
                <div class="nav-right-item">
                    <div class="menu-button d-xl-block d-none">
                        @guest
                            <a href="{{ route('register') }}" class="main-btn primary-btn">Join Now</a>
                        @endguest
                        @auth
                            <button form="logout-form" class="main-btn primary-btn">Logout</button>
                        @endauth
                    </div>
                    <div class="bar-button" data-toggle="modal" data-target="#sidebar-modal">
                        <img src="/assets/images/bar.png" alt="Image">
                    </div>
                    <div class="navbar-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== End Area ======-->
<!--====== Start Banner Section ======-->
