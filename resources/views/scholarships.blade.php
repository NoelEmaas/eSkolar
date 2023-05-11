@extends('layouts.app')

@section('content')
<!-- Search Bar & Filter -->
<div class="containter-fluid pt-4 pb-2" style="height: auto;">
    <div class="container">
        <div class="row g-3 mt-5 pt-4">
            <form class="col-sm" action="{{ route('getScholarships') }}" method="GET">
            @csrf
                <div class="input-group input-group-lg border border-0">
                    <input type="text" class="form-control border border-0" aria-describedby="inputGroup-sizing-lg" name="q" placeholder="Search Scholarship" style="font-size: 14px; box-shadow: none; box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                    <button style="background: none; color: white; border: none; margin: 0; padding: 0;" type="submit">
                        <span class="input-group-text px-4 py-3 border border-0 bg-blue" id="inputGroup-sizing-lg" role="button" style="font-size: 14px; color: white; box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                            Search
                        </span>
                    </button>
                </div>
            </form>
            <div class="col-xxl-auto col-xl-auto col-lg-auto col-md-auto col-sm-auto col-12">
                <button class="btn-add-post btn btn-primary border border-0" style="width: 100%; height: 100%; box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;" data-bs-toggle="modal" data-bs-target="#createPostModal">Create Post <i class="bi bi-pencil-square ps-1"></i></button> 
            </div>
        </div>
    </div>
</div>
<!-- End of Search Bar & Filter -->

<!-- Scholarship cards -->
<div class="container mt-4">
    <div class="row">
        {{-- <x-card-view-full-post /> --}}
        @foreach ($scholarships as $scholarship)
                <x-card-post :scholarship=$scholarship />
        @endforeach
    </div>
</div>
<!-- End of Scholarship cards -->

@endsection