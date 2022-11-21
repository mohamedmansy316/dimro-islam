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
                                <h4 class="card-title">Edit subject <span class="text-danger">{{$TheSubject->title}}</span></h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="{{route('admin.subject.postEdit', $TheSubject->id)}}" method="post" enctype="multipart/form-data" id="form">
                                    @csrf
									<div class="tab-content">
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Title <span class="text-danger">*</span></label>
                                                        <input class="form-control" name="title" type="text" value="{{old('title') ?? $TheSubject->title}}" required>
													</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Description <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" name="description" id="textEditor" cols="30" rows="10" required>{{old('description') ?? $TheSubject->description}}</textarea>
                                                    </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Content <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" name="content" id="content" cols="30" rows="10" required>{{old('content') ?? $TheSubject->content}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Author <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="author_id" id="author_id">
                                                            <option value="1">Select author</option>
                                                            @forelse ($AllAuthors as $Author)
                                                                <option @if($TheSubject->author_id == $Author->id) selected @endif value="{{$Author->id}}">{{$Author->name}}</option>
                                                            @empty
                                                                <p>Create at least one Category</p>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Type <span class="text-danger">*</span></label>
                                                    </select>
                                                        <select class="form-control" name="type" id="type">
                                                            <option @if($TheSubject->type == 'book') selected @endif value="book">Book</option>
                                                            <option @if($TheSubject->type == 'audio') selected @endif value="audio">Audio</option>
                                                            <option @if($TheSubject->type == 'article') selected @endif value="article">Article</option>
                                                            <option @if($TheSubject->type == 'video') selected @endif value="video">Video</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Category <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="category_id" id="category_id">
                                                            <option value="1">Select category</option>
                                                            @forelse ($MainCategories as $Category)
                                                                <option @if($TheSubject->category_id == $Category->id) selected @endif value="{{$Category->id}}">{{$Category->title}}</option>
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
                                                        <option value="1">Select source</option>
                                                        @forelse ($AllSources as $Source)
                                                            <option @if($TheSubject->source_id == $Source->id) selected @endif value="{{$Source->id}}">{{$Source->title}}</option>
                                                            @empty
                                                                <p>Create at least one Category</p>
                                                            @endforelse
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-2 d-none content_type">
                                                <div class="form-group">
                                                    <label class="form-control-label">Content type <span class="text-danger">*</span></label>
                                                    <select class="form-control" id="content_type">
                                                        <option value="">Select contact type</option>
                                                        <option value="url">Embeded video</option>
                                                        <option value="file" selected>Upload a video</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-2 d-none content_url">
                                                <div class="form-group">
                                                    <label class="form-control-label">Content Url <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="content_url" name="content_url" type="text" placeholder="Enter URL">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2 content_file">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Content file <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="content_file" name="content_file" type="file">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured"  @if ($TheFatwa->is_featured == 1) checked @endif  value="">
                                                    <label class="form-check-label" for="is_featured">Is Featured</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active"  @if ($TheSubject->is_active == 1) checked @endif  value="">
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
    <script>
		$(document).ready(function(){
            $('#type').change(function(){
                if($(this).find(":selected").val() == 'video'){
                    $('.content_type').removeClass('d-none');
                }else{
                    $('.content_type').addClass('d-none');
                    $('#content_type').val('');
                    $('#content_url').val('');
                    $('.content_url').addClass('d-none');
                    $('.content_file').removeClass('d-none');
                }
            });
            $('#content_type').change(function(){
                // console.log($('#content_type').val())
                if($(this).find(":selected").val() == 'url'){
                    $('.content_url').removeClass('d-none');
                    $('.content_file').addClass('d-none');
                    $('#content_file').val('');
                }
                else if ($(this).find(":selected").val() == 'file'){
                    $('.content_file').removeClass('d-none');
                    $('.content_url').addClass('d-none');
                    $('#content_url').val('');
                }else{
                    $('#content_url').val('');
                    $('#content_file').val('');
                    $('.content_url').addClass('d-none');
                    $('.content_file').addClass('d-none');
                }
            });
        });
	</script>
</body>

</html>
