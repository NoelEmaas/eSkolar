@extends('layouts.app')

@section('content')
<div class="container-fluid border border-bottom-1 d-flex justify-content-center align-items-center" style="background-color: #FBFDFF;">
    <div class="container mt-5 d-flex justify-content-center pt-5 pb-3">
        <div class="p-3 w-auto">
            <div class="row">
                <div class="image col-auto m-auto">
                    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" class="rounded" width="155" >
                </div>
                <div class="col-auto m-auto ms-sm-4 user-info">  
                    <h1 class="mb-0 fw-bold">Juan Dela Cruz</h1>
                    <span>Scholarship: CHED Scholar</span>
                    <div class="py-2 px-4 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                        <div class="d-flex flex-column">
                            <span class="articles">Posts</span>
                            <span class="number1">4</span>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="followers">Forums</span>
                            <span class="number2">6</span>     
                        </div>
                        <div class="d-flex flex-column">
                            <span class="rating">Stars</span>
                            <span class="number3">12</span>
                        </div>
                    </div>
                    <select class="form-select mt-2" aria-label="Default select example" s">
                        <option selected>View posts</option>
                        <option value="1">View discussions</option>
                    </select>
                </div>
            </div>
        </div>
        </div>
</div>

<div class="container vh-100">

</div>
@endsection