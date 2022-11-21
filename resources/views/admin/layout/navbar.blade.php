<div id="main-wrapper">
    <div class="nav-header">
        <a href="{{route('admin.home')}}" class="brand-logo">
            {{-- <img class="logo-abbr" src="{{url('public/admin/images/download.png')}}" alt=""> --}}
            <img class="logo-compact" src="{{url('public/admin/images/logo.jpeg')}}" alt="">
            <img class="brand-title" src="{{url('public/admin/images/logo.jpeg')}}" alt="">
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Dashboard
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item">
                        <div class="input-group search-area d-xl-inline-flex d-none">
                            <input type="text" class="form-control" placeholder="Search here...">
                            <div class="input-group-append">
                                <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                            <img src="images/profile/17.jpg" width="20" alt=""/>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="./app-profile.html" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ml-2">Profile </span>
                            </a>
                            <a href="./page-login.html" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ml-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
@if (session()->has('success'))
<div class="alert alert-success left-icon-big alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
    </button>
    <div class="media">
        <div class="alert-left-icon-big">
            <span><i class="mdi mdi-check-circle-outline"></i></span>
        </div>
        <div class="media-body">
            <h5 class="mt-1 mb-2">Success</h5>
            <p class="mb-0">{{ session('success') }}</p>
        </div>
    </div>
</div>
@endif
@if ($errors->any())
<div class="alert alert-warning left-icon-big alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
    </button>
    <div class="media">
        <div class="alert-left-icon-big">
            <span><i class="mdi mdi-help-circle-outline"></i></span>
        </div>
        <div class="media-body">
            <h5 class="mt-1 mb-2">Error</h5>
            @foreach ($errors->all() as $error)
            <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
    </div>
</div>
@endif
 <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				{{-- <a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside" >+ New Event</a> --}}
				<ul class="metismenu pt-0" id="menu">
                <li>
                    <h6 class="text-center" href="javascript:void()">
                        <hr>
                        <span class="nav-text">Subjects Management</span>
                    <hr>
                    </h6>
                </li>
                {{-- Book Management Start --}}
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Books</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.resource.all', 'book')}}">View All</a></li>
                        <li><a href="{{route('admin.resource.getCreate', 'book')}}">Add New</a></li>
                    </ul>
                </li>
                {{-- Book Management End --}}
                {{-- Article Management Start --}}
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Articles</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.resource.all','article')}}">View All</a></li>
                        <li><a href="{{route('admin.resource.getCreate','article')}}">Add New</a></li>
                    </ul>
                </li>
                {{-- Article Management End --}}
                {{-- Audio Management Start --}}
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Audios</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.resource.all','audio')}}">View All</a></li>
                        <li><a href="{{route('admin.resource.getCreate','audio')}}">Add New</a></li>
                    </ul>
                </li>
                {{-- Audio Management End --}}
                {{-- Audio Management Start --}}
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Video</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.resource.all','video')}}">View All</a></li>
                        <li><a href="{{route('admin.resource.getCreate','video')}}">Add New</a></li>
                    </ul>
                </li>
                {{-- Audio Management End --}}
                {{-- Fatawa Management Satrt --}}
                    <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Fatawa</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.resource.all','fatawa')}}">View All</a></li>
                        <li><a href="{{route('admin.resource.getCreate','fatawa')}}">Add New</a></li>
                    </ul>
                </li>
                {{-- Fatawa Management End --}}
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Categories</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.category.all')}}">View All</a></li>
                        <li><a href="{{route('admin.category.getCreate')}}">Add New</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Authors</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.author.all')}}">View All</a></li>
                        <li><a href="{{route('admin.author.getCreate')}}">Add New</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Sources</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.source.all')}}">View All</a></li>
                        <li><a href="{{route('admin.source.getCreate')}}">Add New</a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="text-center" href="javascript:void()">
                        <hr>
                        <span class="nav-text">Content Management</span>
                    <hr>
                    </h6>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Blog</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.blogs.all')}}">View All</a></li>
                    <li><a href="{{route('admin.blog.getCreate')}}">Add New</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-networking"></i>
                <span class="nav-text">Calendar</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('admin.calender.index')}}">View All</a></li>
                <li><a href="{{route('admin.calender.events.new.get')}}">Add New</a></li>
            </ul>
            </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Contacts</span>
                    </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.contacts.all')}}">View All</a></li>
                </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Comments</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.comments.all')}}">View Comments</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Live Streams</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.stream.all')}}">View All</a></li>
                        <li><a href="{{route('admin.stream.getCreate')}}">Add New</a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="text-center" href="javascript:void()">
                        <hr>
                        <span class="nav-text">E-commerce Management</span>
                    <hr>
                    </h6>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Products</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.products.all')}}">View All</a></li>
                        <li><a href="{{route('admin.product.getCreate')}}">Add New</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Categories</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.productCategory.all')}}">View All</a></li>
                        <li><a href="{{route('admin.productCategory.getCreate')}}">Add New</a></li>
                    </ul>
                </li>
                </ul>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
