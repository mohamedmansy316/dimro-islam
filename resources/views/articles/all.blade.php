@include('layouts.header')

<body>
        @include('layouts.navbar')
        {{-- <section id="subjects-section">
            <div class="container">
                <div class="row text-center">
                    <h1>Islam Sources</h1>
                    <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen article. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                    </p>
                </div>
            </div>
        </section> --}}
        <section id="categories" class="pt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('index')}}"><i class="fa-solid fa-house"></i> &nbsp;>&nbsp; </a> <a href="{{route('AllSubjects.get')}}">Subjects > <a href="{{route('articles.all')}}"> Articles &nbsp;>
                    </div>
                    <div class="col-12">
                        <div class="mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Articles</h2>
                                <a class="" href="">See all</a>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-8">
                                    <div class="subjects-wrap">
                                        @forelse ($AllArticles as $Article)
                                            <article class="subject px-3 rounded-3">
                                                <div class="subject-main">
                                                    <header>
                                                        <h3 class=""><a href="{{route('articles.single', $Article->id)}}">{{ $Article->title }}</a></h3>
                                                    </header>
                                                    @if ($Article->author->name != 'Deleted Author')
                                                    <p>{{ $Article->author->name }}</p>
                                                    @endif
                                                    @if ($Article->Category->title != 'Deleted Category')
                                                    <p>Category: <b><a href="">{{ $Article->Category->title }}</a></b></p>
                                                    @endif
                                                </div>
                                                <div class="subject-photo">
                                                <img class="rounded-2" src="{{ $Article->ArticleImage }}" alt="">
                                                </div>
                                            </article>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="most-readed bg-gray-6 p-3 rounded-3">
                                        <h2>Most Read</h2>
                                        @forelse ($AllArticles as $Article)
                                        <article class=" my-3">
                                            <div class="article-main">
                                                <h3 class="mb-0"><a href="{{route('articles.single', $Article->id)}}">{{ $Article->title }}</a></h3>
                                                @if ($Article->author->name != 'Deleted Author')
                                                <p class="author">{{ $Article->author->name }}</p>
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
                        <a href="#"><i class="icon-social-facearticle-square"></i></a>
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
        // $('header').addClass('white-header');
    </script>
</body>

</html>
