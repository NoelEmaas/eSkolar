<!-- Edit Scholarship Modal -->
<div class="modal fade" id="editPostModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        @if(Auth::check())
            <div class="modal-content">
                <div class="modal-header py-2 px-4 d-flex justify-content-start align-items-center" style="background-color: #1A56DB;">
                    <p class="fs-5 fw-bold text-light pt-3">Help other students</p>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Edit Scholarship Form  -->
                <form action="{{ route('updateScholarship') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="scholarship_id" id="scholarshipId" value="">
                    <div class="modal-body px-4 pb-4">
                        <div class="mb-3">
                            <label for="inputBenefactor" class="form-label">Benefactor</label>
                            <input type="text" class="form-control" name="benefactor" id="inputBenefactor" aria-describedby="emailHelp"
                                placeholder="CHED">
                        </div>
                        <div class="mb-3">
                            <label for="inputProgram" class="form-label">Scholarship Program</label>
                            <input type="text" class="form-control" name="program" id="inputProgram" placeholder="Ched Scholarship Program 2021">
                        </div>
                        <div class="mb-3">
                            <label for="inputAmount" class="form-label">Amount Of Assistance</label>
                            <div class="row" id="inputAmount">
                                <div class="input-group col">
                                    <span class="input-group-text">₱</span>
                                    <input type="number" class="form-control" name="amount_min" id="inputAmountMin" placeholder="30000">
                                    <span class="input-group-text">.00</span>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    -
                                </div>
                                <div class="input-group col">
                                    <span class="input-group-text">₱</span>
                                    <input type="number" class="form-control" name="amount_max" id="inputAmountMax" placeholder="60000">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-1">
                            <label for="inputScholarshipInfo" class="form-label">Scholarship Information</label>
                            <textarea class="form-control" name="description" id="inputDescription" placeholder="..." style="height: 200px"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer px-4 py-3">
                        <div class="d-flex justify-content-end">
                            <button class="btn me-5">Discard</button>
                            <button class="btn px-4 py-2" style="background-color: #1A56DB; color: white;">Edit Scholarship</button>
                        </div>
                    </div>
                </form>
                <!-- End of Edit Scholarship Form -->
            </div>
        @else
            <x-not-logged-in-modal />
        @endif
    </div>
</div>
<!-- End of Edit Scholarship Modal -->