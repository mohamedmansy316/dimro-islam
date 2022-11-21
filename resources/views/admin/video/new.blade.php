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
                                <h4 class="card-title">Add new video</h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="{{route('admin.video.postCreate')}}" method="post" enctype="multipart/form-data" id="form">
                                    @csrf
									<div class="tab-content">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Title <span class="text-danger">*</span></label>
                                                        <input class="form-control" name="title" value="{{old('title') ?? ''}}" type="text" placeholder="Enter title here" required>
													</div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Slug <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="slug" value="{{old('slug') ?? ''}}" type="text" placeholder="Enter slug here" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Description <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" name="description" id="textEditor" cols="30" rows="10" required>{{old('description') ?? ''}}</textarea>
                                                    </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Content <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" name="content" id="content" cols="30" rows="10" required>{{old('content') ?? ''}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Author <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="author_id" id="author_id">
                                                            <option value="">Select author</option>
                                                            @forelse ($AllAuthors as $Author)
                                                                <option value="{{$Author->id}}">{{$Author->name}}</option>
                                                            @empty
                                                                <p>Create at least one Category</p>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Category <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="category_id" id="category_id">
                                                            <option value="">Select category</option>
                                                            @forelse ($SubCategories as $Category)
                                                                <option value="{{$Category->id}}">{{$Category->title}}</option>
                                                            @empty
                                                                <p>Create at least one Category</p>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Source name<span class="text-danger">*</span></label>
                                                    <select class="form-control" name="source_id" id="source_id">
                                                        <option value="">Select source</option>
                                                        @forelse ($AllSources as $Source)
                                                            <option value="{{$Source->id}}">{{$Source->title}}</option>
                                                            @empty
                                                                <p>Create at least one Category</p>
                                                            @endforelse
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Link <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="link" name="link" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Image</label>
                                                    <input class="form-control" id="image" name="image" type="file">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Video</button>
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
