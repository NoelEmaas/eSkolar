<nav class="navbar navbar-expand-lg border border-bottom-2 px-0 px-xxl-5 px-xl-5 px-lg-5 py-3 fixed-top bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img class="px-2" src="{{ asset('assets/logo.svg') }}" alt="" height="30">
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
                    <a class="nav-link active {{ $currentPage == 'home' ? 'text-primary-emphasis fw-semibold' : '' }} "
                        aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item px-2 px-xxl-4 px-xl-4 px-lg-4 py-1">
                    <a class="nav-link active {{ $currentPage == 'scholarships' ? 'text-primary-emphasis fw-semibold' : '' }}"
                        aria-current="page" href="/scholarships">Scholarships</a>
                </li>
                <li class="nav-item px-2 px-xxl-4 px-xl-4 px-lg-4 py-1">
                    <a class="nav-link active {{ $currentPage == 'forums' ? 'text-primary-emphasis fw-semibold' : '' }}"
                        aria-current="page" href="/forums">Forums</a>
                </li>
                <li class="nav-item px-2 px-xxl-4 px-xl-4 px-lg-4 py-1">
                    <a class="nav-link active {{ $currentPage == 'contact' ? 'text-primary-emphasis fw-semibold' : '' }}"
                        aria-current="page" href="#">Contact</a>
                </li>
            </ul>
            <button class="btn mx-2 gs-btn" type="submit" style="width: 120px; font-size: 14px;" data-bs-toggle="modal"
                data-bs-target="#sign-in-form">Sign In</button>
        </div>
    </div>
</nav>
