@include('admin.layout.header')

<body>
@include('admin.layout.preloader')
@include('admin.layout.navbar')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Categories</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850 table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Gender</th>
                                                <th>Type</th>
                                                <th>Parent</th>
                                                <th>Children</th>
                                                <th>Products</th>
                                                <th>Featured</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($AllCategories as $Category)
                                            <tr>
                                                <td>{{$Category->title}}</td>
                                                <td>{{ucfirst($Category->gender)}}</td>
                                                <td>{{ucfirst($Category->type)}} category</td>
                                                <td>
                                                    @if($Category->parent_id != NULL)
                                                        {{$Category->Parent->title}}
                                                    @else
                                                    N/A
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($Category->type == 'main')
                                                    {{$Category->Children->count()}}
                                                    @else
                                                    N/A
                                                    @endif
                                                </td>
                                                <td>{{$Category->Products->count()}}</td>
                                                <td>@if ($Category->is_featured == 1) <i class="fa fa-circle text-success mr-1"></i> Yes @elseif ($Category->is_featured == 0) <i class="fa fa-circle text-danger mr-1"></i> No @endif</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="{{route('admin.productCategory.getEdit' , $Category->id)}}">Edit</a>
															<a class="dropdown-item" href="{{route('admin.productCategory.delete' , $Category->id)}}">Delete</a>
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
