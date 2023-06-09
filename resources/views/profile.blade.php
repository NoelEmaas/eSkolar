@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center mt-5 pt-md-3 pt-0">
    <div class="container mt-5 d-flex justify-content-center py-4 position-relative" style="box-shadow: 0px 0px 5px rgb(203, 209, 214); border-radius: 10px; background-color: white;">
        <div class="row m-auto">
            <div class="col-lg-auto col-md-12 row m-auto">
                <div class="image col-auto m-auto py-4">
                    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded-circle" width="140" style="border: 2px solid #DEE2E6;">
                </div>
                <div class="col-auto m-auto">
                    <h1 class="mb-0 fw-bold">{{ $user->first_name.' '.$user->last_name }}</h1>
                    <span style="color: #677BD7;">Scholarship: CHED Scholar</span>
                </div>
            </div>
            <div class="col-lg col-md-6 col-12 row gx-lg-5 gx-2 m-lg-0 m-auto pt-sm-0 pt-4">
                <div class="col m-auto">
                    <p class="text-center text-muted">Posts</p>
                    <h5 class="text-center fs-3 fw-bold">{{ $user->scholarship_count }}</h5>
                </div>
                <div class="col m-auto">
                    <p class="text-center text-muted">Forums</p>
                    <h5 class="text-center fs-3 fw-bold">{{ $user->forum_count }}</h5>
                </div>
                <div class="col m-auto">
                    <p class="text-center text-muted">Stars</p>
                    <h5 class="text-center fs-3 fw-bold">{{ $user->like_count }}</h5>
                </div>
            </div>
        </div>
        <i class="bi bi-pencil-square position-absolute p-4" style="top: 0; right: 0;"></i>
    </div>
</div>

<div class="container d-flex justify-content-end mt-4">
    <div class="btn-group" role="group" aria-label="Basic radio toggle button group" style="box-shadow: 0px 0px 5px rgb(203, 209, 214); background-color: white;">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
        <label class="btn px-4 btn-border" for="btnradio1">Posts</label>
        
        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn px-3 btn-border" for="btnradio2">Forums</label>
        
        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn px-4 border-0" for="btnradio3">Stars</label>
    </div>
</div>


<div class="container mt-4" style="min-height: 80vh;">
    <!-- Scholarship Cards -->
    <div class="row card-row d-flex" id="scholarship-cards">
        @if(!count($scholarships))
            <div class="col-12 w-100 d-flex justify-content-center align-items-center" style="min-height: 50vh;">
                <p class="fs-5 fw-bold text-center" style="color: rgb(200, 200, 200);">No posted scholarships yet</p>
            </div>
        @endif
        @foreach ($scholarships as $scholarship)
            <x-card-post :scholarship=$scholarship />
        @endforeach
    </div>

    <!-- Forum Cards -->
    <div class="row card-row d-none" id="forum-cards">
        @if(!count($forums))
            <div class="col-12 w-100 d-flex justify-content-center align-items-center" style="min-height: 50vh;">
                <p class="fs-5 fw-bold text-center" style="color: rgb(200, 200, 200);">No forums yet</p>
            </div>
        @endif
        @foreach ($forums as $forum)
            <x-card-discussion :forum=$forum/>
        @endforeach
    </div>

    <!-- Starred Cards -->
    <div class="row card-row d-none" id="starred-cards">
        <h6 class="fw-bold text-muted pb-4">Starred Scholarships</h6>
        @if(!count(array_filter($starred, function($stars) {
            return $stars->benefactor;
        })))
            <div class="col-12 w-100 d-flex justify-content-center align-items-center" style="min-height: 20vh;">
                <p class="fs-5 fw-bold text-center" style="color: rgb(200, 200, 200);">No starred scholarships yet</p>
            </div>
        @endif
        
        @foreach ($starred as $stars) 
            @if ($stars->benefactor)
                <x-card-post :scholarship=$stars /> 
            @endif
        @endforeach 

        <h6 class="fw-bold text-muted pt-4 pb-4">Starred Forums</h6>
        @if(!count(array_filter($starred, function($stars) {
            return !($stars->benefactor);
        })))
            <div class="col-12 w-100 d-flex justify-content-center align-items-center" style="min-height: 20vh;">
                <p class="fs-5 fw-bold text-center" style="color: rgb(200, 200, 200);">No starred forums yet</p>
            </div>
        @endif
        @foreach ($starred as $stars) 
            @if (!$stars->benefactor)
                <x-card-post :scholarship=$stars /> 
            @endif
        @endforeach 
    </div>
</div>

 
<script>
    const initalCheckedInput = document.querySelector('input:checked');
    const initialCheckedLabel = initalCheckedInput.nextElementSibling;
    const card_rows = document.getElementsByClassName('card-row');
    activateButton(initialCheckedLabel);

    const radios = document.querySelectorAll('input[type="radio"]');

    radios.forEach(radio => {
    radio.addEventListener('click', () => {
        radios.forEach(r => {
             r.checked = false;
             deactivateButton(r.nextElementSibling);
        });
        radio.checked = true;
        const checkedLabel = radio.nextElementSibling;
        
        for (let i = 0; i < card_rows.length; i++) {
            card_rows[i].classList.add("d-none");
        }

        if(checkedLabel.textContent === "Forums"){
            document.getElementById('forum-cards').classList.remove("d-none");
            document.getElementById('forum-cards').classList.add('d-flex');
        }
        if(checkedLabel.textContent === "Posts"){
            document.getElementById('scholarship-cards').classList.remove("d-none");
            document.getElementById('scholarship-cards').classList.add('d-flex');
        }
        if(checkedLabel.textContent === "Stars"){
            document.getElementById('starred-cards').classList.remove("d-none");
            document.getElementById('starred-cards').classList.add('d-flex');
        }

        activateButton(checkedLabel);
    });
    });


    function activateButton(button) {
        button.style.backgroundColor = "#677BD7";
        button.style.color = "white";
        button.style.borderWidth = "0px 1px 0px 0px";
        button.style.borderColor = '#DEE2E6';
    }

    function deactivateButton(button) {
        button.style.backgroundColor = "white";
        button.style.color = "black";
        button.style.borderWidth = "0px 1px 0px 0px";
        button.style.borderColor = '#DEE2E6';
    }
  </script>
@endsection