@extends('layouts.app')

@section('content')
<div class="modal fade" id="createForumModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-2 px-4 d-flex justify-content-start align-items-center" style="background-color: #1A56DB;">
                <p class="fs-5 fw-bold text-light pt-3">Ask help to others</p>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="route="{{ route('addForum') }}" method="POST"">
                @csrf
                <div class="modal-body px-4 pb-4">
                    <div class="mb-3">
                        <label for="inputTitle" class="form-label">Discussion Title</label>
                        <input type="text" name="title" class="form-control" id="inputTitle" aria-describedby="emailHelp"
                            placeholder="Ched Scholarship 2021 Concern">
                    </div>
                    <div class="mb-1">
                        <label for="inputDiscussionInfo" class="form-label">Discussion Information</label>
                        <textarea class="form-control" name="description" id="inputDiscussionInfo" placeholder="..." style="height: 200px"></textarea>
                    </div>
                </div>
                <div class="modal-footer px-4 py-3">
                    <div class="d-flex justify-content-end">
                        <button class="btn me-5">Discard</button>
                        <button class="btn px-4 py-2" style="background-color: #1A56DB; color: white;">Post Forum</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="containter-fluid pt-4 pb-2" style="height: auto;">
    <div class="container">
        <div class="row g-3 mt-5 pt-4">
            <div class="col-sm input-group input-group-lg border border-0">
                <input type="text" class="form-control border border-0" aria-describedby="inputGroup-sizing-lg" placeholder="Search Discussion" style="font-size: 14px; box-shadow: none; box-shadow: 0px 0px 5px rgb(203, 209, 214);">
                <span class="input-group-text px-4 py-3 border border-0" id="inputGroup-sizing-lg" role="button" style="font-size: 14px; background-color: #1A56DB; color: white; box-shadow: 0px 0px 5px rgb(203, 209, 214); b;">
                    Search
                </span>
            </div>
            <div class="col-xxl-auto col-xl-auto col-lg-auto col-md-auto col-sm-auto col-12">
                <button class="btn-add-post btn btn-primary border-0" style="width: 100%; height: 100%; box-shadow: 0px 0px 5px rgb(203, 209, 214);" data-bs-toggle="modal" data-bs-target="#createForumModal">Start Forum <i class="bi bi-chat-square-dots ps-2"></i></button> 
            </div>
        </div>
    </div>
</div>


<div class="container mt-4">
    <div class="row">
        {{-- <x-card-view-full-discussion /> --}}
        @foreach ($forums as $forum)
  
                <x-card-discussion :forum=$forum /> 
       
        @endforeach
    </div>
</div>
@endsection