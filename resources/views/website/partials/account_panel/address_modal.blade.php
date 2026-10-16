<div class="modal" id="addressModal" data-animation="slideInUp">
    <div class="modal-dialog quickview__main--wrapper">
        <header class="modal-header quickview__header">
            <button class="close-modal quickview__close--btn" aria-label="close modal" data-close>✕ </button>
        </header>

        <div class="product-form">
            <h2>Address</h2><br>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            {{ __('address_modal.selectadd') }}
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <form>


                                <label for="text">{{ __('address_modal.selectfrom') }}</label>
                                <select name="Address" id="Address">
                                    <option value="Address1">{{ __('address_modal.add1') }}</option>
                                    <option value="Address2">{{ __('address_modal.add2') }}</option>
                                  </select>
                                <br />
                                <button type="submit" class="button">{{ __('address_modal.addbtn') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            {{ __('address_modal.addnewbtn') }}
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            @include('website.partials.account_panel.add_new_address_modal')

                        </div>
                    </div>
                </div>

            </div>



        </div>

    </div>

</div>
