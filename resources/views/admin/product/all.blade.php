@include('admin.layout.header')

<body>
@include('admin.layout.preloader')
@include('admin.layout.navbar')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Products</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850 table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>SKU</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Price</th>
                                                <th>Featured</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($AllBooks as $Book)
                                            <tr>
                                                <td>{{$Book->title}}</td>
                                                <td>{{$Book->Category->title}}</td>
                                                <td>{{$Book->Author->name}}</td>
                                                <td>{{$Book->Source->title}}</td>
                                                <td>@if ($Book->BookStatus == "Active") <i class="fa fa-circle text-success mr-1"></i> {{$Book->BookStatus}} @elseif ($Book->BookStatus == "Inactive") <i class="fa fa-circle text-danger mr-1"></i> {{$Book->BookStatus}} @endif</td>
                                                <td>@if ($Book->is_featured == 1) <i class="fa fa-circle text-success mr-1"></i> Yes @elseif ($Book->is_featured == 0) <i class="fa fa-circle text-danger mr-1"></i> No @endif</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="{{route('admin.book.getEdit' , $Book->id)}}">Edit</a>
															<a class="dropdown-item" href="{{route('admin.book.delete' , $Book->id)}}">Delete</a>
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
