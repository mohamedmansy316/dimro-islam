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
                                <h4 class="card-title">Edit Product <span class="text-danger">{{$TheProduct->title}}</span></h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="{{route('admin.product.postEdit', $TheProduct->id)}}" method="post" enctype="multipart/form-data" id="form">
                                    @csrf
									<div class="tab-content">
                                        <h4 class="mb-4">Main Information</h4>
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Title <span class="text-danger">*</span></label>
                                                        <input class="form-control" name="title" type="text" value="{{old('title') ?? $TheProduct->title}}" placeholder="Enter Title Here" required>
													</div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">SKU <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="sku"  value="{{old('sku') ?? $TheProduct->sku}}" type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Qty <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="qty"  value="{{old('qty') ?? $TheProduct->qty}}" type="text" value="999" required>
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
                                                    <label class="form-control-label">Category <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="category_id">
                                                        <option value="">Select Category</option>
                                                        @foreach($AllCategories as $category)
                                                            <option @if($TheProduct->category_id == $category->id) selected @endif  value="{{ $category->id }}">{{ $category->title }} - {{ucfirst($category->gender)}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Status <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="status" required>
                                                        <option value="">Select status</option>
                                                        <option @if($TheProduct->status == '1') selected @endif value="1">Available</option>
                                                        <option @if($TheProduct->status == '0') selected @endif value="0">Sold Out</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mb-4">Additional Information</h4>
                                        <div class="row">
                                            <div class="col-12 col-lg-4 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Color</label>
                                                    <input class="form-control" name="color" type="text"  value="{{old('color') ?? $TheProduct->color}}" placeholder="Enter color Here">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Size</label>
                                                    <input class="form-control" name="size" type="text"  value="{{old('size') ?? $TheProduct->size}}" placeholder="Enter size Here">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Height</label>
                                                    <input class="form-control" name="height" type="text"  value="{{old('height') ?? $TheProduct->height}}" placeholder="Enter height Here">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Width</label>
                                                    <input class="form-control" name="width" type="text"  value="{{old('width') ?? $TheProduct->with}}" placeholder="Enter width Here">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Depth</label>
                                                    <input class="form-control" name="depth" type="text"  value="{{old('depth') ?? $TheProduct->depth}}" placeholder="Enter depth Here">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Description <span class="text-danger">*</span></label>
                                                    <textarea name="description" id="textEditor" cols="30" rows="10">{{old('description') ?? $TheProduct->description}}"</textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Content <span class="text-danger">*</span></label>
                                                    <textarea name="content" class="form-control" cols="30" rows="10" required>{{old('content') ?? $TheProduct->content}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mb-4">Pricing</h4>
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Price <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="price" type="text" value="{{old('price') ?? $TheProduct->price}}" placeholder="Enter Book Price Here" required>
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
                                                        <input class="form-check-input" type="checkbox" name="is_featured" @if ($TheProduct->is_featured == 1) checked @endif>
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Featured') }}
                                                        </label>
                                                    </div>
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
