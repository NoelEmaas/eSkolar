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

    <div class="container mt-4">
        <div class="row">
            <x-card-view-full-post />
            {{-- <x-card-post />
            <x-card-post />
            <x-card-post />
            <x-card-post />
            <x-card-post />
            <x-card-post /> --}}
        </div>
    </div>

    <x-footer />
    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</body>
</html>