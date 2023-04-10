<!-- Modal -->
<div class="modal fade" id="sign-up-form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content py-3 px-3">
        <div class="modal-header border border-0">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Sign up to our platform</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('register') }}" method="POST">
              @csrf
                <div class="row mb-3">
                    <div class="col">
                      <label for="inputFirstName" class="form-label">First name</label>
                      <input type="text" class="form-control" name="first_name" id="inputFirstName" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                        <label for="inputLastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="last_name" id="inputLastName" placeholder="First name" aria-label="First name">
                    </div>
                </div>
                <div class="mb-3">
                  <label for="inputEmail" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelp" placeholder="name@company.com">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="inputPassword" placeholder="••••••••">
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3">Create account</button>
                <div class="mt-3">
                    Already have an acccount? <a href="#" style="text-decoration: none" data-bs-toggle="modal" data-bs-target="#sign-in-form">Sign In</a>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>