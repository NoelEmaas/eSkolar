<div class="d-flex flex-start p-4 rounded mb-3" style="background-color: #f5f5f5;">
    <img class="rounded-circle shadow-1-strong me-3 d-block"
        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60" height="40" />
    <div>
        <div class="d-flex justify-content-between">
            <div>
                <h6 class="fw-bold mb-1">{{ $authorName }}</h6>
                <div class="d-flex align-items-center mb-3">
                    <p class="mb-0 small text-muted">
                        <!-- March 07, 2021 -->
                        {{ $created_at }}
                    </p>
                    <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                    <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                    <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                </div>
            </div>

            <div class="dropdown">
                <i class="bi bi-three-dots-vertical fs-3 text-muted " style="cursor: pointer"
                data-bs-toggle="dropdown" aria-expanded="false"></i>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Report</a></li>
                  <li><a class="dropdown-item" href="#">Reply</a></li>
                  <li><a class="dropdown-item" href="#">Delete</a></li>
                </ul>
            </div>

        </div>
        <p class="mb-0">
            {{ $comment }}
        </p>
    </div>
</div>
