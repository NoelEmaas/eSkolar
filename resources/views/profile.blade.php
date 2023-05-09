@extends('layouts.app')

@section('content')


<div class="container-fluid d-flex justify-content-center align-items-center mt-5 pt-md-3 pt-0">
    <div class="container mt-5 d-flex justify-content-center py-4 position-relative" style="box-shadow: 0px 0px 5px rgb(203, 209, 214); border-radius: 10px;">
        <div class="row m-auto">
            <div class="col-lg-auto col-md-12 row m-auto">
                <div class="image col-auto m-auto py-4">
                    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded-circle" width="140" style="border: 2px solid #DEE2E6;">
                </div>
                <div class="col-auto m-auto">
                    <h1 class="mb-0 fw-bold">Juan Dela Cruz</h1>
                    <span style="color: #677BD7;">Scholarship: CHED Scholar</span>
                </div>
            </div>
            <div class="col-lg col-md-6 col-12 row gx-lg-5 gx-2 m-lg-0 m-auto pt-sm-0 pt-4">
                <div class="col m-auto">
                    <p class="text-center text-muted">Posts</p>
                    <h5 class="text-center fs-3 fw-bold">6</h5>
                </div>
                <div class="col m-auto">
                    <p class="text-center text-muted">Forums</p>
                    <h5 class="text-center fs-3 fw-bold">4</h5>
                </div>
                <div class="col m-auto">
                    <p class="text-center text-muted">Stars</p>
                    <h5 class="text-center fs-3 fw-bold">16</h5>
                </div>
            </div>
        </div>
        <i class="bi bi-pencil-square position-absolute p-4" style="top: 0; right: 0;"></i>
    </div>
</div>

<div class="container d-flex justify-content-end mt-4">
    <div class="btn-group" role="group" aria-label="Basic radio toggle button group" style="box-shadow: 0px 0px 5px rgb(203, 209, 214);">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
        <label class="btn px-4 btn-border" for="btnradio1">Posts</label>
        
        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn px-3 btn-border" for="btnradio2">Forums</label>
        
        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn px-4 border-0" for="btnradio3">Stars</label>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        {{-- <x-card-view-full-post /> --}}
        <x-card-post />
        <x-card-post />
        <x-card-post />
        <x-card-post />
        <x-card-post />
        <x-card-post />
    </div>
</div>

<script>
    const initalCheckedInput = document.querySelector('input:checked');
    const initialCheckedLabel = initalCheckedInput.nextElementSibling;
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
        console.log(checkedLabel.textContent);
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