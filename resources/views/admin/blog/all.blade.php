@include('admin.layout.header')

<body>
    @include('admin.layout.preloader')
    @include('admin.layout.navbar')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Blogs</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850 table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Featured</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($AllBlogs as $Blog)
                                            <tr>
                                                <td>{{$Blog->title}}</td>
                                                <td> <img class="admin-image-column" src="{{$Blog->SmallSize}}" alt=""></td>
                                                <td>{{$Blog->BlogDescription}}</td>
                                                <td>{{$Blog->Category->title}}</td>
                                                <td>@if ($Blog->is_active == 1) <i class="fa fa-circle text-success mr-1"></i> Active @elseif ($Blog->is_active == 0) <i class="fa fa-circle text-danger mr-1"></i> Inactive @endif</td>
                                                <td>@if ($Blog->is_featured == 1) <i class="fa fa-circle text-success mr-1"></i> Yes @elseif ($Blog->is_featured == 0) <i class="fa fa-circle text-danger mr-1"></i> No @endif</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="{{route('admin.blog.getEdit' , $Blog->id)}}">Edit</a>
															<a class="dropdown-item" href="{{route('admin.blog.delete' , $Blog->id)}}">Delete</a>
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
