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

    <!-- Modal -->
    <div class="modal fade" id="createPostModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-1 py-4 px-4">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Sign in to our platform</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="name@company.com">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="••••••••">
                        </div>
                        <div class="mb-3 pt-2 form-check">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                                <a href="#" style="text-decoration: none">Lost password?</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Login to your account</button>
                        <div class="mt-3">
                            Not registered? <a href="#" style="text-decoration: none" data-bs-toggle="modal"
                                data-bs-target="#sign-up-form">Create an account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <x-header page="scholarships" />

    <div class="containter-fluid border border-bottom-1 pt-5 pb-4" style="height: auto; background-color: #FBFDFF">
        <div class="container">
            <div class="row mt-5 pt-4 mb-4">
                <div class="col search-col">
                    <div class="search">
                        <input type="text" class="form-control w-100" placeholder="Find scholarship"> 
                        <a class="mt-2 dropdown" id="filter-dropdown" style="margin-right: 70px;" role="button">
                            <i class="bi bi-funnel text-muted " style="font-size: 1.5rem;" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">noel</li>
                                <li class="dropdown-item">noel</li>
                                <li class="dropdown-item">noel</li>
                            </ul>
                        </a>
                        <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <div class="col-auto vr" style="padding: 0; margin-right: 10px;"></div>
                <button class="btn-add-post-sm btn btn-primary col-auto" style="margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#createPostModal"><i class="bi bi-pencil-fill"></i></button>
                <button class="btn-add-post btn btn-primary col-auto" style="margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#createPostModal">Create Post</button>
            </div>
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

    <x-footer />

</body>

</html>
