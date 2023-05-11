<!-- Edit Forum Modal -->
<div class="modal fade" id="editForumModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        @if(Auth::check())
        <div class="modal-content">
            <div class="modal-header py-2 px-4 d-flex justify-content-start align-items-center" style="background-color: #1A56DB;">
                <p class="fs-5 fw-bold text-light pt-3">Ask help to others</p>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Edit Forum Form -->
            <form action="{{ route('updateForum') }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="forum_id" id="forumId" value="">
                <div class="modal-body px-4 pb-4">
                    <div class="mb-3">
                        <label for="inputTitle" class="form-label">Discussion Title</label>
                        <input type="text" name="title" class="form-control" id="inputTitle" aria-describedby="emailHelp"
                            placeholder="Ched Scholarship 2021 Concern">
                    </div>
                    <div class="mb-1">
                        <label for="inputDiscussionInfo" class="form-label">Discussion Information</label>
                        <textarea class="form-control" name="description" id="inputForumDescription" placeholder="..." style="height: 200px"></textarea>
                    </div>
                </div>
                <div class="modal-footer px-4 py-3">
                    <div class="d-flex justify-content-end">
                        <button class="btn me-5">Discard</button>
                        <button class="btn px-4 py-2" style="background-color: #1A56DB; color: white;">Edit Forum</button>
                    </div>
                </div>
            </form>
            <!-- End of Edit Forum Form -->
        </div>
        @else 
        <x-not-logged-in-modal />
        @endif
    </div>
</div>
<!-- End of Edit Forum Modal -->