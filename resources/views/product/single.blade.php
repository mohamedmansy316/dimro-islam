@include('layouts.header')
<body>
    <div class="main-wrapper main-wrapper-2 main-wrapper-3">
        @include('layouts.components.shop-navbar')

        <div class="product-details-area slider-mt-7 pt-120 pb-70">
            <div class="container">
                <div class="product-details-top-content">
                    <div class="product-details-content">
                        <h2>{{$TheProduct->title}}</h2>
                        <p class="pro-dec-paragraph-2">{!!$TheProduct->description!!}</p>
                    </div>
                    <div class="product-details-content">
                        <div class="product-ratting-review-wrap">
                            <div class="product-ratting-digit-wrap">
                                <div class="product-ratting">
                                    <i class="icon-rating"></i>
                                    <i class="icon-rating"></i>
                                    <i class="icon-rating"></i>
                                    <i class="icon-rating"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                                <div class="product-digit">
                                    <span>4.0</span>
                                </div>
                            </div>
                            <div class="product-review-order">
                                <span>62 Reviews</span>
                                <span>242 orders</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="product-details-tab">
                            <div class="product-dec-left">
                                <div class="pro-dec-big-img-slider-2 product-big-img-style">
                                    <div class="easyzoom-style">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="{{$TheProduct->FullSize}}">
                                                <img src="{{$TheProduct->Thumb}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    @forelse ($TheProduct->Gallery as $gallery)
                                    <div class="easyzoom-style">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="{{$gallery->FullSize}}">
                                                <img src="{{$gallery->Thumb}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                            <div class="product-dec-right">
                                <div class="product-dec-slider-2 product-small-img-style">
                                    <div class="product-dec-small active">
                                        <img src="{{$TheProduct->SmallThumb}}" alt="">
                                    </div>
                                    @forelse ($TheProduct->Gallery as $gallery)
                                    <div class="product-dec-small active">
                                        <img src="{{$gallery->SmallThumb}}" alt="">
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="product-details-content quickview-content product-details-content-4">
                            <div class="pro-details-price pro-details-price-4">
                                <span>US $75.72</span>
                                <span class="old-price">US $95.72</span>
                            </div>
                            <div class="pro-details-color-wrap">
                                <span>Color:</span>
                                <div class="pro-details-color-content">
                                    <ul>
                                        <li><a class="white" href="#">Black</a></li>
                                        <li><a class="azalea" href="#">Blue</a></li>
                                        <li><a class="dolly" href="#">Green</a></li>
                                        <li><a class="peach-orange" href="#">Orange</a></li>
                                        <li><a class="mona-lisa active" href="#">Pink</a></li>
                                        <li><a class="cupid" href="#">gray</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pro-details-size">
                                <span>Size:</span>
                                <div class="pro-details-size-content">
                                    <ul>
                                        <li><a href="#">XS</a></li>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pro-details-quality">
                                <span>Quantity:</span>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                </div>
                            </div>
                            <div class="product-details-meta">
                                <ul>
                                    <li><span>Model:</span> <a href="#">Odsy-1000</a></li>
                                    <li><span>Ship To</span> <a href="#">2834 Laurel Lane</a>, <a href="#">Mentone</a> , <a href="#">Texas</a></li>
                                </ul>
                            </div>
                            <div class="pro-details-action-wrap">
                                <div class="pro-details-buy-now">
                                    <a href="#">Buy Now</a>
                                </div>
                                <div class="pro-details-action">
                                    <a title="Add to Cart" href="#"><i class="icon-basket"></i></a>
                                    <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                    <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                    <div class="product-dec-social">
                                        <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook-square"></i></a>
                                        <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                        <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                        <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-review-wrapper pb-155">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dec-review-topbar nav mb-65">
                            <a class="active" data-bs-toggle="tab" href="#des-details1">Description</a>
                            <a data-bs-toggle="tab" href="#des-details2">Specification</a>
                            <a data-bs-toggle="tab" href="#des-details3">Meterials </a>
                            <a data-bs-toggle="tab" href="#des-details4">Reviews and Ratting </a>
                        </div>
                        <div class="tab-content dec-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="description-wrap">
                                    <p>Crafted in premium watch quality, fenix Chronos is the first Garmin timepiece to combine a durable metal case with integrated performance GPS to support navigation and sport. In the tradition of classic tool watches it features a tough design and a set of modern meaningful tools like Elevate wrist heart rate, various sports apps.</p>
                                    <p> advanced performance metrics for endurance sports, Garmin quality navigation features and smart notifications. In fenix Chronos top-tier performance meets sophisticated design in a highly evolved timepiece that fits your style anywhere, anytime. Solid brushed 316L stainless steel case with brushed stainless steel bezel and integrated EXOTM antenna for GPS + GLONASS support. High-strength scratch resistant sapphire crystal. Brown vintage leather strap with hand-sewn contrast stitching and nubuck inner lining and quick release mechanism.</p>
                                </div>
                            </div>
                            <div id="des-details2" class="tab-pane">
                                <div class="specification-wrap table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="width1">Name</td>
                                                <td>Salwar Kameez</td>
                                            </tr>
                                            <tr>
                                                <td>SKU</td>
                                                <td>0x48e2c</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Models</td>
                                                <td>FX 829 v1</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Categories</td>
                                                <td>Digital Print</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Size</td>
                                                <td>60’’ x 40’’</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Brand </td>
                                                <td>Individual Collections</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Color</td>
                                                <td>Black, White</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="specification-wrap table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="width1">Top</td>
                                                <td>Cotton Digital Print Chain Stitch Embroidery Work</td>
                                            </tr>
                                            <tr>
                                                <td>Bottom</td>
                                                <td>Cotton Cambric</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Dupatta</td>
                                                <td>Digital Printed Cotton Malmal With Chain Stitch</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="des-details4" class="tab-pane">
                                <div class="review-wrapper">
                                    <h2>1 review for Sleeve Button Cowl Neck</h2>
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="assets/images/product-details/client-1.png" alt="">
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-name">
                                                    <h5><span>John Snow</span> - March 14, 2019</h5>
                                                </div>
                                                <div class="review-rating">
                                                    <i class="yellow icon-rating"></i>
                                                    <i class="yellow icon-rating"></i>
                                                    <i class="yellow icon-rating"></i>
                                                    <i class="yellow icon-rating"></i>
                                                    <i class="yellow icon-rating"></i>
                                                </div>
                                            </div>
                                            <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ratting-form-wrapper">
                                    <span>Add a Review</span>
                                    <p>Your email address will not be published. Required fields are marked <span>*</span></p>
                                    <div class="ratting-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Name <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Email <span>*</span></label>
                                                        <input type="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="star-box-wrap">
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Your review <span>*</span></label>
                                                        <textarea name="Your Review"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-submit">
                                                        <input type="submit" value="Submit">
                                                    </div>
                                                </div>
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
        <div class="product-area pb-155">
            <div class="container">
                <div class="section-title-8 mb-65">
                    <h2>You May Like Also</h2>
                </div>
                <div class="product-slider-active-4">
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-151.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-152.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-153.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-154.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="assets/images/product/product-152.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-area pt-160 bg-gray">
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
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                                <div class="quickview-img">
                                    <img src="assets/images/product/product-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                                <div class="product-details-content quickview-content">
                                    <h2>Electronic Shop</h2>
                                    <div class="product-ratting-review-wrap">
                                        <div class="product-ratting-digit-wrap">
                                            <div class="product-ratting">
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                            <div class="product-digit">
                                                <span>4.0</span>
                                            </div>
                                        </div>
                                        <div class="product-review-order">
                                            <span>62 Reviews</span>
                                            <span>242 orders</span>
                                        </div>
                                    </div>
                                    <p>Seamlessly predominate enterprise metrics without performance based process improvements.</p>
                                    <div class="pro-details-price">
                                        <span>US $75.72</span>
                                        <span class="old-price">US $95.72</span>
                                    </div>
                                    <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li><a class="white" href="#">Black</a></li>
                                                <li><a class="azalea" href="#">Blue</a></li>
                                                <li><a class="dolly" href="#">Green</a></li>
                                                <li><a class="peach-orange" href="#">Orange</a></li>
                                                <li><a class="mona-lisa active" href="#">Pink</a></li>
                                                <li><a class="cupid" href="#">gray</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">XS</a></li>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">XL</a></li>
                                                <li><a href="#">XXL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                    <div class="product-details-meta">
                                        <ul>
                                            <li><span>Model:</span> <a href="#">Odsy-1000</a></li>
                                            <li><span>Ship To</span> <a href="#">2834 Laurel Lane</a>, <a href="#">Mentone</a> , <a href="#">Texas</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-action-wrap">
                                        <div class="pro-details-buy-now">
                                            <a href="#">Buy Now</a>
                                        </div>
                                        <div class="pro-details-action">
                                            <a title="Add to Cart" href="#"><i class="icon-basket"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                            <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                            <div class="product-dec-social">
                                                <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook-square"></i></a>
                                                <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                                <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                                <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    </div>
    @include('layouts.scripts')

</body>

</html>
