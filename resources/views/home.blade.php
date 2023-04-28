@extends('layouts.app')

@section('content')
{{-- hero section --}}
<div class="container-fluid hero">
    <div class="blobs d-xxl-block d-none">
        <div class="position-absolute" style="opacity: 0.1; left: 6%; top: 17%;">
            <svg id="10015.io" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 200px; height: 200px;">
                <path fill="#3a78ff" d="M452.5,298.5Q443,357,399,397.5Q355,438,297.5,457Q240,476,181.5,459Q123,442,80,399.5Q37,357,19.5,298.5Q2,240,25,184.5Q48,129,85,82.5Q122,36,181,28Q240,20,296.5,32Q353,44,399,83Q445,122,453.5,181Q462,240,452.5,298.5Z" />
          </svg>
        </div>
        <div class="position-absolute " style="opacity: 0.1; left: 24%; top: 14%;">
            <svg id="10015.io" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 90px; height: 90px;">
                <path fill="#ff4f5e" d="M413.5,341.5Q357,443,240,443Q123,443,66,341.5Q9,240,65,137Q121,34,239,36Q357,38,413.5,139Q470,240,413.5,341.5Z" />
            </svg>
        </div>
        <div class="position-absolute " style="opacity: 0.1; left: 40%; top: 18%;">
            <svg id="10015.io" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 120px; height: 120px;">
                <path fill="#3F9896" d="M434,294.5Q409,349,370.5,395.5Q332,442,274,424.5Q216,407,156,407Q96,407,53.5,357Q11,307,23.5,243.5Q36,180,76.5,139Q117,98,163.5,63.5Q210,29,272,31.5Q334,34,370,83.5Q406,133,432.5,186.5Q459,240,434,294.5Z" />
            </svg>
        </div>
        <div class="position-absolute " style="opacity: 0.1; left: 17%; top: 70%;">
            <svg id="10015.io" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  style="width: 80px; height: 80px;">
                <path fill="#ED9221" d="M429,319.5Q399,399,319.5,436Q240,473,156.5,440Q73,407,40.5,323.5Q8,240,44.5,160.5Q81,81,160.5,41.5Q240,2,320,41Q400,80,429.5,160Q459,240,429,319.5Z" />
            </svg>
        </div>
    </div>
    <div class="container pt-5 pb-2">
        <div class="row hero-content">
            <div class="col m-auto">
                <h1 class="fw-bolder lh-2 title-fs">Bringing students closer to achieving their dreams.
                </h1>
                <p style="font-size: 16px;">Find a suitable scholarship and achieve your academic goals. Browse
                    scholarships, connect with peers, and start your journey to success today.</p>
                <div class="input-group mt-4">
                    <input type="text" class="form-control py-3" placeholder="Search scholarship"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-primary px-4" type="button" id="button-addon2">Search</button>
                </div>
            </div>
            <div class="col m-auto text-center d-xxl-block d-xl-block d-lg-block d-none">
                <img src="{{ asset('assets/vector.png') }}" width="650" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="w-100 fade-effect p-0 m-0"></div>  
</div>
{{-- end of hero section --}}

{{-- purpose section --}}
<div class="container-fluid py-5">
    <div class="container mb-5">
        <h1 class="text-center fw-bolder">What's Our Purpose</h1>
        <p class="text-center px-1 pb-4">This tool simplifies scholarship searches for students and helps educational institutions provide accurate financial assistance information.</p>
        <div class="row d-none d-xxl-flex d-xl-flex d-lg-flex d-md-flex">
            <div class="col d-flex justify-content-center">
                <div class="card p-card card-shadow">
                    <img src="{{ asset('assets/search.png') }}"
                        class="card-img-top p-3 img-fluid m-auto" alt="" style="width: 350px;">
                    <div class="card-footer p-3" style="background-color: #fdfdfe;">
                        <h5 class="card-title fw-bold">Find Scholarship</h5>
                        <p class="card-text">Search for scholarships that best suits for you with ease. Easily gain the
                            information and the process on how to apply.</p>
                        <a href="#" class="text-decoration-none text-muted">Search scholarship <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card p-card card-shadow">
                    <img src=" {{ asset('assets/post.png') }}"
                    class="card-img-top p-1 img-fluid m-auto" alt="" style="width: 350px;">
                    <div class="card-footer p-3" style="background-color: #fdfdfe;">
                        <h5 class="card-title fw-bold">Share Knowledge</h5>
                        <p class="card-text">Post scholarship opportunities and other financial assistance that you know
                            of to help other students in need.</p>
                        <a href="#" class="text-decoration-none text-muted">Post scholarship <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card p-card card-shadow">
                    <img src=" {{ asset('assets/forum.png') }}"
                    class="card-img-top p-1 img-fluid m-auto" alt="..." style="width: 380px;">
                    <div class="card-footer p-3" style="background-color: #fdfdfe;">
                        <h5 class="card-title fw-bold">Join Discussion</h5>
                        <p class="card-text">Ask for assistance or clarrification about particular concerns. Guide other
                            students and discuss related topics.</p>
                        <a href="#" class="text-decoration-none text-muted">Join discussion <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex d-xxl-none d-xl-none d-lg-none d-md-none mx-1">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="card-body d-flex justify-content-center align-items-center" style="height: 200px;">
                            <img src="{{ asset('assets/search.png') }}"
                            class="card-img-top  img-fluid m-auto" alt="" style="width: 240px;">
                        </div>
                        <div class="card-footer p-3" style="background-color: #fdfdfe;">
                            <h5 class="card-title fw-bold">Find Scholarship</h5>
                            <p class="card-text">Search for scholarships that best suits for you with ease. Easily gain the
                                information and the process on how to apply.</p>
                            <a href="#" class="text-decoration-none text-muted">Search scholarship <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-body d-flex justify-content-center align-items-center" style="height: 200px;">
                            <img src=" {{ asset('assets/post.png') }}"
                            class="card-img-top p-3 img-fluid mx-auto" alt="" style="width: 300px;">
                        </div>
                        <div class="card-footer p-3" style="background-color: #fdfdfe;">
                            <h5 class="card-title fw-bold">Share Knowledge</h5>
                            <p class="card-text">Post scholarship opportunities and other financial assistance that you know
                                of to help other students who are in need.</p>
                            <a href="#" class="text-decoration-none text-muted">Post scholarship <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-body  d-flex justify-content-center align-items-center" style="height: 200px;">
                            <img src=" {{ asset('assets/forum.png') }}"
                            class="card-img-top p-1 img-fluid m-auto" alt="..." style="width: 300px;">
                        </div>
    
                        <div class="card-footer p-3" style="background-color: #fdfdfe;">
                            <h5 class="card-title fw-bold">Join Discussion</h5>
                            <p class="card-text">Ask for assistance or clarrification about particular concerns. Guide other
                                students and discuss related topics.</p>
                            <a href="#" class="text-decoration-none text-muted">Join discussion <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                {{-- <div class="purpose-container w-100 h-100">asd</div> --}}
            </div>
        </div>
    </div>
