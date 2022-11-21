@include('layouts.header')


<body>

    <div class="main-wrapper main-wrapper-3">
@include('layouts.navbar')
        <div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Blog Details</h2>
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
                        <div class="blog-details-wrap ml-20">
                            <div class="blog-details-content">
                                <div class="blog-details-img">
                                    <img src="{{$TheBlog->FullSizeImage}}" alt="blog">
                                </div>
                                <h3>{{$TheBlog->title}}</h3>
                                <div class="blog-meta-5">
                                    <ul>
                                        <li>{{date('d F Y', strtotime($TheBlog->created_at))}}</li>
                                    </ul>
                                </div>
                                <div>
                                    {!!$TheBlog->description!!}
                                </div>
                            </div>
                            <div class="blog-details-tag-social">
                                <div class="blog-details-tag">
                                    {{-- <ul>
                                        <li>Tags : </li>
                                        <li><a href="#">Computer,</a></li>
                                        <li><a href="#">Design,</a></li>
                                        <li><a href="#">Technology.</a></li>
                                    </ul> --}}
                                </div>
                                <div class="blog-details-social">
                                    <ul>
                                        <li>Share this post :</li>
                                        <li><a class="facebook" href="#"><i class="icon-social-facebook-square"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="icon-social-twitter"></i></a></li>
                                        <li><a class="instagram" href="#"><i class="icon-social-instagram"></i></a></li>
                                        <li><a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="next-prev-wrap">
                                <div class="next-wrap next-prev-conent">
                                    <h4><a href="#">Brighten Up <br>Dull Tired Skin</a></h4>
                                    <a href="#">Prev Post</a>
                                </div>
                                <div class="prev-wrap next-prev-conent">
                                    <h4><a href="#">Beauty Pageants Should You <br> Let Your Teen Enter Them</a></h4>
                                    <a href="#">Next Post</a>
                                </div>
                            </div> --}}
                            <div class="blog-comments-area">
                                <h4 class="blog-details-title">{{count($Comments)}} Comment(s)</h4>
                                <div class="blog-comments-wrap">
                                    <div class="single-blog-bundel">
                                        @forelse ($Comments as $Comment)
                                        <div class="single-blog-comment mb-40">
                                            <div class="blog-comment-img">
                                                <img alt="" src="{{url('public/images/user.png')}}">
                                            </div>
                                            <div class="blog-comment-content">
                                                <p>“{{$Comment->subject}}</p>
                                                <div class="comment-name-reply">
                                                    <h5>{{date('d F Y', strtotime($TheBlog->created_at))}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h3>Leave a Reply </h3>
                                <p>Your email address will not be published.</p>
                                <form action="{{route('comment.post', [$TheBlog->id, 'blog'])}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="leave-form">
                                                <input placeholder="Name *" name="name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="leave-form">
                                                <input placeholder="Email *" name="email" type="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="leave-form">
                                                <input placeholder="Subject*" name="subject" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="leave-form">
                                                <textarea placeholder="Your Comment*"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-submit">
                                        <input type="submit" value="Post Comment">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-search mb-70">
                            <form class="search-form" action="#">
                                <input type="text" placeholder="Search Post">
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
                        {{-- <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Archives </h4>
                            <div class="sidebar-widget-archives mt-45">
                                <select class="nice-select nice-select-style-3 cart-tax-select">
                                    <option> June 2019 </option>
                                    <option> December 2018 </option>
                                    <option> November 2018 </option>
                                    <option> October 2017 </option>
                                    <option>August 2019</option>
                                </select>
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
