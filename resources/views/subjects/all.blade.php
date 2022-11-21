@include('layouts.header')

<body>
    <div class="main-wrapper main-wrapper-3">
        @include('layouts.navbar')
        <section class="" id="subjects-section">
            <div class="container">
                <div class="row text-center">
                    <h1>Islamic Resources</h1>
                    <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                    </p>
                </div>
            </div>
        </section>
        <section id="categories" class="section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-5">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Books</h2>
                                <a href="{{route('books.all')}}">See all</a>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4">
                                    @php
                                        $MainBook = $AllBooks->first();
                                    @endphp
                                    <div class="bg-gray second-shadow p-4 rounded-3">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <div>
                                                <h3>{{ $MainBook->title }}</h3>
                                            </div>
                                            <img width="90px" src="{{ $MainBook->BookImage }}"
                                                alt="{{ $MainBook->title }}">
                                        </div>
                                        <div>
                                            <p>
                                                {{ $MainBook->BookDescription }}
                                            </p>
                                            <a class="main-btn mt-2" href="{{route('books.single', $MainBook->id)}}">Read Book <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="books">
                                        @forelse ($AllBooks as $Book)
                                            <div class="book main-shadow px-3 py-4 rounded-3">
                                                <a href="{{route('books.single', $Book->id)}}"><img class="mb-2 w-100" src="{{ $Book->BookImage }}" alt=""></a>
                                                <div class="d-flex flex-column justify-content-end align-items-lg-baseline">
                                                    <h3 class="mt-1"><a  href="{{route('books.single', $Book->id)}}">{{ $Book->title }}</a></h3>
                                                    @if ($Book->author->name != 'Deleted Author')
                                                        <p><i class="fa-regular fa-circle-user"></i>
                                                            {{ $Book->author->name }}</p>
                                                    @endif
                                                    <a class="second-btn" href="{{route('books.single', $Book->id)}}">See Book</a>
                                                </div>
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
                                <div class="col-4">
                                    @php
                                        $MainAudio = $AllAudios->first();
                                    @endphp
                                    <div class="bg-gray second-shadow p-4 rounded-3">
                                        <div class="d-flex justify-content-between align-items-center my-4">
                                            <div class="">
                                                <audio controls class="w-100">
                                                    <input type="range" class="timeline" max="100" value="0">
                                                    <source src="horse.ogg" type="audio/ogg">
                                                    <source src="{{ $MainAudio->AudioFile }}" type="audio/mpeg">
                                                    Your browser does not support the audio element.
                                                </audio>
                                                <h3><a href="{{route('audios.single', $MainAudio->id)}}">{{ $MainAudio->title }}</a></h3>
                                                <small><i class="fa-regular fa-circle-user"></i>
                                                    {{ $MainAudio->Author->name }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="audios">
                                        @forelse ($AllAudios as $Audio)
                                            <div class="audio rounded-3 px-3 py-4 my-1 mx-2">
                                                <a class="d-block pe-5" href="">
                                                    <img class="mb-2 rounded-3" width="180px"
                                                        src="{{ $Audio->AudioImage }}" alt="">
                                                </a>
                                                <a class="d-block mt-2" href="">
                                                    <h3 class="mb-0"><a href="{{route('audios.single', $Audio->id)}}">{{ $Audio->title }}</a></h3>
                                                </a>
                                                @if ($Audio->author->name != 'Deleted Author')
                                                    <small><i class="fa-regular fa-circle-user"></i>
                                                        {{ $Audio->author->name }}</small>
                                                @endif
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
                                <div class="col-4">
                                    @php
                                        $MainArticle = $AllArticles->first();
                                    @endphp
                                    <div class="bg-gray second-shadow p-4 rounded-3">
                                        <div class="d-flex justify-content-between align-items-center my-4">
                                            <div class="">
                                                <h3><a href="{{route('articles.single', $MainArticle->id)}}">{{ $MainArticle->title }}</a></h3>
                                                <small><i class="fa-regular fa-circle-user"></i>
                                                    {{ $MainArticle->Author->name }}</small>
                                            </div>
                                            <img width="90px" src="{{ $MainArticle->ArticleImage }}"
                                                alt="{{ $MainArticle->title }}">
                                        </div>
                                        <div class="">
                                            <p>
                                                {{ $MainArticle->description }}
                                            </p>
                                            <a class="main-btn" href="{{route('articles.single', $MainArticle->id)}}">Read Article <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="articles">
                                        @forelse ($AllArticles as $Article)
                                            <div class="position-relative">
                                                <a href=""><img class="mb-2 rounded-3" width="150px" src="{{ $Article->ArticleImage }}" alt="{{ $Article->title }}">
                                                    <h3 class="mb-0"><a href="{{route('articles.single', $Article->id)}}">{{ $Article->ArticleTitle }}</a></h3>
                                                </a>
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
                        <div class="my-6">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2>Videos</h2>
                                <a href="{{route('videos.all')}}">See all</a>
                            </div>
                            <hr class="">
                            <div class="row">
                                <div class="col-4">
                                    @php
                                        $MainVideo = $AllVideos->first();
                                    @endphp
                                    <div class="bg-gray second-shadow p-4 rounded-3">
                                        <div class="d-flex justify-content-between align-items-center my-4">
                                            <div class="">
                                                <video class="rounded-3" width="100%" height="300" controls>
                                                    <source src="{{ $MainVideo->VideoFile }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <h3><a href="{{route('videos.single', $MainVideo->id)}}">{{$MainVideo->title}}</a></h3>
                                                <small><i class="fa-regular fa-circle-user"></i>
                                                    {{ $MainVideo->Author->name }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="articles">
                                        @forelse ($AllVideos as $Video)
                                            <div class="position-relative">
                                                <a class="d-block pe-5" href="{{route('videos.single', $Video->id)}}">
                                                    <img class="mb-2 rounded-3" width="180px"
                                                        src="{{ $Video->VideoImage }}" alt="">
                                                </a>
                                                <h3 class="mb-0"><a href="{{route('videos.single', $Video->id)}}">{{ $Video->title }}</a></h3>
                                                @if ($Video->author->name != 'Deleted Author')
                                                    <small><i class="fa-regular fa-circle-user"></i>
                                                        {{ $Video->author->name }}</small>
                                                @endif
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
    </div>
    @include('layouts.scripts')

</body>

</html>
