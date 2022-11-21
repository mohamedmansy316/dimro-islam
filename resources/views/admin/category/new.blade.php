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
                                <form class="p-3" action="" method="post" enctype="multipart/form-data" id="form">
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
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Type <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="type" id="type">
                                                            <option value="main" selected>Main</option>
                                                            <option value="sub">Sub</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="col-lg-6 mb-2 d-none parent-specialty">
                                                <div class="form-group">
                                                    <label class="form-control-label">Parent <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="parent_id" id="parent_id">
                                                        <option value="">Select category</option>
                                                        @forelse ($AllCategories as $Category)
                                                            <option value="{{$Category->id}}">{{$Category->title . ' - ' . $Category->type}}</option>
                                                        @empty
                                                            <p>Create at least one Category</p>
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Category</button>
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
