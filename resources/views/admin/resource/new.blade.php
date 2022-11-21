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
                                <h4 class="card-title">Add new {{$type}}</h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="{{route('admin.resource.postCreate', $type)}}" method="post" enctype="multipart/form-data" id="form">
                                    @csrf
									<div class="tab-content">
                                        <div class="row">
                                            <input type="text" value="{{$type}}" name="type" hidden>
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
                                                        <label class="form-control-label">Description <span class="text-danger">*</span> (For Pages)</label>
                                                        <textarea class="form-control" name="description" id="textEditor" cols="30" rows="10" required></textarea>
                                                    </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Content <span class="text-danger">*</span> (For SEO)</label>
                                                        <textarea class="form-control" name="content" id="content" cols="30" rows="10" required></textarea>
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
                                                        <select class="form-control" name="category_id" id="category_id" required>
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
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Source name</label>
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
                                        <div class="row">
                                            <div class="col-12 mb-2 d-none url">
                                                <div class="form-group">
                                                    <label class="form-control-label">Url <span class="text-danger">*</span></label>
                                                    <input class="form-control" id="url" name="url" type="text" placeholder="Enter Link">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Image <span class="text-danger">*</span></label>
                                                        <input class="form-control" id="image" name="image" type="file">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2 file">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-control-label">File</label>
                                                        <input class="form-control" id="file" name="file" type="file">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add {{$type}}</button>
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
