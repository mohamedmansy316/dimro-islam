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
                                <h4 class="card-title">Edit {{$type}}</h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="{{route('admin.resource.postEdit', [$TheResource->id, $type])}}" method="post" enctype="multipart/form-data" id="form">
                                    @csrf
									<div class="tab-content">
                                        <div class="row">
                                            <input type="text" value="{{$type}}" name="type" hidden>
                                            <div class="col-lg-12 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Title <span class="text-danger">*</span></label>
                                                        <input class="form-control" name="title" type="text" value="{{old('title') ?? $TheResource->title}}" placeholder="Enter title here" required>
													</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Description <span class="text-danger">*</span> (For Pages)</label>
                                                        <textarea class="form-control" name="description" id="textEditor" cols="30" rows="10" required>{{old('description') ?? $TheResource->description}}</textarea>
                                                    </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Content <span class="text-danger">*</span> (For SEO)</label>
                                                        <textarea class="form-control" name="content" id="content" cols="30" rows="10" required>{{old('content') ?? $TheResource->content}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Author</label>
                                                        <select class="form-control" name="author_id" id="author_id">
                                                            <option value="">Select author</option>
                                                            @forelse ($AllAuthors as $Author)
                                                                <option @if($TheResource->author_id == $Author->id) selected @endif value="{{$Author->id}}">{{$Author->name}}</option>
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
                                                        <select class="form-control" name="category_id" id="category_id" required>
                                                            <option value="1">Select category</option>
                                                            @forelse ($SubCategories as $Category)
                                                                <option @if($TheResource->category_id == $Category->id) selected @endif value="{{$Category->id}}">{{$Category->title}}</option>
                                                            @empty
                                                                <p>Create at least one Category</p>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Source name</label>
                                                    <select class="form-control" name="source_id" id="source_id">
                                                        <option value="1">Select source</option>
                                                        @forelse ($AllSources as $Source)
                                                            <option @if($TheResource->source_id == $Source->id) selected @endif value="{{$Source->id}}">{{$Source->title}}</option>
                                                            @empty
                                                                <p>Create at least one Category</p>
                                                            @endforelse
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-2 d-none url">
                                                <div class="form-group">
                                                    <label class="form-control-label">Link <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="url" name="url" value="{{old('url') ?? $TheResource->url}}" type="text" placeholder="Enter Link">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Image <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="image" name="image" type="file">
                                                        @if ($imageExist == 'yes')
                                                            <img class="mt-2" width="150px" src="{{$TheResource->ResourceImage}}" alt="">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2 file">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">File</label>
                                                        <input class="form-control" id="file" name="file" type="file">
                                                        @if ($filesExist == 'yes')
                                                        <a class="btn btn-outline-success py-2 px-3 mt-2" href="{{$TheResource->ResourceFile}}" download="{{$TheResource->ResourceFile}}">View file</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured"  @if ($TheResource->is_featured == 1) checked @endif  value="">
                                                    <label class="form-check-label" for="is_featured">Is Featured</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active"  @if ($TheResource->is_active == 1) checked @endif  value="">
                                                    <label class="form-check-label" for="is_active">Active</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update {{$type}}</button>
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
    <script>
		$(document).ready(function(){
            let type = "{{$type}}";
            console.log(type);
            if(type == 'video'){
                    $('.url').removeClass('d-none');
                    $('.file').addClass('d-none');
                    $("input[name='file']").val('');
                }
        });
	</script>
</body>

</html>