</div>
{{-- end of purpose section --}}


<div class="container-fluid mb-4" style="background-color: #f2f7fe;">
    <div class="container pt-5 pb-3" style="height: auto;">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card bg-transparent border border-0">
                    <img src=" {{ asset('assets/time.gif') }}"
                    class="card-img-top pb-4 img-fluid m-auto" alt="..." style="width: 80px;">
                    <div class="card-footer bg-transparent border border-0">
                        <h5 class="card-title fw-bold text-center">Save Time</h5>
                        <p class="card-text text-center">Find scholarships quickly and easily, and minimize your search time with our comprehensive platform. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card bg-transparent border border-0">
                    <img src=" {{ asset('assets/update.gif') }}"
                    class="card-img-top pb-4 img-fluid m-auto" alt="..." style="width: 80px;">
                    <div class="card-footer bg-transparent border border-0">
                        <h5 class="card-title fw-bold text-center">Be Updated</h5>
                        <p class="card-text text-center">Stay informed and up-to-date on the latest scholarship opportunities from different institutions. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card bg-transparent border border-0">
                    <img src=" {{ asset('assets/shield.gif') }}"
                    class="card-img-top pb-4 img-fluid m-auto" alt="..." style="width: 80px;">
                    <div class="card-footer bg-transparent border border-0">
                        <h5 class="card-title fw-bold text-center">Legit Information</h5>
                        <p class="card-text text-center">Trust in our reliable and verified scholarship information with our platform's report system. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card bg-transparent border border-0">
                    <img src=" {{ asset('assets/questions.gif') }}"
                    class="card-img-top pb-4 img-fluid m-auto" alt="..." style="width: 80px;">
                    <div class="card-footer bg-transparent border border-0">
                        <h5 class="card-title fw-bold text-center">Ask for Help</h5>
                        <p class="card-text text-center">Get help and support from a community of like-minded students with our forums system. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5 mb-5 border-bottom">
    <h1 class="text-center fw-bolder">Accessible In Any Devices</h1>
    <p class="text-center responsiveness-section">Our scholarship search engine is designed to be fully responsive, ensuring that you can access it from any device, anywhere, and anytime.</p>
    <div class="d-flex justify-content-center">
        <img src=" {{ asset('assets/mockup.gif') }}"
        class="card-img-top pb-4 img-fluid m-auto" alt="..." style="max-width: 800px;">
    </div>
</div>

<div class="container mb-5 py-5 ">
    <div class="row getStarted-section">
        <div class="col-lg">
            <p class="fw-bolder">GETTING STARTED</p>
            <h1 class="fw-bolder gs-fs">Start your eSkolar Journey</h1>
            <p class="gs-c-fs">Find scholarships that suits for you and start your journey to succes.</p>
        </div>
        <div class="col-lg-auto col-md-12 d-flex align-items-center">
            <div class="my-auto">
                <button type="button" class="px-4 start-btn me-3" style="padding-top: 10px; padding-bottom: 10px;">Get Started</button>
                <button type="button" class="px-4 border border-1 fw-medium" style="background-color: white; border-radius: 10px; color: #3F3F46; padding-top: 10px; padding-bottom: 10px;">Explore</button>
            </div>
        </div>
    </div>
</div>
@endsection