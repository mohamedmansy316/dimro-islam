@include('layouts.header')

<body>
        @include('layouts.navbar')
        <section id="categories" class="pt-3 mb-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('index')}}"><i class="fa-solid fa-house"></i> &nbsp;>&nbsp; </a><a href="{{route('AllSubjects.get')}}">Subjects > </a> <a href="{{route('books.all')}}"> Books &nbsp; > </a> <span>&nbsp; {{$TheBook->title}}</span>
                    </div>
                    <div class="col-12">
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-8">
                                    <article class="book py-3 rounded-3">
                                        <div class="article-main">
                                            <header>
                                                <h3 class=""><a href="">{{ $TheBook->title }}</a></h3>
                                            </header>
                                            @if ($TheBook->author->name != 'Deleted Author')
                                            <p>{{ $TheBook->author->name }}</p>
                                            @endif
                                            @if ($TheBook->Category->title != 'Deleted Category')
                                            <p>Category: <b><a href="">{{ $TheBook->Category->title }}</a></b></p>
                                            @endif
                                            <p><i class="fa-solid fa-calendar-days"></i> {{$Date}}</p>
                                        </div>
                                        <a class="main-btn mt-3" href="{{$TheBook->BookFile}}" download="{{$TheBook->BookFile}}">Download <i class="fa-solid fa-download"></i></a>
                                    </article>
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
                                                            <h5>{{date('d F Y', strtotime($TheBook->created_at))}}</h5>
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
                                        <form action="{{route('comment.post', [$TheBook->id, 'book'])}}" method="POST">
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
                                    <div class="row mt-35 border rounded-3 py-3 related main-shadow">
                                        <div class="col-12">
                                            <h2>
                                                Related Books
                                            </h2>
                                        </div>
                                        @forelse ($AllBooks as $Book)
                                        <div class="col-3">
                                            <article class="book px-3 rounded-3 my-3">
                                                <div class="article-photo mb-3">
                                                    <img class="rounded-2" width="100px" src="{{ $Book->BookImage }}" alt="">
                                                    </div>
                                                <div class="article-main">
                                                    <h3 class="mb-0"><a href="{{route('books.single', $Book->id)}}">{{ $Book->title }}</a></h3>
                                                    @if ($Book->author->name != 'Deleted Author')
                                                    <p>{{ $Book->author->name }}</p>
                                                    @endif
                                                </div>
                                            </article>
                                        </div>
                                    @empty
                                    @endforelse
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="most-readed bg-gray-6 p-3 rounded-3">
                                        <h2>Most Read</h2>
                                        @forelse ($AllBooks as $Book)
                                        <article class=" my-3">
                                            <div class="article-main">
                                                <h3 class="mb-0"><a href="">{{ $Book->title }}</a></h3>
                                                @if ($Book->author->name != 'Deleted Author')
                                                <p class="author">{{ $Book->author->name }}</p>
                                                @endif
                                            </div>
                                        </article>
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
    </div>
    @include('layouts.scripts')
    <script>
    </script>
</body>

</html>
