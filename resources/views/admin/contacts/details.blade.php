@include('admin.layout.header')

<body>
    @include('admin.layout.preloader')
    @include('admin.layout.navbar')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Contact Details</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    {{-- Contact Details --}}
                                    <b>Name</b> <p>{{$Contact->name}} </p>
                                    <b>Email</b> <p>{{$Contact->email}}</p>
                                    <b>Phone</b> <p>{{$Contact->phone}}</p>
                                    <b>Message</b> <p>{{$Contact->message}}</p>
                                    <b>Date</b> <p>{{date('d F Y', strtotime($Contact->created_at))}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
    </div>
@include('admin.layout.scripts')
</body>
</html>
