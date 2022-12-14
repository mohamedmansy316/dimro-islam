@include('layouts.header')
<body>

    <div class="main-wrapper main-wrapper-3">
        @include('layouts.components.shop-navbar')
        <div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Fashion Shop</h2>
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
        <div class="shop-area pt-160 pb-160 section-padding-12">
            <div class="container-fluid">
                <form class="form-search-7" action="">
                    <div class="widget-style-3-wrap mb-25">
                        <div class="row">
                            <div class="custom-col-5-2 mb-30">
                                <div class="widget-dropdown">
                                    <select class="nice-select nice-select-style-3 nice-select-shop">
                                        <option>Categories</option>
                                        @forelse ($AllCategories as $category)
                                            <option>{{$category->title}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="custom-col-5-2 mb-30">
                                <div class="widget-dropdown">
                                    <select class="nice-select nice-select-style-3 nice-select-shop">
                                        <option>Color</option>
                                        @forelse ($AllColors as $color)
                                            <option>{{$color}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="custom-col-5-2 mb-30">
                                <div class="widget-dropdown">
                                    <select class="nice-select nice-select-style-3 nice-select-shop">
                                        <option>Size</option>
                                        @forelse ($AllSizes as $size)
                                            <option>{{$size}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="custom-col-5-2 mb-30">
                                <div class="widget-dropdown">
                                    <select class="nice-select nice-select-style-3 nice-select-shop">
                                        <option>Price ($0 - $120)</option>
                                        <option>Price ($10 - $100)</option>
                                        <option>Price ($30 - $130)</option>
                                        <option>Price ($40 - $140)</option>
                                        <option>Price ($50 - $150)</option>
                                        <option>Price ($60 - $160)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="custom-col-5-2 mb-30">
                                <div class="widget-dropdown">
                                    <select class="nice-select nice-select-style-3 nice-select-shop">
                                        <option>All Brands</option>
                                        @forelse ($AllBrands as $brand)
                                            <option>{{$brand->title}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col btn-style-3 btn-hover">
                                <a class="btn3-bg-green">Filter</a>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="shop-img-slider-section">
                    <div class="shop-top-bar">
                        <div class="shop-top-bar-left">
                            <div class="shop-tab nav">
                                <a href="#shop-1" class="active" data-bs-toggle="tab"><img class="inject-me" src="{{url('public/images/icon-img/shop-grid.svg')}}" alt=""></a>
                                <a href="#shop-2" data-bs-toggle="tab"><img class="inject-me"  src="{{url('public/images/icon-img/shop-list.svg')}}" alt=""></a>
                            </div>
                        </div>
                        {{-- <div class="shop-top-bar-right">
                            <div class="shop-page-list">
                                <ul>
                                    <li>Show</li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">6</a></li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                    <div class="tab-content pt-30">
                        <div id="shop-1" class="tab-pane active padding-16-row-col">
                            <div class="row">
                                @forelse ($AllProducts as $product)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-50">
                                        <div class="product-img product-img-zoom mb-25 product-img-slider-active dot-style-5">
                                            <a href="{{route('product.single', [$product->slug, $product->id])}}">
                                                <img src="{{$product->Thumb}}" alt="">
                                            </a>
                                            @forelse ($product->Gallery as $gallery)
                                            <a href="{{route('product.single', [$product->slug, $product->id])}}">
                                                <img src="{{$gallery->Thumb}}" alt="">
                                            </a>
                                            @empty
                                            @endforelse
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="{{route('product.single', [$product->slug, $product->id])}}">{{$product->title}}</a></h4>
                                            <div class="product-price">
                                                <span>{{$product->price}}</span>
                                                {{-- <span class="old-price">$ 130</span> --}}
                                            </div>
                                        </div>
                                        <div class="product-action-position-1 text-center">
                                            <div class="product-content">
                                                <h4><a href="{{route('product.single', [$product->slug, $product->id])}}">{{$product->title}}</a></h4>
                                                <div class="product-price">
                                                    <span>{{$product->price}}</span>
                                                    {{-- <span class="old-price">$ 130</span> --}}
                                                </div>
                                            </div>
                                            <div class="product-action-wrap">
                                                <div class="product-action-cart">
                                                    <button title="Add to Cart">Add to cart</button>
                                                </div>
                                                <button class="product-details-modal"  data-bs-toggle="modal" data-url="http://localhost:3000/dimro-islam/product/" data-info="{{$product->id}}" data-bs-target="#product{{$product->id}}"><i class="icon-zoom"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="product{{$product->id}}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                                                        <div class="quickview-img">
                                                            {{-- <img src="{{url('public/images/product/product.jpg')}}" alt=""> --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                                                        <div class="product-details-content quickview-content">
                                                            <h2>{{$product->title}}</h2>
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
                                @empty
                                @endforelse
                            </div>
                        </div>
                        <div id="shop-2" class="tab-pane ">
                            <div class="shop-list-wrap mb-50">
                                <div class="row">
                                @forelse ($AllProducts as $product)
                                <div class="shop-list-wrap mb-50">
                                    <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="product-list-img">
                                        <a href="product-details.html">
                                            <img src="{{$product->Thumb}}" alt="">
                                        </a>
                                        <div class="shop-list-quickview">
                                            <button class="product-details-modal" data-url="http://localhost:3000/dimro-islam/product/" data-info="{{$product->id}}" data-bs-toggle="modal" data-bs-target="#product{{$product->id}}"><i class="icon-zoom"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="shop-list-content ml-20">
                                        <h3><a href="#">{{$product->title}}</a></h3>
                                        <div class="pro-list-price">
                                            <span>{{$product->price}}</span>
                                            {{-- <span class="old-price">$50.00</span> --}}
                                        </div>
                                        <p>{!!$product->description!!}</p>
                                        <div class="product-list-action">
                                            <div class="product-action-cart">
                                                <button title="Add to Cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>

                                @empty
                                @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="pro-pagination-style text-center mt-50">
                            {{ $AllProducts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
        <!-- Modal -->

        <!-- Modal end -->
    </div>
    @include('layouts.scripts')
    <script>
        // $(document).ready(function () {
        //     $('.product-details-modal').click(function(){
        //         let productId = $(this).data('info');
        //         let ActionRoute = $(this).data('url')+productId;
        //         console.log(ActionRoute)
        //         $.ajax({
        //             url: ActionRoute,
        //             type: 'get',
        //             dataType: 'json',
        //             success: function (data) {
        //                 if (data.status == 'success') {
        //                     var dataArray = data.data;
        //                     let productModal = $('#productModal');
        //                     let modalImg = $(productModal).find('.quickview-img').html('<img src="//localhost/dimro-islam/storage/app/products/thumb/'+dataArray.image+'" />');
        //                     let modalContent = $(productModal).find('.product-details-content').html(`
        //                         <h2>${dataArray.title}</h2>
        //                     <p>${dataArray.description}</p>
        //                     <div class="pro-details-price">
        //                         <span>${dataArray.price}</span>
        //                     </div>
        //                     <div class="pro-details-color-wrap">
        //                         <span>Color:</span>
        //                         <div class="pro-details-color-content">
        //                             <ul>
        //                                 <li><a href="#" style="background: ${dataArray.color};"></a><span>${dataArray.color}</span></li>
        //                             </ul>
        //                         </div>
        //                     </div>
        //                     <div class="pro-details-size">
        //                         <span>Size:</span>
        //                         <div class="pro-details-size-content">
        //                             <ul>
        //                                 <li><a href="#">${dataArray.size}</a></li>
        //                             </ul>
        //                         </div>
        //                     </div>
        //                     <div class="pro-details-quality">
        //                         <span>Quantity:</span>
        //                         <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
        //                             <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
        //                         <div class="inc qtybutton">+</div></div>
        //                     </div>
        //                     <div class="pro-details-action-wrap">
        //                                 <div class="pro-details-buy-now">
        //                                     <a href="#">Add to cart</a>
        //                                 </div>
        //                                 <div class="pro-details-action">
        //                                     <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
        //                                     <div class="product-dec-social">
        //                                         <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook-square"></i></a>
        //                                         <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
        //                                         <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
        //                                         <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
        //                                     </div>
        //                                 </div>
        //                             </div>
        //                     `);

        //                 }
        //             },
        //             error: function(response){
        //             },
        //     });
        //     });
        // });
    </script>
</body>

</html>
