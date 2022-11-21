@include('layouts.header')
<body>

    <div class="main-wrapper main-wrapper-3">
     @include('layouts.navbar')
     <section class="" id="hero-section">
        <div class="container">
            <div class="row text-center">
                <h1>Islamic Resources</h1>
                <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem</p>
                <a class="mt-2 hero-scroll-btn" id="ScrollDown" ><i class="fa-solid fa-angles-down"></i></a>
            </div>
        </div>
    </section>

        <div class="pre-order-area pt-50" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="pre-order-content pre-order-green">
                            <h3><a href="javascript:;">About Us</a></h3>
                            <p class="text-justify">Authoritatively matrix functionalized leadership skills after long-term high-impact channels. Monotonectally transition enterprise-wide best practices.</p>
                            <div class="btn-style-3 btn-hover">
                                <a class="btn3-ptb-2 mt-2 btn3-bg-green" href="{{route('about')}}">About us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pre-order-img-2">
                            <a href="javascript:;"><img src="{{url('public/images/test-book.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="categories" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-5">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Books</h2>
                                <a href="{{route('books.all')}}">See all</a>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <div class="resources-grid">
                                        @forelse ($AllBooks as $Book)
                                        <div class="book px-3 py-4 rounded-3 d-flex flex-column justify-content-between align-items-center">
                                            <div class="d-flex flex-column justify-content-end align-items-lg-baseline">
                                                <a href="{{route('books.single', $Book->id)}}"><img class="mb-2 w-100 rounded-3" src="{{ $Book->BookImage }}" alt=""></a>
                                                <h3 class="mt-1"><a  href="{{route('books.single', $Book->id)}}">{{ $Book->title }}</a></h3>
                                                @if ($Book->author->name != 'Deleted Author')
                                                    <p><i class="fa-regular fa-user"></i>
                                                        {{ $Book->author->name }}</p>
                                                @endif
                                            </div>
                                            <a class="second-btn w-100 text-center" href="{{route('books.single', $Book->id)}}">See Book</a>
                                        </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-6">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Audios</h2>
                                <a href="{{route('audios.all')}}">See all</a>
                            </div>
                            <hr class="">
                            <div class="row">
                                <div class="col-12">
                                    <div class="resources-grid">
                                        @forelse ($AllAudios as $Audio)
                                            <div class="audio rounded-3 px-3 py-4 my-1 mx-2">
                                                <a class="d-block" href="{{route('audios.single', $Audio->id)}}">
                                                    <img class="mb-2 rounded-3 w-100" src="{{ $Audio->AudioImage }}" alt="">
                                                </a>
                                                <h3 class="mb-0"><a href="{{route('audios.single', $Audio->id)}}">{{ $Audio->title }}</a></h3>
                                                @if ($Audio->author->name != 'Deleted Author')
                                                    <small><i class="fa-regular fa-circle-user"></i>
                                                        {{ $Audio->author->name }}</small>
                                                @endif
                                                {{-- <a class="audio-play" href=""><i class="fa-solid fa-play"></i></a> --}}
                                            </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-6">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Articles</h2>
                                <a href="{{route('articles.all')}}">See all</a>
                            </div>
                            <hr class="">
                            <div class="row">
                                <div class="col-12">
                                    <div class="resources-grid">
                                        @forelse ($AllArticles as $Article)
                                            <div class="position-relative">
                                                <img class="mb-2 rounded-3" width="150px" src="{{ $Article->ArticleImage }}" alt="{{ $Article->title }}">
                                                    <h3 class="mb-0"><a href="{{route('articles.single', $Article->id)}}">{{ $Article->title }}</a></h3>
                                                @if ($Article->author->name != 'Deleted Author')
                                                    <small><i class="fa-regular fa-circle-user"></i>
                                                        {{ $Article->author->name }}</small>
                                                @endif
                                            </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Videos</h2>
                                <a href="{{route('videos.all')}}">See all</a>
                            </div>
                            <hr class="">
                            <div class="row">
                                <div class="col-12">
                                    <div class="resources-grid">
                                        @forelse ($AllVideos as $Video)
                                        <div>
                                            <a class="d-block" href="{{route('videos.single', $Video->id)}}">
                                                <img class="mb-2 rounded-3" width="180px"
                                                    src="{{ $Video->ResourceImage }}" alt="">
                                            </a>
                                            <div class="px-2">
                                                <h3 class="mb-0"><a href="{{route('videos.single', $Video->id)}}">{{ $Video->title }}</a></h3>
                                                @if ($Video->author->name != 'Deleted Author')
                                                    <small><i class="fa-regular fa-circle-user"></i>
                                                        {{ $Video->author->name }}</small>
                                                @endif
                                            </div>
                                        </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="blog-area pb-125 pt-50">
            <div class="container">
                <div class="section-title st-peragraph-width st-peragraph-auto text-center mb-75">
                    <h2>Latest Blogs</h2>
                    <p>Proactively drive collaborative value and reliable mindshare. Distinctively negotiate superior users via economically sound models. Energistically underwhelm.</p>
                </div>
                <div class="row">
                    @forelse (FeaturedBlogs() as $Blog)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img mb-35">
                                <a href="{{route('singleBlog', $Blog->id)}}"><img src="{{$Blog->MeduimImage}}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h3><a href="{{route('singleBlog', $Blog->id)}}">{{$Blog->title}}</a></h3>
                                <span class="mrg-top-inc">{{date('d F Y', strtotime($Blog->created_at))}}</span>
                                <p>{{$Blog->BlogDescription}}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p>There's no BLogs</p>
                    @endforelse
                </div>
            </div>
        </div>
        <footer class="footer-area bg-gray-6 pt-115">
            <div class="container">
                <div class="footer-top-style-3 pb-75">
                    <div class="logo text-center">
                        <a href="index.html">
                            <img class="w-25" src="{{url('public/images/logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <p>Distinctively synergize orthogonal architectures without equity invested bandwidth.</p>
                    <div class="social-icon social-icon-center">
                        <a href="#"><i class="icon-social-twitter"></i></a>
                        <a href="#"><i class="icon-social-pinterest"></i></a>
                        <a href="#"><i class="icon-social-instagram"></i></a>
                        <a href="#"><i class="icon-social-facebook-square"></i></a>
                    </div>
                    <div class="footer-menu-2">
                        <nav>
                            <ul>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="{{route('blogs')}}">Blog</a></li>
                                <li><a href="{{route('about')}}">Products</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright-ptb-3 border-top-2">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="copyright-2">
                                    <p>Copyright © 2021 Dimro Islam - <a target="_blank" href="#"> All Right Reserved</a></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="footer-menu footer-menu-right footer-menu-right-blue">
                                    <nav>
                                        <ul>
                                            <li><a href="#">Terms</a></li>
                                            <li><a href="#">Privacy</a></li>
                                            <li><a href="#">License</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
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
                                    <img src="{{url('public/images/product-24.jpg')}}" alt="">
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
            </div>
        </div>
        <!-- Modal end -->
    </div>
@include('layouts.scripts')
    <script>
        $(document).ready(function(){
            $("#ScrollDown").click(function() {
                $('html, body').animate({
                    scrollTop: $("#about").offset().top - 250
                }, 1000);
            });

        });
        // const player = new Plyr('#player');
    </script>
</body>

</html>

{{-- <div class="audio-bar">
    <div class="row">
        <div class="col d-flex align-items-center justify-content-center">
            <button class="play-sound"><i class="fa-solid fa-play"></i></button>
        </div>
        <div class="col-11">
            <div id="waveform" data-audio="{{$AllAudios->first()}}"></div>
        </div>
    </div>
</div>
--}}
