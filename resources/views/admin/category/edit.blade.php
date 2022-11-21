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
                                <h4 class="card-title">Edit  <span class="text-danger">{{$Category->title}}</span></h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="" method="post" enctype="multipart/form-data" id="form">
                                    @csrf
									<div class="tab-content">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Title <span class="text-danger">*</span></label>
                                                        <input class="form-control" value="{{old('title') ?? $Category->title}}" name="title" type="text" placeholder="Enter Title Here" required>
													</div>
                                            </div>
                                            <div class="col-lg-6 mb-2 d-flex align-items-center">
                                                <div class="form-group">
                                                    <div class="form-check pt-4">
                                                        <input class="form-check-input" type="checkbox" name="is_active" checked>
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Active') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Type <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="type" id="type">
                                                            <option value="main" @if($Category->type == 'main') selected @endif>Main</option>
                                                            <option value="sub" @if($Category->type == 'sub') selected @endif>Sub</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="col-lg-6 mb-2 parent-specialty @if($Category->type == 'main') d-none @endif">
                                                <div class="form-group">
                                                    <label class="form-control-label">Parent <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="parent_id" id="parent_id">
                                                        <option value="">Select category</option>
                                                        @forelse ($AllCategories as $Categories)
                                                            @if ($Categories->id == $Category->id)
                                                            @else
                                                            <option @if($Category->parent_id == $Categories->id) selected @endif  value="{{$Categories->id}}">{{$Categories->title . ' - ' . $Categories->type}}</option>
                                                            @endif
                                                        @empty
                                                            <p>Create at least one Category</p>
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Category</button>
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
            $('#type').change(function(){
                if($(this).find(":selected").val() == 'sub'){
                    $('.parent-specialty').removeClass('d-none');
                }else{
                    $('.parent-specialty').addClass('d-none');
                    $('#parent_id').val('');
                }
            });
        });
	</script>

</body>

</html>
