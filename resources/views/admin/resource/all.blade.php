@include('admin.layout.header')

<body>
@include('admin.layout.preloader')
@include('admin.layout.navbar')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All {{$type}}s</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850 table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Source</th>
                                                <th>Status</th>
                                                <th>Featured</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($AllResources as $Resource)
                                            <tr>
                                                <td>{{$Resource->title}}</td>
                                                <td>{{$Resource->Category->title}}</td>
                                                <td>{{$Resource->Author->name}}</td>
                                                <td>{{$Resource->Source->title}}</td>
                                                <td>@if ($Resource->ResourceStatus == "Active") <i class="fa fa-circle text-success mr-1"></i> {{$Resource->ResourceStatus}} @elseif ($Resource->ResourceStatus == "Inactive") <i class="fa fa-circle text-danger mr-1"></i> {{$Resource->ResourceStatus}} @endif</td>
                                                <td>@if ($Resource->is_featured == 1) <i class="fa fa-circle text-success mr-1"></i> Enabled @elseif ($Resource->is_featured == 0) <i class="fa fa-circle text-danger mr-1"></i> Inactive @endif</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="{{route('admin.resource.getEdit', [$Resource->id, $type])}}">Edit</a>
															<a class="dropdown-item" href="{{route('admin.resource.delete', $Resource->id)}}">Delete</a>
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
