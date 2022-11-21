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
                                <h4 class="card-title">Add new {{$Type}}</h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="{{route('admin.subject.postCreate', $Type)}}" method="post" enctype="multipart/form-data" id="form">
                                    @csrf
									<div class="tab-content">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Title <span class="text-danger">*</span></label>
                                                        <input class="form-control" name="title" type="text" placeholder="Enter title here" required>
													</div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Slug <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="slug" type="text" placeholder="Enter slug here" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Description <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" name="description" id="textEditor" cols="30" rows="10" required></textarea>
                                                    </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Content <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" name="content" id="content" cols="30" rows="10" required></textarea>
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
                                            {{-- <div class="col-12 col-md-6 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Type <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="type" id="type">
                                                            <option value="book">Book</option>
                                                            <option value="audio">Audio</option>
                                                            <option value="article">Article</option>
                                                            <option value="video">Video</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Category <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="category_id" id="category_id">
                                                            <option value="1">Select category</option>
                                                            @forelse ($SubCategories as $Category)
                                                                <option value="{{$Category->id}}">{{$Category->title}}</option>
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
                                                            <option value="{{$Source->id}}">{{$Source->title}}</option>
                                                            @empty
                                                                <p>Create at least one Category</p>
                                                            @endforelse
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="row">
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
                                        </div> --}}
                                        <div class="row">
                                            {{-- <div class="col-12 mb-2 d-none content_url">
                                                <div class="form-group">
                                                    <label class="form-control-label">Content Url <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="content_url" name="content_url" type="text" placeholder="Enter URL">
                                                </div>
                                            </div> --}}
                                            <div class="col-12 mb-2 file">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">File <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="file" name="file" type="file">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Subject</button>
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
    {{-- <script>
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
	</script> --}}
</body>

</html>
