<div class="d-flex flex-start p-4 rounded mb-3 position-relative" style="background-color: #f5f5f5;">
    <img class="rounded-circle shadow-1-strong me-3 d-block"
        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="40" height="40" />
    <div class="w-100">
        <div class="d-flex justify-content-between">
            <div>
                <h6 class="fw-bold mb-1">{{ $authorName }}</h6>
                <div class="d-flex align-items-center mb-3">
                    <p class="mb-0 small text-muted">
                        {{ $created_at }}
                    </p>
                    <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                    <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                    <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                </div>
            </div>

            <div class="dropdown position-absolute" style="top: 20px; right: 20px;">
                <i class="bi bi-three-dots-vertical fs-3 text-muted " style="cursor: pointer"
                data-bs-toggle="dropdown" aria-expanded="false"></i>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Report</a></li>
                  @if(Auth::check() && Auth::user()->id == $authorId)
                  <li><a class="dropdown-item" href="#">Edit</a></li>
                  <li class="dropdown-item">
                    <form class="dropdown-item" action="{{ route('delete.comment') }}" method="POST">
                        @csrf 
                        @method('DELETE')
                        <button class="btn p-0 border-0" type="submit">Delete</input>
                        <input type="hidden" name="comment_id" value="{{ $id }}" >
                    </form>
                  </li>
                  @endif
                </ul>
            </div>

        </div>
        <p class="mb-0">
            {{ $comment }}
        </p>
        {{-- EDIT COMMENT --}}
        {{-- <form action="" class="w-100">
            <div class="form-group w-100 d-flex">
                <textarea class="form-control w-100" name="comment" id="exampleFormControlTextarea1" rows="2"
                    placeholder=""></textarea>
                    <input type="hidden" name="type" value="forum">
                    <input type="hidden" name="id" value="">
                <div>
                    <button type="submit" class="btn btn-primary ms-3" id="save-comment">save</button>
                </div>
            </div>
        </form> --}}
    </div>
</div>

