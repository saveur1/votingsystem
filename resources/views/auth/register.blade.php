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
                <form id="registrationForm">
                    <div class="input_group">
                        <label for="name">Name</label>
                        <input type="text" id="name"/>
                    </div>
                    <div class="input_group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob"/>
                    </div>
                    <div class="input_group">
                        <label for="father_name">Father's/Mother's Name</label>
                        <input type="text" id="father_name"/>
                    </div>
                    <div class="input_group">
                        <label for="email">Email</label>
                        <input type="text" id="email"/>
                    </div>
                    <div class="input_group">
                        <label for="mobileno">Mobile No.</label>
                        <input type="tel" id="mobileno"/>
                    </div>
                    <div class="input_group">
                        <label for="password">Password</label>
                        <input type="password" id="password"/>
                    </div>
                    <div class="input_group">
                        <label for="repassword">Re - Password</label>
                        <input type="password" id="repassword"/>
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