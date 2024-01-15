<form action="{{ $formUrl }}" method="post" enctype="multipart/form-data" autocomplete="off">
    @csrf
    @if($formUrl == "/dashboard/candidates/$userId" || 
        $formUrl == "/dashboard/managers/$userId" || 
        $formUrl == "/dashboard/voters/$userId"
        )
        @method("PATCH")
    @endif
    <div class="create_new_user_form">
        <div class="left_pannel">
            <div class="profile">
                <input type="hidden" name="hidden_user_image" value="{{ $profile_image }}"/>
                <img src="{{ $profile_image }}" alt="" />
                <input type="file" name="user_image" id="upload_image" />
                <button type="button" class="blue_icon_button" onclick="upload_images()">
                    <i class="fa-solid fa-pen"></i>
                    <span>Edit Profile</span>
                </button>
            </div>
            @if ($showParty=='true')
            <div class="profile party_info">
                <h3>Party Info</h3>
                <div class="input_group long_box party_selection">
                    <label for="cand_party">Candidate Party</label>
                    <select name="party" id="party">
                        <option value="1" {{ $party_id=='1'? "selected" :"" }}>Green Party</option>
                        <option value="2" {{ $party_id=='2'? "selected" :"" }}>LB Party</option>
                        <option value="3" {{ $party_id=='3'? "selected" :"" }}>NoOnes Party</option>
                    </select>
                </div>
                <div class="party_logo">
                    <img src="{{ $party_logo }}" alt="" />
                </div>
            </div>
            @endif
        </div>
        <div class="right_pannel">
            <div class="user_registration_form">
                <h2>{{ $title }}</h2>
                <div class="row_input">
                    <div class="input_group">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" id="name" required value="{{ $user_name }}"/>
                    </div>
                    <div class="input_group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="user_dob" id="dob" required value="{{ $user_dob }}"/>
                    </div>
                </div>
                <div class="row_input">
                    <div class="radio_group">
                        <label for="name">Gender</label>
                        <div class="button_group">
                            <div class="radio_box">
                                <input type="radio" name="user_gender" id="male" required value="Male" {{ $user_gender != 'Male'?"":"checked" }} />
                                <span>Male</span>
                            </div>
                            <div class="radio_box">
                                <input type="radio" name="user_gender" id="female" required value="Female" {{ $user_gender != 'Female'?"":"checked" }} />
                                <span>Female</span>
                            </div>
                        </div>
                    </div>
                    <div class="input_group">
                        <label for="mobile_no">Mobile Number</label>
                        <input type="text" name="mobile_no" id="mobile_no" required value="{{ $mobile_no }}" autocomplete="false"/>
                    </div>
                </div>
                <div class="row_input">
                    <div class="input_group">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" id="password" required {{ $user_email!=''? "disabled" :"" }}/>
                    </div>
                    <div class="input_group">
                        <label for="repassword">Re-Enter Password</label>
                        <input type="password" name="repassword" id="repassword" required {{ $user_email!=''? "disabled" : "" }}/>
                    </div>
                </div>
                <div class="row_input">
                    <div class="input_group">
                        <label for="email">Email</label>
                        <input type="email" name="user_email" id="email" required value="{{ $user_email }}"/>
                    </div>
                    <div class="input_group">
                        <label for="user_address">Address</label>
                        <input type="text" name="user_address" id="user_address" required value="{{ $user_address }}"/>
                    </div>
                </div>
                <div class="input_group long_box">
                    <label for="national_id">National ID</label>
                    <input type="text" name="national_id" id="national_id" value="{{ $national_id }}"/>
                </div>
                <div class="input_group long_box submit">
                    <input type="submit" name="submit" value="SUBMIT" class="blue_icon_button"/>
                </div>
            </div>
        </div>
    </div>
</form>