@extends("layouts.layout")

@section("content")
<section id="registration">
    <div class="project_container">
        <div class="section_devider">
            <div class="image">
                <img src="/images/Figure.svg" />
                <a href="/login">Have an Account Login</a>
            </div>
            <div class="registration_form">
                <h2>Registration Form</h2>
                <form id="registrationForm" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input_group">
                        <label for="user-name">Name</label>
                        <input type="text" id="user-name" name="user_name" required/>
                    </div>
                    <div class="input_group">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" required/>
                    </div>
                    <div class="radio_group">
                        <label for="gender">Gender</label>
                        <span><input type="radio" id="male" name="gender" value="Male"/><span>Male</span></span>
                        <span><input type="radio" id="female" name="gender" Value="Female"/><span>Female</span></span>
                    </div>
                    <div class="input_group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" required/>
                    </div>
                    <div class="input_group">
                        <label for="mobileno">Mobile No.</label>
                        <input type="tel" id="mobileno" name="mobile_number" required/>
                    </div>
                    <div class="input_group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required/>
                    </div>
                    <div class="input_group">
                        <label for="repassword">Re - Password</label>
                        <input type="password" id="repassword" name="repassword" required/>
                    </div>
                    <div class="submit_butt">
                        <input type="submit" id="regist_submit" class="info_btn" value="Submit"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection