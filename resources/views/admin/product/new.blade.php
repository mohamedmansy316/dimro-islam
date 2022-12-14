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
                                <h4 class="card-title">Add New Product</h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="{{route('admin.product.postCreate')}}" method="post" enctype="multipart/form-data" id="form">
                                    @csrf
									<div class="tab-content">
                                        <h4 class="mb-4">Main Information</h4>
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
                                                    <label class="form-control-label">SKU <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="sku" type="text" placeholder="Enter SKU Here" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Qty <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="qty" type="number" value="999" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Image <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="image" type="file" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Images</label>
                                                    <input class="form-control" name="images[]" type="file" multiple>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Category <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="category_id">
                                                        <option value="">Select Category</option>
                                                        @foreach($AllCategories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mb-4">Additional Information</h4>
                                        <div class="row">
                                            <div class="col-12 col-lg-4 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Color</label>
                                                    <input class="form-control" name="color" type="text" placeholder="Enter color Here">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Size</label>
                                                    <input class="form-control" name="size" type="text" placeholder="Enter size Here">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Height</label>
                                                    <input class="form-control" name="height" type="text" placeholder="Enter height Here">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Width</label>
                                                    <input class="form-control" name="width" type="text" placeholder="Enter width Here">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Depth</label>
                                                    <input class="form-control" name="depth" type="text" placeholder="Enter depth Here">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Description <span class="text-danger">*</span></label>
                                                    <textarea name="description" id="textEditor" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Content <span class="text-danger">*</span></label>
                                                    <textarea name="content" class="form-control" cols="30" rows="10" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mb-4">Pricing</h4>
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Price <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="price" type="text" placeholder="Enter Book Price Here" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Discount</label>
                                                    <select class="form-control" name="discount_id">
                                                        <option value="">Select Discount</option>
                                                        @foreach($AllDiscounts as $discount)
                                                            <option value="{{ $discount->id }}">{{ $discount->title }}</option>
                                                        @endforeach
                                                    </select>
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
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Product</button>
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
			$('#smartwizard').smartWizard();
		});
	</script>

</body>

</html>
