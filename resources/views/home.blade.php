@extends('layouts.app')

@section('content')
{{-- hero section --}}
<div class="container-fluid vh-100 my-xxl-5 my-xl-5 my-lg-5 my-md-5 my-sm-5 my-3">
    <div class="row vh-100">
        <div class="col m-auto title-padding">
            <h1 class="fw-bolder lh-2 title-fs">Empowering students to bring them closer to achieving their dreams.
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
{{-- end of hero section --}}

<div class="container-fluid vh-100">

</div>

{{-- purpose section --}}
<div class="container mb-5">
    <h1 class="text-center fw-bolder">What's Our Purpose</h1>
    <p class="text-center pb-5">This tool aims to simplify the scholarship search process for students by providing
        reliable information and instructions for legitimate scholarships. Additionally, it aims to assist
        educational institutions in providing accurate information to students seeking financial assistance.</p>
    <div class="row d-none d-xxl-flex d-xl-flex d-lg-flex d-md-flex">
        <div class="col d-flex justify-content-center">
            <div class="card p-card">
                <img src="{{ asset('assets/search.png') }}"
                    class="card-img-top p-1 img-fluid m-auto" alt="" style="width: 350px; width: 350px;">
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
            <div class="card p-card"">
                <img src=" {{ asset('assets/post.png') }}"
                class="card-img-top p-1 img-fluid m-auto" alt="" style="width: 350px; width: 350px;">
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
            <div class="card p-card"">
                <img src=" {{ asset('assets/forum.jpg') }}"
                class="card-img-top p-1 img-fluid m-auto" alt="..." style="width: 380px; width: 380px;">
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
    <div class="row d-flex d-xxl-none d-xl-none d-lg-none d-md-none">
        <div class="col-12 d-flex justify-content-center">
            <div class="card w-100 mb-3 h-auto p-card"">
                <div class=" card-body">
                <h5 class="card-title fw-bold">Find Scholarship</h5>
                <p class="card-text">Search for scholarships that best suits for you with ease. Easily gain the
                    information and the process on how to apply.</p>
                <a href="#" class="text-decoration-none text-muted">Search scholarship <i
                        class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-center">
        <div class="card w-100 mb-3 h-auto p-card">
            <div class="card-body">
                <h5 class="card-title fw-bold">Share Knowledge</h5>
                <p class="card-text">Post scholarship opportunities and other financial assistance that you know of
                    to help other students in need.</p>
                <a href="#" class="text-decoration-none text-muted">Post schoalarship <i
                        class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-center">
        <div class="card w-100 mb-3 h-auto p-card">
            <div class="card-body">
                <h5 class="card-title fw-bold">Join Discussion</h5>
                <p class="card-text">Ask for assistance or clarrification about particular concerns. Guide other
                    students and discuss related topics.</p>
                <a href="#" class="text-decoration-none text-muted">Join discussion <i
                        class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
</div>
{{-- end of purpose section --}}


<div class="container vh-100">

</div>
@endsection