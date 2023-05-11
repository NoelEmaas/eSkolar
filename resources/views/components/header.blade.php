<nav class="navbar navbar-expand-lg border border-bottom-1 px-0 px-xxl-5 px-xl-5 px-lg-5 py-3 fixed-top bg-white">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/logo.svg') }}" alt="" height="30">
            <span style="font-family: 'Fira Sans', sans-serif; font-size: 18px;">eSkolar</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center w-100"
                style="font-size: 14px; font-weight: 500;">
                <li class="nav-item px-2 px-xxl-4 px-xl-4 px-lg-4 py-1">
                    <a class="nav-link active {{ request()->is('/') ? 'text-primary-emphasis fw-semibold' : '' }} "
                        aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item px-2 px-xxl-4 px-xl-4 px-lg-4 py-1">
                    <a class="nav-link active {{ request()->is('scholarships') ? 'text-primary-emphasis fw-semibold' : '' }}"
                        aria-current="page" href="/scholarships">Scholarships</a>
                </li>
                <li class="nav-item px-2 px-xxl-4 px-xl-4 px-lg-4 py-1">
                    <a class="nav-link active {{ request()->is('forums') ? 'text-primary-emphasis fw-semibold' : '' }}"
                        aria-current="page" href="/forums">Forums</a>
                </li>
                <li class="nav-item px-2 px-xxl-4 px-xl-4 px-lg-4 py-1">
                    <a class="nav-link active {{ request()->is('contact') ? 'text-primary-emphasis fw-semibold' : '' }}"
                        aria-current="page" href="/contact">Contact</a>
                </li>
            </ul>
            <hr class="d-xxl-none d-xl-none d-lg-none d-block mx-1">
            @if(Auth::check())
                @auth
                <div class= "d-xxl-flex d-xl-flex d-lg-flex d-none rounded-circle" style="border: 1px solid #acacac; padding: 1px;">
                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                    class="rounded-circle" alt="" width="35" height="35" role="button" data-bs-html="true"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom"
                    data-bs-title=
                    '
                    <div class="media-body m-auto pt-1 py-2">
                        <div class="d-flex" >
                            {{ Auth::user()->first_name }}
                            {{ Auth::user()->last_name }}
                        </div>
                        <div class="text-muted small">{{ Auth::user()->email }}</div>
                    </div>
                    '
                    data-bs-content=
                    ' 
                    <ul class="list-group list-group-flush rounded">
                        <a href="{{ route('getProfile', ['user_id' => Auth::user()->id ]) }}"><li class="list-group-item list-group-item-action border border-0"><i class="bi bi-person me-1 fs-5"></i> Your Profile</li></a>
                        <li class="list-group-item list-group-item-action border border-0"><i class="bi bi-collection me-2"></i> Own Posts</li>
                        <li class="list-group-item list-group-item-action border border-0">2<i class="bi bi-chat-square-dots me-2"></i> Own Forums</li>
                        <li class="list-group-item list-group-item-action"><i class="bi bi-star me-2"></i> Starred Posts</li>
                        <li class="list-group-item list-group-item-action py-3">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById("logout-form").submit();">
                               <i class="bi bi-box-arrow-in-left me-2"></i>
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                    '>
                </div>

                <div class="d-xxl-none d-xl-none d-lg-none d-block bg-light px-3 py-3 mx-1 rounded">
                    <div class="d-flex justify-content-between" role="button" data-bs-toggle="collapse" data-bs-target="#user-options" aria-controls="user-options">
                        <div class="d-flex">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                            class="rounded-circle my-auto" alt="" width="35" height="35">
                            <div class="ms-3">
                                <div class="d-flex" >
                                    {{ Auth::user()->first_name }}
                                    {{ Auth::user()->last_name }}
                                </div>
                                <div class="text-muted small">{{ Auth::user()->email }}</div>
                            </div>

                        </div>
                        <i class="bi bi-chevron-down my-auto me-2"></i>
                    </div>
                    <div class="collapse mt-3" id="user-options">
                        <div class="card card-body bg-transparent p-0 m-0">
                            <ul class="list-group list-group-flush rounded">
                                <li class="list-group-item list-group-item-action border border-0"><i class="bi bi-person me-1 fs-5"></i> Your Profile</li>
                                <li class="list-group-item list-group-item-action border border-0"><i class="bi bi-collection me-2"></i> Own Posts</li>
                                <li class="list-group-item list-group-item-action border border-0"><i class="bi bi-chat-square-dots me-2"></i> Own Forums</li>
                                <li class="list-group-item list-group-item-action"><i class="bi bi-star me-2"></i> Starred Posts</li>
                                <li class="list-group-item list-group-item-action py-3"><i class="bi bi-box-arrow-in-left me-2"></i> Sign Out</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endauth
            @else
                <button class="btn gs-btn" type="submit" style="width: 120px; font-size: 14px;" data-bs-toggle="modal"
                data-bs-target="#sign-in-form">Sign In</button>
            @endif
        </div>
    </div>
</nav>

<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>
