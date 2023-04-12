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
<body class="pt-4" style="background-color: #FBFDFF;">

    <x-sign-in-form />
    <x-sign-up-form />

    <x-header page="contact" />

    <div class="container d-flex justify-content-center" style="margin-bottom: 100px; margin-top: 115px;">
        <div class="card m-auto px-xxl-4 px-xl-4 px-lg-4 px-md-4 px-0" style="width: 600px; height: auto;">
            <div class="card-header border border-0  py-4 bg-white">
                <div class="d-flex justify-content-center align-items-center">
                    <p class="fs-1 fw-bold">Contact Us</p>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <p class="text-center">Got a technical issue? Want to send feedback about our scholarship search engine? Need details about the website? Let us know.</p>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="name@company.com">
                </div>
                <div class="mb-3">
                    <label for="inputName" class="form-label">Enter Name</label>
                    <input type="text" class="form-control" id="inputName" placeholder="John Doe">
                </div>
                <div class="mb-3">
                    <label for="inputSubject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="inputSubject" placeholder="Let us know how we can help you">
                </div>
                <div class="mb-2">
                    <label for="inputMessage" class="form-label">Your Message</label>
                    <textarea class="form-control" id="inputMesage" placeholder="..." style="height: 200px"></textarea>
                </div>
            </div>
            <div class="card-footer border border-0  py-4 bg-white ">
                <div class="d-flex justify-content-end mt-2">
                    <button class="btn me-5">Reset</button>
                    <button class="btn px-4 py-2" style="background-color: #677BD7; color: white;">Send Message</button>
                </div>
            </div>
        </div>
    </div>

    <x-footer/>
    
</body>
</html>