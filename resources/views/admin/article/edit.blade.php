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
                                <h4 class="card-title">Edit article <span class="text-danger">{{$TheArticle->title}}</span></h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="{{route('admin.article.postEdit', $TheArticle->id)}}" method="post" enctype="multipart/form-data" id="form">
                                    @csrf
									<div class="tab-content">
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Title <span class="text-danger">*</span></label>
                                                        <input class="form-control" name="title" type="text" value="{{old('title') ?? $TheArticle->title}}" required>
													</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Description <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" name="description" id="textEditor" cols="30" rows="10" required>{{old('description') ?? $TheArticle->description}}</textarea>
                                                    </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Content <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" name="content" id="content" cols="30" rows="10" required>{{old('content') ?? $TheArticle->content}}</textarea>
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
                                                                <option @if($TheArticle->author_id == $Author->id) selected @endif value="{{$Author->id}}">{{$Author->name}}</option>
                                                            @empty
                                                                <p>Create at least one Category</p>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Category <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="category_id" id="category_id">
                                                            <option value="">Select category</option>
                                                            @forelse ($MainCategories as $Category)
                                                                <option @if($TheArticle->category_id == $Category->id) selected @endif value="{{$Category->id}}">{{$Category->title}}</option>
                                                            @empty
                                                                <p>Create at least one Category</p>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Source name<span class="text-danger">*</span></label>
                                                    <select class="form-control" name="source_id" id="source_id">
                                                        <option value="">Select source</option>
                                                        @forelse ($AllSources as $Source)
                                                            <option @if($TheArticle->source_id == $Source->id) selected @endif value="{{$Source->id}}">{{$Source->title}}</option>
                                                            @empty
                                                                <p>Create at least one Category</p>
                                                            @endforelse
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-2 file">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">File <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="file" name="file" type="file">
                                                    </div>
                                                </div>
                                                @if ($FileExsits)
                                                    <a class="btn btn-outline-success px-4" target="_blank" href="{{$TheArticle->ArticleFile}}">View Article <i class="fa fa-book" aria-hidden="true"></i></a>
                                                @endif
                                            </div>
                                            <div class="col-12 col-md-6 mb-2 file">
                                                <div class="form-group">
                                                    <label class="form-control-label">Image <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="image" name="image" type="file">
                                                    @if ($ImageExsits)
                                                    <img width="200px" src="{{$TheArticle->ArticleImage}}" alt="">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured"  @if ($TheArticle->is_featured == 1) checked @endif  value="">
                                                    <label class="form-check-label" for="is_featured">Is Featured</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active"  @if ($TheArticle->is_active == 1) checked @endif  value="">
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
