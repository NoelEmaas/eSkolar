<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card border-0 scholarship-card" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
        <div class="card-header py-3 bg-white" style="border-color: #DEE2E6;">
            <div class="d-flex justify-content-between">
                <div class="container py-2">
                    <div class="row">
                        <div class="col-auto">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                            class="d-block ui-w-40 rounded-circle" alt="" role="button" data-bs-trigger="hover" 
                            data-bs-toggle="popover" data-bs-html="true" data-bs-placement="bottom" 
                            title=
                            '
                            <div class="row p-2">
                                <div class="col-auto">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                    class="d-block ui-w-40 rounded-circle" alt="">
                                </div>
                                <div class="col-auto">
                                    <div class="media-body m-auto pt-1">
                                        {{ $authorName }} 
                                        <!-- <div class="text-muted small">Ched Scholar</div> -->
                                    </div>
                                </div>
                            </div>
                            ' 
                            data-bs-content='
                            <div class="py-2 px-3 bg-primary d-flex justify-content-between rounded text-white stats">
                                <div class="d-flex flex-column">
                                    <span class="articles">Posts</span>
                                    <span class="number1">{{ $author_scholarship_count }}</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="followers">Forums</span>
                                    <span class="number2">{{ $author_forum_count }}</span>     
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="rating">Stars</span>
                                    <span class="number3">{{ $author_like_count }}</span>
                                </div>
                            </div>
                            '>
                        </div>
                        <div class="col-auto">
                            <div class="media-body ml-3">
                                <a href="{{ route('getProfile', ['user_id' => $authorId]) }}" style="color: inherit;">
                                    {{ $authorName }} 
                                </a>
                                <div class="text-muted small" style="font-size: 12px">{{ $created_at->format('M j, Y') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown-center py-2">
                    <i class="bi bi-three-dots-vertical fs-3 text-muted " style="cursor: pointer"
                    data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Report</a></li>
                        @if(Auth::check())
                            @if(Auth::user()->id == $authorId)
                            <li><a class="dropdown-item" href="#">Edit </a></li>
                            <li>
                                <form action="{{ route('deleteScholarship') }}" method="POST"> 
                                @csrf
                                @method('DELETE')
                                    <input type="hidden" name="scholarship_id" value="{{ $id }}">
                                    <button type="submit">Delete</button>
                                </form>
                            </li>
                            @endif
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body p-4 link-body">
            <a href="{{ route('getScholarship', ['scholarship_id' => $id]) }}" style="color: inherit;">
                <div class="title mb-3">
                    <p class="card-title fw-bold" style="font-size: 16px;">{{ $benefactor }}</p>
                    <p class="card-text fw-bold scholarship-program">{{ $program }}</p>
                </div>
                <p class="amount mb-3">Amount: Php {{ $amount_min }} - Php {{ $amount_max }}</p>
                <div class="post-content">
                    <p>{{ $description }}</p>
                </div>
            </a>
        </div>

        <div class="card-footer bg-white px-4 py-3 justify-content-center" style="border-color: #DEE2E6;">
            <div class="d-flex justify-content-between">
                @if(Auth::check())
                    <!-- Like button form -->
                    @if ($liked_by_user)
                    <form action="{{ route('delete.like') }}" method="POST">
                    @method('DELETE')
                    @else
                    <form action="{{ route('add.like') }}" method="POST">
                    @endif
                    @csrf
                        <input type="hidden" name="id" value="{{ $id }}" >
                        <input type="hidden" name="type" value="scholarship" >
                        @if (Auth::user())
                        <button type="submit" class="btn border-0 p-0 m-0">
                        @else
                        <button type="button" class="btn border-0 p-0 m-0">
                        @endif
                            <div class="px-3 py-2 rounded" style="background-color: #fdf2e2; color: #dd8100;">
                                @if ($liked_by_user)
                                    <i class="bi bi-star-fill" id="{{ $id }}_card_post_star" style="cursor: pointer"></i>
                                @else
                                    <i class="bi bi-star" id="{{ $id }}_card_post_star" style="cursor: pointer"></i>
                                @endif
                                <span class="ps-2 fw-bold" id="{{ $id }}_card_post_star_count">{{ $like_count }} stars</span>
                            </div>
                        </button>
                    </form>
                    <!-- End of Like button form -->
                @else 
                    <button type="button" class="btn border-0 p-0 m-0" data-bs-toggle="modal" data-bs-target="#not-logged-in-modal">
                        <div class="px-3 py-2 rounded" style="background-color: #fdf2e2; color: #dd8100;">
                            <i class="bi bi-star" id="{{ $id }}_card_post_star" style="cursor: pointer"></i>
                            <span class="ps-2 fw-bold" id="{{ $id }}_card_post_star_count">{{ $like_count }} stars</span>
                        </div>
                    </button>
                @endif
                
                <div class="d-flex justiy-content-center align-items-center px-3 py-2 rounded" style="background-color: #e6f8f0;">
                    <a href="#" class="text-decoration-none fw-bold" style="color: #008f53; font-size: 10px;">
                        <i class="bi bi-chat-left "></i>
                        <span class="ps-2" style="cursor: pointer">{{ $comment_count }} comments</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })

</script>