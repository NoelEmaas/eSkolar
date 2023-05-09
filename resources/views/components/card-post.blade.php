<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card">
        <div class="card-header py-3 bg-white">
            <div class="d-flex justify-content-between">
                <div class="container">
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
                                {{ $authorName }} 
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
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body p-4">
            <div class="title mb-3">
                <h5 class="card-title">{{ $benefactor }}</h5>
                <p class="card-text text-muted">{{ $program }}</p>
            </div>
            <p class="amount mb-3">Amount: Php {{ $amount_min }} - Php {{ $amount_max }} </p>
            <div class="post-content">
                <p>{{ $description }}</p>
            </div>
        </div>
        <div class="card-footer bg-white px-4 py-3 justify-content-center">
            <div class="d-flex justify-content-between">
                <div>
                    <i class="bi bi-star" style="cursor: pointer"></i>
                    <span class="px-2">{{ $like_count }}</span>
                </div>
                <span style="cursor: pointer">{{ $comment_count }} comments</span>
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