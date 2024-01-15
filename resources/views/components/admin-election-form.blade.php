<form action="{{ $formUrl }}" method="POST">
    @csrf
    @if(isset($election))
        @method("PATCH")
    @endif
    <div class="create_new_user_form elections_form">
        <div class="right_pannel">
            <div class="user_registration_form">
                <h2>New Election</h2>
                <div class="input_group long_box">
                    <label for="position">Position</label>
                    <input type="text" name="position" id="position" value="{{ isset($election)?$election['positions']:'' }}" required/>
                </div>
                <div class="input_group long_box">
                    <label for="start_date_time">Starting Date and Time</label>
                    <input type="datetime-local" name="start_date_time" id="start_date_time" value="{{ isset($election)?$election['start_date_time']:'' }}" required/>
                </div>
                <div class="input_group long_box">
                    <label for="end_date_time">Ending Date and Time</label>
                    <input type="datetime-local" name="end_date_time" id="end_date_time" value="{{ isset($election)?$election['end_date_time']:'' }}" required/>
                </div>
                <div class="input_group long_box submit">
                    <input type="submit" name="submit" value="SUBMIT" class="blue_icon_button"/>
                </div>
            </div>
        </div>
    </div>
</form>