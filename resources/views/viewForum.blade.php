@extends('layouts.app')

@section('content')

<div class="container pt-5 mt-5">
    <div class="col-12 mb-4 mx-auto">
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
                                    <a href="{{ route('getProfile', ['user_id' => $forum->user->id]) }}">
                                        {{ $forum->user->first_name.' '.$forum->user->last_name }}
                                    </a>
                                    <div class="text-muted small">{{ $forum->created_at->format('M j, Y') }}</div>
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
                    <h5 class="card-title fw-bold">{{ $forum->title }}</h5>
                </div>
                <div>
                    <p>{{ $forum->description }}</p>
                </div>
            </div>
            <div class="card-footer bg-white px-4 pt-3 justify-content-center">
                <div class="d-flex justify-content-between mb-4">
                    <div class="px-3 py-2 rounded" style="background-color: #fdf2e2; color: #dd8100;">
                        <i class="bi bi-star-fill" style="cursor: pointer"></i>
                        <span class="ps-2 fw-bold">{{ $forum->likeCount }} stars</span>
                    </div>
                    <div class="d-flex justiy-content-center align-items-center px-3 py-2 rounded" style="background-color: #e6f8f0;">
                        <a href="#" class="text-decoration-none fw-bold" style="color: #008f53; font-size: 10px;">
                            <i class="bi bi-chat-left"></i>
                            <span class="ps-2 fw-bold" style="cursor: pointer">{{ $forum->commentCount }} comments</span>
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-start p-4 rounded mb-3" style="background-color: #f5f5f5;">
                    <img class="rounded-circle shadow-1-strong me-3 d-block"
                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="40"
                        height="40" />

                    <form action="{{ route('add.comment') }}" method="POST" class="w-100">
                        @csrf
                        <div class="form-group w-100 d-flex">
                            <textarea class="form-control w-100" name="comment" id="exampleFormControlTextarea1" rows="2"
                                placeholder="write comment here"></textarea>
                                <input type="hidden" name="type" value="forum">
                                <input type="hidden" name="id" value="{{ $forum->id }}">
                            <div>
                                <button type="submit" class="btn btn-primary ms-3"><i class="bi bi-send"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <hr>
                @foreach ($forum->comments as $comment)
                    <x-card-comment :comment=$comment />
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection