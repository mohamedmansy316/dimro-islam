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
                                            <a href="{{route('singleBlog', $Blog->id)}}"><img src="{{$Blog->MeduimImage}}" alt=""></a>
                                        </div>
                                        <div class="blog-content">
                                            <h3><a href="{{route('singleBlog', $Blog->id)}}">{{$Blog->title}}</a></h3>
                                            <span class="mrg-top-inc">{{date('d F Y', strtotime($Blog->created_at))}}</span>
                                            <p class="text-ellipsis-3">{{$Blog->BlogDescription}}</p>
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
                    <div class="col-lg-3">
                        <div class="sidebar-search mb-70">
                            <form class="search-form" action="{{route('search.get')}}">
                                <input type="text" placeholder="Search Post" name="search">
                                <button class="button-search"><i class="icofont-search-1"></i></button>
                            </form>
                        </div>
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Popular Post </h4>
                            <div class="sidebar-post-wrap mt-45 mb-70">
                                @forelse ($LatestBlogs as $Blog)
                                <div class="single-sidebar-post">
                                    <div class="sidebar-post-img">
                                        <a href="{{route('singleBlog', $Blog->id)}}"><img src="{{$Blog->SmallSize}}" alt=""></a>
                                    </div>
                                    <div class="sidebar-post-content">
                                        <h4><a href="#">{{$Blog->title}}</a></h4>
                                        <span class="mrg-top-inc">{{date('d F Y', strtotime($Blog->created_at))}}</span>
                                    </div>
                                </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Categories</h4>
                            <div class="sidebar-widget-categori mt-45 mb-70">
                                <ul>
                                    @forelse ($Categories as $Category)
                                    <li><a>{{$Category->title}}</a></li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Tags</h4>
                            <div class="sidebar-widget-tag mt-50 mb-70">
                                <ul>
                                    <li><a href="#">Beauty</a> </li>
                                    <li><a href="#">Life Style</a> </li>
                                    <li><a href="#">Design</a> </li>
                                    <li><a href="#">Technology</a> </li>
                                    <li><a href="#">Fashion</a> </li>
                                    <li><a href="#">Furniture</a> </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>

@include('layouts.scripts')

</body>

</html>
