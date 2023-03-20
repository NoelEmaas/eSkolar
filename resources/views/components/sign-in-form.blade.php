<!-- Modal -->
<div class="modal fade" id="sign-in-form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content py-3 px-3">
            <div class="modal-header border border-0">
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
