
        <div class="product-form">
            <h2>{{ __('add_new_address_modal.editddress') }}</h2><br>
            <form action="{{ route('addresses.edit' ,  ['locale' => config('app.locale'),'id' => $address_data->id])}}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="address_id" value="{{ $address_data->id }}">





                <label for="text">{{ __('add_new_address_modal.country') }}</label>
                <input type="text" id="country" name="country" value={{ $address_data->country ?? "" }}>

                <label for="text">{{ __('add_new_address_modal.city') }}</label>
                <input type="text" id="city" name="city" value={{ $address_data->city ?? "" }}>

                <label for="text">{{ __('add_new_address_modal.address') }}</label>
                <input type="text" id="address" name="street_address" value={{ $address_data->street_address ?? "" }}>

                <label for="text">{{ __('add_new_address_modal.postalcode') }}</label>
                <input type="text" id="postal_code" name="postal_code" value={{ $address_data->zip_code ?? "" }}>

                <label for="text">{{ __('add_new_address_modal.additonal_info ') }}</label>
                <input type="text" id="addsinfo" name="additional_info" value={{ $address_data->additional_info ?? "" }}>

                <div class="row">
                    <div class="col-md-6">
                        <label for="text">{{ __('add_new_address_modal.makeaPrimary') }}</label>

                    </div>

                <div class="col-md-6">
                <input class="form-check-input" type="checkbox" value="main_address" id="main_address" name="main_address">
            </div>
        </div><br>
        <button type="submit" class="button">{{ __('add_new_address_modal.editbtn') }}</button>
        </form>


        </div>



