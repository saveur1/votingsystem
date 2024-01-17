@extends("layouts.layout")

@section("content")
<section id="voter_dashboard">
    
    <div class="project_container voters_elections">
        <nav class="navbar">
            <a href="#home" id="bars"><i class="fa-solid fa-bars"></i></a>
            <div class="collapsable_links">
                <a href="/voters" class="active">Profile</a>
                <a href="/voters/elections">Elections</a>
                <a href="/voters/voting" class="info_btn">Vote</a>
            </div>
        </nav>
    </div>
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <div class="project_container edit_container">
            <div class="user_profile profile_edit">
                <div class="image-thumbnail">
                    @if($user->user_image=="" || $user->user_image==null)
                        <img src="/images/user_default.svg" alt="">
                    @else
                        <img src="{{ $user->user_image }}" alt="">
                    @endif
                </div>
                <input type="file" name="user_image" accept=".jpg, .jpeg, .png, .webp" id="upload_image" style="visibility:hidden;display:block;height:0px;"/>
                <button type="button" onclick="upload_images()">
                    <i class="fa-solid fa-pencil"></i>&nbsp;&nbsp;
                    <span>change Image</span>
                </button>
            </div>

            <div class="profile_infor edit_profile">
                <div class="single_info">
                    <h4>Name:</h4>
                    <input type="text" value="{{ $user->user_name }}" name="user_name"/>
                </div>
                <div class="single_info">
                    <h4>Gender</h4>
                    <div class="button_group">
                        <div class="radio_box">
                            <input type="radio" value="Male" name="user_gender" {{ $user->gender=="Male"?"checked":""  }}/>
                            <span>Male</span>
                        </div>
                        <div class="radio_box">
                            <input type="radio" value="Female" name="user_gender" {{ $user->gender=="Female"?"checked":""  }}/>
                            <span>Female</span>
                        </div>
                    </div>
                </div>
                <div class="two_parts">
                    <div class="single_info dob_input">
                        <h4>Date of Birth:</h4>
                        <input type="date" value="{{ $user->date_of_birth }}" name="user_dob"/>
                    </div>
                    <div class="single_info dob_input">
                        <h4>Mobile Number:</h4>
                        <input type="text" value="{{ $user->mobile_number }}" name="mobile_number"/>
                    </div>
                </div>
                <div class="single_info">
                    <h4>Email:</h4>
                    <input type="email" value="{{ $user->email }}" name="user_email"/>
                </div>
                <div class="single_info">
                    <h4>Address:</h4>
                    <input type="text" value="{{ $user->address }}" name="user_address"/>
                </div>
                <div class="single_info">
                    <h4>National ID:</h4>
                    <input type="text" value="{{ $user->national_id }}" name="national_id"/>
                </div>
                <input type="submit" value="Save Information" class="info_btn" />
            </div>
        </div>
    </form>
</section>
@endsection