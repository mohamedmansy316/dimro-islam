@include('admin.layout.header')

<body>
    @include('admin.layout.preloader')
    @include('admin.layout.navbar')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Blog Details</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    {{-- Contact Details --}}
                                    <b>Title</b> <p>{{$TheBlog->title}} </p>
                                    <b>Image</b> <br> <img width="50%" src="{{$TheBlog->MeduimImage}}" alt=""> <br>
                                    <b>Description</b> <p>{{$TheBlog->description}}</p>
                                    <b>Category</b> <p>{{$TheBlog->Category->title}}</p>
                                    <b>Date</b> <p>{{date('d F Y', strtotime($TheBlog->created_at))}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Blog Comments</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850 table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Status </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($AllComments as $Comments)
                                            <tr>
                                                <td>{{$Comments->name}}</td>
                                                <td>{{$Comments->email}}</td>
                                                <td>{{$Comments->subject}}</td>
                                                <td>@if ($Comments->CommentStatus == "Active") <i class="fa fa-circle text-success mr-1"></i> {{$Comments->CommentStatus}} @elseif ($Comments->CommentStatus == "Inactive") <i class="fa fa-circle text-danger mr-1"></i> {{$Comments->CommentStatus}} @endif</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            @if ($Comments->CommentStatus == "Inactive") <a class="dropdown-item" href="{{route('admin.comment.activate' , $Comments->id)}}">Activate</a> @endif
                                                            <a class="dropdown-item" href="{{route('admin.comment.delete' , $Comments->id)}}">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                        </tbody>
                                    </table>
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
.
