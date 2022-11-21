@include('layouts.header')

<body>

    <div class="main-wrapper main-wrapper-3">
@include('layouts.navbar')
        <div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Our Blogs</h2>
                    <p>Seamlessly predominate enterprise metrics without performance based process improvements.</p>
                </div>
            </div>
            <div class="breadcrumb-img-1">
                <img src="assets/images/about/breadcrumb-1.png" alt="">
            </div>
            <div class="breadcrumb-img-2">
                <img src="assets/images/about/breadcrumb-2.png" alt="">
            </div>
        </div>
        <div class="blog-area pt-160 pb-160">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="main-blog-wrap ml-20">
                            <div class="row">
                                @forelse ($AllBlogs as $Blog)
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="blog-wrap mb-50">
                                        <div class="blog-img mb-35">
                                            <a href="#"><img src="{{$Blog->MeduimImage}}" alt=""></a>
                                        </div>
                                        <div class="blog-content">
                                            <h3><a href="#">{{$Blog->title}}</a></h3>
                                            <span class="mrg-top-inc">{{date('d F Y', strtotime($Blog->created_at))}}</span>
                                            <p class="text-ellipsis-3">{{$Blog->description}}</p>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                @endforelse
                            </div>
                            <div class="pro-pagination-style text-center mt-20">
                                <ul>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-area bg-gray pt-160">
            <div class="footer-top pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-title">Product</h3>
                                <div class="footer-info-list">
                                    <ul>
                                        <li><a href="#">Coats</a></li>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Hoodies & Sweatshirts</a></li>
                                        <li><a href="#">Infant & Toddlers Clothing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-title">Information</h3>
                                <div class="footer-info-list">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">Shipping & Return</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-title">Socials</h3>
                                <div class="footer-info-list">
                                    <ul>
                                        <li><a href="#">Instagram</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Pinterest</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-title">Subscribe to get offer!</h3>
                                <div class="subscribe-wrap">
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input class="email" type="email" required="" placeholder="Your email" name="EMAIL" value="">
                                                <div class="mc-news" aria-hidden="true">
                                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                                </div>
                                                <div class="clear">
                                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <p>We’ll never share your email address with a third-party.</p>
                                </div>
                                <div class="app-google-store">
                                    <a href="#"><img src="assets/images/icon-img/app-store.png" alt=""></a>
                                    <a href="#"><img src="assets/images/icon-img/google-play.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom border-top-1">
                <div class="container">
                    <div class="copyright copyright-ptb text-center">
                        <p>Copyright © 2021 Dking - <a target="_blank" href="https://hasthemes.com/"> All Right Reserved</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

@include('layouts.scripts')

</body>

</html>
