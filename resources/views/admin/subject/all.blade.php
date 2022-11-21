@include('admin.layout.header')

<body>
@include('admin.layout.preloader')
@include('admin.layout.navbar')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Subjects</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850 table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Type</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Source</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($AllSubjects as $Subject)
                                            <tr>
                                                <td>{{$Subject->title}}</td>
                                                <td>{{$Subject->type}}</td>
                                                <td>{{$Subject->Category->title}}</td>
                                                <td>{{$Subject->Author->name}}</td>
                                                <td>{{$Subject->Source->title}}</td>
                                                <td>@if ($Subject->SubjectStatus == "Active") <i class="fa fa-circle text-success mr-1"></i> {{$Subject->SubjectStatus}} @elseif ($Subject->SubjectStatus == "Inactive") <i class="fa fa-circle text-danger mr-1"></i> {{$Subject->SubjectStatus}} @endif</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="{{route('admin.subject.getEdit' , $Subject->id)}}">Edit</a>
															<a class="dropdown-item" href="{{route('admin.subject.delete' , $Subject->id)}}">Delete</a>
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
