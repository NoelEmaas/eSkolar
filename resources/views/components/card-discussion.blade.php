<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card border border-0" style="box-shadow: 0px 0px 5px rgb(203, 209, 214);">
        <div class="card-header py-3 bg-white" style="border-color: #DEE2E6;">
            <div class="d-flex justify-content-between">
                <div class="container">
                    <div class="row">
                        <div class="col-auto">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                class="d-block ui-w-40 rounded-circle" alt="">
                        </div>
                        <div class="col-auto">
                            <div class="media-body ml-3">
                                Kenneth Frazier
                                <div class="text-muted small">3 days ago</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown">
                    <i class="bi bi-three-dots-vertical fs-3 text-muted " style="cursor: pointer"
                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Report</a></li>
                        @if(request()->is('profile'))
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body p-4">
            <div class="title mb-3">
                <h5 class="card-title">When will be the possible month of Opening Application for TES?</h5>
            </div>
            <div class="post-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis felis erat. Donec tortor erat, porta sed pretium vel, ultricies sit amet eros. Sed nec nisl id dolor placerat congue at et felis. Sed semper gravida lorem eget fringilla.</p>
            </div>
        </div>
        <div class="card-footer bg-white px-4 py-3 justify-content-center" style="border-color: #DEE2E6;">
            <div class="d-flex justify-content-between">
                <div>
                    <i class="bi bi-star" style="cursor: pointer"></i>
                    <span class="px-2">13</span>
                </div>
                <span style="cursor: pointer">13 responses</span>
            </div>
        </div>
    </div>
</div>
