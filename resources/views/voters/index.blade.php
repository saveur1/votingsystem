@extends("layouts.layout")

@section("content")
<section id="voter_dashboard">
    <nav class="navbar">
        <a href="#home" id="bars"><i class="fa-solid fa-bars"></i></a>
        <div class="collapsable_links">
            <a href="#about" class="active">Personal Infor</a>
            <a href="#about">Elections</a>
            <a href="/contact">Contact</a>
            <a href="/login" class="info_btn">Vote</a>
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
                <p>Servlet Biko</p>
            </div>
            <div class="single_info">
                <h4>Father's/Mother's Name:</h4>
                <p>Papa Biko</p>
            </div>
            <div class="two_parts">
                <div class="single_info">
                    <h4>Age:</h4>
                    <p>23</p>
                </div>
                <div class="single_info">
                    <h4>Mobile Number:</h4>
                    <p>+250780481590</p>
                </div>
            </div>
            <div class="single_info">
                <h4>Email:</h4>
                <p>bikorimanaxavier@gmail.com</p>
            </div>
            <div class="single_info">
                <h4>Address:</h4>
                <p>Kk4ave 751st, kicukiro, Kigali</p>
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