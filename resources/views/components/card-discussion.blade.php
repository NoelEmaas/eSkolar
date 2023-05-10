<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card border-0" style="box-shadow: 0px 0px 5px rgb(203, 209, 214);">
        <div class="card-header py-3 bg-white" style="border-color: #DEE2E6;">
            <div class="d-flex justify-content-between">
                <div class="container py-2">
                    <div class="row">
                        <div class="col-auto">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                class="d-block ui-w-40 rounded-circle" alt="">
                        </div>
                        <div class="col-auto">
                            <div class="media-body ml-3">
                                <a href="{{ route('getProfile', ['user_id' => $authorId]) }}">
                                    {{ $authorName }}
                                </a>
                                <div class="text-muted small fw-light" style="font-size: 12px;">{{ $created_at }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown py-2">
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
        <div class="card-body p-4 link-body">
            <a href="{{ route('getForum', ['forum_id' => $id]) }}" style="color: inherit;">
                <div class="title mb-3">
                    <p class="fw-bolder forum-title" style="font-size: 16px;">{{ $title }}</p>
                </div>
                <div class="post-content">
                    <p>{{ $description }}</p>
                </div>
            </a>
        </div>

        <div class="card-footer bg-white px-4 py-3 justify-content-center" style="border-color: #DEE2E6;">
            <div class="d-flex justify-content-between">
                <div class="px-3 py-2 rounded" style="background-color: #fdf2e2; color: #dd8100;">
                    <i class="bi bi-star" style="cursor: pointer"></i>
                    <span class="px-2 fw-bold">{{ $likeCount }} stars</span>
                </div>
                <div class="d-flex justiy-content-center align-items-center px-3 py-2 rounded" style="background-color: #e6f8f0;">
                    <a href="#" class="text-decoration-none fw-bold" style="color: #008f53; font-size: 10px;">
                        <i class="bi bi-chat-left "></i>
                        <span class="px-2" style="cursor: pointer">{{ $commentCount }} comments</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
