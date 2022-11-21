@include('layouts.header')

<body>
        @include('layouts.navbar')
        {{-- <section id="subjects-section">
            <div class="container">
                <div class="row text-center">
                    <h1>Islam Sources</h1>
                    <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen video. It has survived not
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
                        <a href="{{route('index')}}"><i class="fa-solid fa-house"></i> &nbsp;>&nbsp; </a> <a href="{{route('AllSubjects.get')}}">Subjects > </a> <a href="{{route('videos.all')}}"> Videos</a>
                    </div>
                    <div class="col-12">
                        <div class="mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Videos</h2>
                                <a class="" href="">See all</a>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-8">
                                    <div class="videos-wrap d-flex justify-content-around subjects-wrap">
                                        @forelse ($AllVideos as $Video)
                                            {{-- <article class="subject px-3 rounded-3">
                                                <div class="subject-main">
                                                    <header>
                                                        <h3 class=""><a href="{{route('videos.single', $Video->id)}}">{{ $Video->title }}</a></h3>
                                                    </header>
                                                    @if ($Video->author->name != 'Deleted Author')
                                                    <p>{{ $Video->author->name }}</p>
                                                    @endif
                                                    @if ($Video->Category->title != 'Deleted Category')
                                                    <p>Category: <b><a href="">{{ $Video->Category->title }}</a></b></p>
                                                    @endif
                                                </div>
                                                <div class="subject-photo">
                                                <img class="rounded-2" src="{{ $Video->VideoImage }}" alt="">
                                                </div>
                                            </article> --}}
                                            <a class="subject d-block" href="{{route('videos.single', $Video->id)}}" style="background-image:linear-gradient(#0000003b,#000000b8), url({{ $Video->VideoImage }});">
                                                <i class="fa-solid fa-play"></i>
                                                <h3 class="">{{ $Video->title }}</h3>
                                            </a>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="most-watched bg-gray-6 p-3 rounded-3">
                                        <h2>Most Watched</h2>
                                        @forelse ($AllVideos as $Video)
                                        <article class=" my-3">
                                            <div class="video-main">
                                                <h3 class="mb-0"><a href="{{route('videos.single', $Video->id)}}">{{ $Video->title }}</a></h3>
                                                @if ($Video->author->name != 'Deleted Author')
                                                <p class="author">{{ $Video->author->name }}</p>
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
                        <a href="#"><i class="icon-social-facevideo-square"></i></a>
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
