@extends("layouts.layout")

@section("content")
<section id="voter_dashboard">
    <nav class="navbar">
        <a href="#home" id="bars"><i class="fa-solid fa-bars"></i></a>
        <div class="collapsable_links">
            <a href="#about" class="active">Profile</a>
            <a href="/users/elections">Elections</a>
            <a href="/voters/voting" class="info_btn">Vote</a>
        </div>
    </nav>
    <div class="project_container">
        <div class="user_profile">
            <div class="image-thumbnail">
                <img src="/images/user_default.svg" alt="">
            </div>
            <button type="button">Change Profile picture</button>
            <div class="icon_link">
                <i class="fa-solid fa-pencil"></i>
                <a href="/voter/edit_profile">Edit Profile</a>
            </div>
        </div>
        <div class="profile_infor">
            <div class="single_info">
                <h4>Name:</h4>
                <p>{{ $user->user_name }}</p>
            </div>
            <div class="single_info">
                <h4>Gender</h4>
                <p>
                    @php 
                        $gender = $user->gender? $user->gender : "<span style='color:red'>Not Set</span>";
                        echo $gender;
                    @endphp
                </p>
            </div>
            <div class="two_parts">
                <div class="single_info">
                    <h4>Age:</h4>
                    <p>{{ $user->date_of_birth }}</p>
                </div>
                <div class="single_info">
                    <h4>Mobile Number:</h4>
                    <p>{{ $user->mobile_number }}</p>
                </div>
            </div>
            <div class="single_info">
                <h4>Email:</h4>
                <p>{{ $user->email }}</p>
            </div>
            <div class="single_info">
                <h4>Address:</h4>
                <p>{{ $user->address }}</p>
            </div>
            <div class="two_parts">
                <div class="single_info">
                    <h4>Eligible:</h4>
                    <p>True</p>
                </div>
                <div class="single_info">
                    <h4>Verfied:</h4>
                    <p>True</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection