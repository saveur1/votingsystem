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

    <div class="project_container">
        <div class="user_profile">
            <div class="image-thumbnail">
                @if(empty($user->user_image))
                    <img src="/images/user_default.svg" alt="">
                @else
                    <img src="{{ $user->user_image }}" alt="">
                @endif
            </div>
            <button type="button" onclick="location.href='/voters/edit_profile'">
                <i class="fa-solid fa-pencil"></i>&nbsp;&nbsp;
                <span>Edit Profile</span>
            </button>
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
                    <p>{{ $user->age }}</p>
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
                    <p>{{ $user->age >= 18 ? "True":"False" }}</p>
                </div>
                <div class="single_info">
                    <h4>Verfied:</h4>
                    <p>True</p>
                </div>
            </div>
        </div>
    </div>

    <div class="project_container">
        <a href="/logout" class="info_btn logout_butt">Logout</a>
    </div>
</section>
@endsection