@extends('layouts.app')

@section('content')
<div class="mt-1 col-12 col-xxl-10 col-xl-19 col-lg-10 col-md-10 mb-4 mx-auto">
    <div class="card">
        <div class="card-header py-3 bg-white">
            <div class="d-flex justify-content-between">
                <div class="container">
                    <div class="row">
                        <div class="col-auto">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                class="d-block ui-w-40 rounded-circle" alt="">
                        </div>
                        <div class="col-auto">
                            <div class="media-body ml-3">
                                {{ $scholarship->user->first_name.' '.$scholarship->user->last_name }}
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
                <h5 class="card-title">{{ $scholarship->benefactor }}</h5>
                <p class="card-text text-muted">{{ $scholarship->program }}</p>
            </div>
            <p class="amount mb-3">Amount: Php {{ $scholarship->amount_min }} - Php {{ $scholarship->amount_max }}</p>
            <div>
                <p>{{ $scholarship->description }}</p>
            </div>
        </div>
        <div class="card-footer bg-white px-4 pt-3 justify-content-center">
            <div class="d-flex justify-content-between mb-4">
                <div>
                    <i class="bi bi-star-fill" style="cursor: pointer"></i>
                    <span class="px-2">{{ $scholarship->like_count }} Stars</span>
                </div>
                <div class="d-flex justiy-content-center align-items-center">
                    <a href="#" class="text-decoration-none" style="color: black;">
                        <i class="bi bi-chat-left "></i>
                        <span class="px-2" style="cursor: pointer">{{ $scholarship->comment_count }} comments</span>
                    </a>
                </div>
            </div>
            <div class="d-flex flex-start p-4 rounded mb-3" style="background-color: #f5f5f5;">
                <img class="rounded-circle shadow-1-strong me-3 d-block"
                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="40"
                    height="40" />
                <div class="form-group w-100">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"
                        placeholder="write comment here"></textarea>
                </div>
                <div>
                    <button class="btn btn-primary ms-3"><i class="bi bi-send"></i></button>
                </div>
            </div>
            <hr>
            @foreach ($scholarship->comments as $comment)
                <x-card-comment :comment=$comment />
            @endforeach
        </div>
    </div>
</div>
@endsection