@include('admin.layout.header')

<body>
@include('admin.layout.preloader')
@include('admin.layout.navbar')
<div class="noto-success">
    <p>Text Copied</p>
</div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Calendar Events</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850 table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Event Link</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($allEvents as $Event)
                                            <tr>
                                                <td>{{$Event->summary}}</td>
                                                <td><a href="{{$Event->htmlLink}}" target="_blank">{{$Event->htmlLink}}</a></td>
                                                <td>{{date('d, F Y', strtotime($Event->start->dateTime))}}</td>
                                                <td>{{date('d, F Y', strtotime($Event->end->dateTime))}}</td>
                                                <td>
													<div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="{{route('admin.calender.events.edit.get' , $Event->id)}}">Edit</a>
															<a class="dropdown-item" href="{{route('admin.calender.events.delete' , $Event->id)}}">Delete</a>
														</div>
													</div>
												</td>
                                            </tr>
                                        @empty
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
    </div>
  @include('admin.layout.scripts')
  {{-- <script>
    let button = document.querySelectorAll('.text-button');
    let noto = document.querySelector('.noto-success p');
    button.forEach(function(b){
        b.addEventListener('click', function(e) {
        e = e || window.event;
        var target = e.target || e.srcElement,
            text = target.textContent || target.innerText;
            let copy =  navigator.clipboard.writeText(text);
            noto.classList.add('active');
            setTimeout(() => {
            // 👇️ removes element from DOM
            noto.classList.remove('active');

            // 👇️ hides element (still takes up space on page)
            // box.style.visibility = 'hidden';
            }, 3000);
    }, false);
    });
  </script> --}}
</body>
</html>
