@extends('layouts.app')

@section('content')
<div class="modal fade" id="createPostModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-2 px-4 d-flex justify-content-start align-items-center" style="background-color: #677BD7;">
                <p class="fs-5 fw-bold text-light pt-3">Help other students</p>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 pb-4">
                <form>
                    <div class="mb-3">
                        <label for="inputBenefactor" class="form-label">Benefactor</label>
                        <input type="text" class="form-control" id="inputBenefactor" aria-describedby="emailHelp"
                            placeholder="CHED">
                    </div>
                    <div class="mb-3">
                        <label for="inputProgram" class="form-label">Scholarship Program</label>
                        <input type="text" class="form-control" id="inputProgram" placeholder="Ched Scholarship Program 2021">
                    </div>
                    <div class="mb-3">
                        <label for="inputAmount" class="form-label">Amount Of Assistance</label>
                        <div class="row" id="inputAmount">
                            <div class="input-group col">
                                <span class="input-group-text">₱</span>
                                <input type="number" class="form-control" placeholder="30000">
                                <span class="input-group-text">.00</span>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                -
                            </div>
                            <div class="input-group col">
                                <span class="input-group-text">₱</span>
                                <input type="number" class="form-control" placeholder="60000">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-1">
                        <label for="inputScholarshipInfo" class="form-label">Scholarship Information</label>
                        <textarea class="form-control" id="inputScholarshipInfo" placeholder="..." style="height: 200px"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer px-4 py-3">
                <div class="d-flex justify-content-end">
                    <button class="btn me-5">Discard</button>
                    <button class="btn px-4 py-2" style="background-color: #677BD7; color: white;">Post Scholarship</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="containter-fluid pt-4 pb-2" style="height: auto;">
    <div class="container">
        <div class="row g-3 mt-5 pt-4">
            <div class="col-sm input-group input-group-lg border border-0">
                <input type="text" class="form-control border border-0" aria-describedby="inputGroup-sizing-lg" placeholder="Search Scholarship" style="font-size: 14px; box-shadow: none; box-shadow: 0px 0px 5px rgb(203, 209, 214);">
                <span class="input-group-text px-4 py-3 border border-0" id="inputGroup-sizing-lg" role="button" style="font-size: 14px; background-color: #677BD7; color: white; box-shadow: 0px 0px 5px rgb(203, 209, 214); b;">
                    Search
                </span>
            </div>
            <div class="col-xxl-auto col-xl-auto col-lg-auto col-md-auto col-sm-auto col-12">
                <button class="btn-add-post btn btn-primary border border-0" style="width: 100%; height: 100%; box-shadow: 0px 0px 5px rgb(203, 209, 214);" data-bs-toggle="modal" data-bs-target="#createPostModal">Create Post <i class="bi bi-pencil-square ps-1"></i></button> 
            </div>
        </div>
    </div>
</div>


<div class="container mt-4">
    <div class="row">
        <x-card-view-full-post />
        {{-- <x-card-post />
        <x-card-post />
        <x-card-post />
        <x-card-post />
        <x-card-post />
        <x-card-post /> --}}
    </div>
</div>
@endsection