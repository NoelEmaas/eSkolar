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

    <x-header page="scholarships"/>
    
    <div class="containter-fluid border border-bottom-1 pt-4 px-2" style="height:250px; background-color: #F5F9FD">   
        <div class="row height d-flex justify-content-center align-items-center w-100 h-100 mx-auto">
            <div class="col-md-8">
              <div class="search">
                <i class="bi bi-search"></i>
                <input type="text" class="form-control" placeholder="Search scholarships">
                <button class="btn btn-primary">Search</button>
              </div>         
            </div>    
        </div>
    </div>

    <div class="container vh-100 mt-4">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
              <div class="card">
                <div class="card-header py-3 bg-white">
                    <div class="d-flex justify-content-between">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="d-block ui-w-40 rounded-circle" alt="">
                                </div>
                                <div class="col-auto">
                                    <div class="media-body ml-3">
                                        Kenneth Frazier
                                        <div class="text-muted small">3 days ago</div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <i class="bi bi-three-dots-vertical fs-3 text-muted" style="cursor: pointer"></i>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="title mb-3">
                        <h5 class="card-title">CHED</h5>
                        <p class="card-text text-muted">CHED Scholarship Program 2020-2021</p>
                    </div>
                    <p class="amount mb-3">Amount: Php 80,000 - Php 120,000</p>
                    <div class="post-content">
                        <p>For qualified and deserving students entering first year of Tertiary Education whose General Weighted Average (GWA) is at least 96% or its equivalent (For Full Merit Program) and 93%-95% or its equivalent for Half Merit Program.</p>
                    </div>
                </div>
                <div class="card-footer bg-white px-4 py-3 justify-content-center">
                    <div class="d-flex justify-content-between">
                        <div>
                            <i class="bi bi-star" style="cursor: pointer"></i>
                            <span class="px-2">13</span>
                        </div>
                        <span style="cursor: pointer">13 comments</span>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
              <div class="card">
                <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
              <div class="card">
                <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
              <div class="card">
                <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
              <div class="card">
                <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
              <div class="card">
                <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
              </div>
            </div>
          </div>
    </div>

    <x-footer />
    

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</body>
</html>