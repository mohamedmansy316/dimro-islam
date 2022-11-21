<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PM5RTHT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<div class="main-wrapper main-wrapper-3">
<header class="header-area section-padding-1">
    <div class="header-large-device">
        <div class="header-bottom">
            <div class="container-fluid">
                <div class="header-bottom-flex">
                    <div class="logo-menu-wrap">
                        <div class="logo">
                            <a href="{{route('index')}}">
                                <img width="85px" src="{{url('public/images/logo.png')}}" alt="logo">
                            </a>
                        </div>
                        <div class="main-menu menu-lh-1 main-menu-padding-1 menu-mrg-1">
                            <nav>
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('products')}}">Shop</a></li>
                                    <li>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary"><a class="text-white" href="{{route('AllSubjects.get')}}">Subjects</a></button>
                                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Books</a></li>
                                                <li><a class="dropdown-item" href="#">Audios</a></li>
                                                <li><a class="dropdown-item" href="#">Videos</a></li>
                                                <li><a class="dropdown-item" href="#">Articles</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Other Content
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('calendar')}}">Calendar</a></li>
                                            <li><a class="dropdown-item" href="{{route('streams')}}">Streams</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li><a href="{{route('blogs')}}">Blog</a></li> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-action-wrap header-action-flex header-action-width header-action-mrg-1">
                        {{-- <div class="search-style-1">
                            <form>
                                <div class="form-search-1">
                                    <input class="input-text" id="search-input" value="" placeholder="Search for books" type="search">
                                    <button>
                                        <i class="icofont-search-1"></i>
                                    </button>
                                </div>
                            </form>
                        </div> --}}
                        <div class="same-style">
                            @guest
                                <a href="{{route('login.get')}}"><i class="icofont-user-alt-3"></i></a>
                            @endguest
                            @auth
                                <a class="signed-user" href="{{route('profile')}}" rel="nofollow">Welcome, {{auth()->user()->name}}</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-small-device header-small-ptb sticky-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo mobile-logo-width">
                        <a href="{{route('index')}}">
                            <img alt="" src="{{url('public/images//logo/logo-2.png')}}">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-action-wrap header-action-flex header-action-mrg-1">
                        <div class="same-style header-cart">
                            <a class="cart-active" href="#"><i class="icofont-shopping-cart"></i></a>
                        </div>
                        <div class="same-style">
                            @guest
                                <a href="{{route('login.get')}}"><i class="icofont-user-alt-3"></i></a>
                            @endguest
                            @auth
                                <a class="signed-user" href="{{route('profile')}}" rel="nofollow">Welcome, {{auth()->user()->name}}</a>
                            @endauth
                        </div>
                        <div class="same-style header-info">
                            <button class="mobile-menu-button-active">
                                <span class="info-width-1"></span>
                                <span class="info-width-2"></span>
                                <span class="info-width-3"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mobile menu start -->
<div class="mobile-menu-active clickalbe-sidebar-wrapper-style-1">
    <div class="clickalbe-sidebar-wrap">
        <a class="sidebar-close"><i class="icofont-close-line"></i></a>
        <div class="mobile-menu-content-area sidebar-content-100-percent">
            <div class="clickable-mainmenu-wrap clickable-mainmenu-style1">
                <nav>
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('blogs')}}">Blog</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="{{route('products')}}">Shop</a></li>
                    </ul>
                </nav>
            </div>
            <div class="aside-contact-info">
                <ul>
                    {{-- <li><i class="icofont-clock-time"></i>Monday - Friday: 9:00 - 19:00</li> --}}
                    <li><i class="icofont-envelope"></i>Info@example.com</li>
                    <li><i class="icofont-stock-mobile"></i>(+55) 254. 254. 254</li>
                    {{-- <li><i class="icofont-home"></i>Helios Tower 75 Tam Trinh Hoang - Ha Noi - Viet Nam</li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>
