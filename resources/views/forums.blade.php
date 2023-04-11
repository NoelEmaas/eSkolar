<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eSkolar</title>
    @include('bootstrap')
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}" />
</head>
<body>
    <x-sign-in-form />
    <x-sign-up-form />
    <x-header page="forums" />

    <div class="modal fade" id="createForumModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header py-2 px-5 d-flex justify-content-start align-items-center" style="background-color: #677BD7;">
                    <p class="fs-5 fw-bold text-light pt-3">Ask help to others</p>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-xxl-5 px-xl-5 px-lg-5 px-md-5 px-2 pb-4">
                    <form>
                        <div class="mb-3">
                            <label for="inputTitle" class="form-label">Discussion Title</label>
                            <input type="text" class="form-control" id="inputTitle" aria-describedby="emailHelp"
                                placeholder="Ched Scholarship 2021 Concern">
                        </div>
                        <div class="mb-5">
                            <label for="inputDiscussionInfo" class="form-label">Discussion Information</label>
                            <textarea class="form-control" id="inputDiscussionInfo" placeholder="..." style="height: 200px"></textarea>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button class="btn me-5">Discard</button>
                            <button class="btn px-4 py-2" style="background-color: #677BD7; color: white;">Post Forum</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="containter-fluid border border-bottom-1 pt-5 pb-4" style="height: auto; background-color: #FBFDFF">
        <div class="container">
            <div class="row g-3 mt-5 pt-4 mb-4">

                <div class="col-sm input-group input-group-lg">
                    <input type="text" class="form-control" aria-describedby="inputGroup-sizing-lg" placeholder="Search Discussion" style="font-size: 14px;">
                    <span class="input-group-text px-4 py-3" id="inputGroup-sizing-lg" role="button" style="font-size: 14px; background-color: #677BD7; color: white;">
                        Search
                    </span>
                </div>


                <div class="col-xxl-auto col-xl-auto col-lg-auto col-md-auto col-sm-auto col-6 btn-group">
                    <button type="button" class="btn dropdown-toggle btn-filter px-5" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; height: 100%;">
                      Filter
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                 </div>

                <div class="col-xxl-auto col-xl-auto col-lg-auto col-md-auto col-sm-auto col-6">
                    <button class="btn-add-post btn btn-primary" style="width: 100%; height: 100%;" data-bs-toggle="modal" data-bs-target="#createForumModal">Start Forum <i class="bi bi-chat-square-dots ps-2"></i></button> 
                </div>
    
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <x-card-view-full-discussion />
            {{-- <x-card-discussion />
            <x-card-discussion />
            <x-card-discussion />
            <x-card-discussion />
            <x-card-discussion /> --}}
        </div>
    </div>

    <x-footer />

</body>
</html>