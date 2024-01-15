<form action="{{ $formUrl }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($party))
        @method("PATCH")
    @endif
    <div class="create_new_user_form elections_form">
        <div class="right_pannel">
            <div class="user_registration_form">
                <h2>New Party</h2>
                <div class="input_group long_box">
                    <label for="party_name">Party Name</label>
                    <input type="text" name="party_name" id="party_name" value="{{ isset($party)?$party['party_name']:'' }}" required/>
                </div>
                <div class="input_group long_box">
                    <label for="symbol">Party Symbol</label>
                    <input type="file" name="symbol" id="symbol" value="{{ isset($party)?$party['symbol']:'' }}"/>
                </div>
                <div class="input_group long_box">
                    <label for="contact">Party Contact</label>
                    <input type="text" name="contact" id="contact" value="{{ isset($party)?$party['contact']:'' }}" required/>
                </div>
                <div class="input_group long_box submit">
                    <input type="submit" name="submit" value="SUBMIT" class="blue_icon_button"/>
                </div>
            </div>
        </div>
    </div>
</form>