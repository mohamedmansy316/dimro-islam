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
                                <form class="p-3" action="{{route('admin.calender.events.new.post')}}" method="post" enctype="multipart/form-data" id="form">
                                    @csrf
									<div class="tab-content">
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
													<div class="form-group">
                                                        <label class="form-control-label">Name <span class="text-danger">*</span></label>
                                                        <input class="form-control" name="name" type="text" placeholder="Enter Name Here" required>
													</div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Description <span class="text-danger">*</span></label>
                                                    <textarea id="textEditor" class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Start Date <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="start_date" type="date" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">Start Time <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="start_time" type="time" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">End Date <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="end_date" type="date" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">End Time <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="end_time" type="time" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Event</button>
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

</body>

</html>
