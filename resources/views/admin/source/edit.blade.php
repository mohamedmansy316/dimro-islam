@include('admin.layout.header')

<body>
    @include('admin.layout.preloader')
    @include('admin.layout.navbar')
        <!--**********************************
            Header start
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Source <span class="text-danger">{{$TheSource->title}}</span></h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="{{route('admin.source.postEdit', $TheSource->id)}}" method="post" enctype="multipart/form-data" id="form">
                                    @csrf
									<div class="tab-content">
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Title <span class="text-danger">*</span></label>
                                                        <input class="form-control" name="title" type="text" value="{{old('title') ?? $TheSource->title}}" required>
													</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Description</label>
                                                        <textarea class="form-control" name="description" id="textEditor" cols="30" rows="10" required>{{old('description') ?? $TheSource->description}}</textarea>
                                                    </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Content</label>
                                                        <textarea class="form-control" name="content" id="content" cols="30" rows="10" required>{{old('content') ?? $TheSource->content}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active"  @if ($TheSource->is_active == 1) checked @endif  value="">
                                                    <label class="form-check-label" for="is_active">Active</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
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
