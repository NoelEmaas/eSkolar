@extends('layouts.app')

@section('content')
<div class="containter-fluid pt-4 pb-2" style="height: auto;">
    <div class="container">
        <div class="row g-3 mt-5 pt-4">
            <div class="col-sm input-group input-group-lg border border-0">
                <input type="text" class="form-control border border-0" aria-describedby="inputGroup-sizing-lg" name="q" placeholder="Search Discussion" style="font-size: 14px; box-shadow: none; box-shadow: 0px 0px 5px rgb(203, 209, 214);">
                <span class="input-group-text px-4 py-3 border border-0 bg-blue" id="inputGroup-sizing-lg" role="button" style="font-size: 14px; color: white; box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
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