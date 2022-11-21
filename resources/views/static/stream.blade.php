@include('layouts.header')
<body>
        @include('layouts.navbar')
        <div class="breadcrumb-area breadcrumb-mt bg-gray breadcrumb-ptb-1">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Streams</h2>
                    <p>Seamlessly predominate enterprise metrics without performance based process improvements.</p>
                </div>
            </div>
        </div>
        <section id="streams">
            <div class="container">
                <div class="row">
                    @forelse ($AllVideos as $Video)
                            <div class="col-12 my-5">
                                <h2>{{$Video->title}}</h2>
                                <article>
                                    {!!$Video->description!!}
                                </article>
                                <iframe src="{{$Video->link}}" width="100%" height="500px" frameborder="0"></iframe>
                            </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </section>
    @include('layouts.footer')
    </div>
    @include('layouts.scripts')
</body>
</html>
