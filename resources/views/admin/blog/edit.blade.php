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
                                <h4 class="card-title">Edit <span class="text-danger">{{$TheBlog->title}}</span></h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="{{route('admin.blog.postEdit', $TheBlog->id)}}" method="post" enctype="multipart/form-data" id="form">
                                    @csrf
									<div class="tab-content">
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Title <span class="text-danger">*</span></label>
                                                        <input class="form-control" value="{{old('title') ?? $TheBlog->title}}" name="title" type="text" placeholder="Enter Title Here" required>
													</div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Large Image</label>
                                                    <input class="form-control-file image-input" name="image" type="file">
                                                    <img class="my-3" src="{{$TheBlog->SmallSize ?? ''}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Small Image</label>
                                                    <input class="form-control-file image-input" name="small_image" type="file">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Description <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="editor" name="description" placeholder="Enter description Here" rows="8">{{old('description') ?? $TheBlog->description}}</textarea>

                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Content <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="editor" name="content" placeholder="Enter Content Here" rows="8">{{old('content') ?? $TheBlog->content}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Category</label>
                                                    <select class="form-control" name="category_id" id="category_id">
                                                        <option value="1">Select Category</option>
                                                        @forelse ($AllCategories as $Category)
                                                            <option @if($TheBlog->category_id == $Category->id) selected @endif value="{{$Category->id}}">{{$Category->title}}</option>
                                                        @empty
                                                            <p>Create at least one Category</p>
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active"  @if ($TheBlog->is_active == 1) checked @endif  value="">
                                                    <label class="form-check-label" for="is_active">Active</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured"  @if ($TheBlog->is_featured == 1) checked @endif  value="">
                                                    <label class="form-check-label" for="is_featured">Is Featured</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Required vendors -->
    @include('admin.layout.scripts')
	<script>
		$(document).ready(function(){
			// SmartWizard initialize
			$('#smartwizard').smartWizard();
		});
	</script>

</body>

</html>
