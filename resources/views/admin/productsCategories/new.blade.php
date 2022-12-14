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
                                <h4 class="card-title">Add New Category</h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="{{route('admin.productCategory.postCreate')}}" method="post" enctype="multipart/form-data" id="form">
                                    @csrf
									<div class="tab-content">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Title <span class="text-danger">*</span></label>
                                                        <input class="form-control" name="title" type="text" placeholder="Enter Title Here" required>
													</div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Slug <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="slug" type="text" placeholder="Enter Slug Here" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Image</label>
                                                    <input class="form-control" name="image" type="file">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Gender <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="gender">
                                                        <option value="">Select gender</option>
                                                        <option value="men">Men</option>
                                                        <option value="women">Women</option>
                                                        <option value="unisex">Unisex</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-2" id="type">
                                                <div class="form-group">
                                                    <label class="form-control-label">Type <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="type">
                                                        <option value="">Select type</option>
                                                        <option value="main">Parent Category</option>
                                                        <option value="sub">Child Category</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-2 parent-category d-none">
                                                <div class="form-group">
                                                    <label class="form-control-label">Parent Category <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="parent_id">
                                                        <option value="">Select type</option>
                                                        @foreach($AllCategories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Order Number <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="order_number" type="text" value="999" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="is_featured">
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Featured') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
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
			// $('#smartwizard').smartWizard();
            $('#type').change(function(){
                if($(this).find(":selected").val() == 'sub'){
                    $('.parent-category').removeClass('d-none');
                }else{
                    $('.parent-category').addClass('d-none');
                    $('#parent_id').val('');
                }
            });
		});
	</script>
</body>

</html>
