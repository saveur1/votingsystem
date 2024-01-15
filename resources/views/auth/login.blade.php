@extends("layouts.layout")

@section("content")
<section id="registration" class="login_section">
    <div class="project_container">
        @if(isset($message))
            <div class="message-register">
                {{ $message }}
            </div>
        @endif
        <div class="section_devider">
            <div class="image login_image">
                <img src="/images/login1.svg" />
                <a href="/register"> Don't Have an Account Register</a>
            </div>
            <div class="registration_form login_form">
                <h2>Login</h2>
                <form id="registrationForm">
                    <div class="input_group">
                        <label for="email">Email</label>
                        <input type="text" id="email"/>
                    </div>
                    <div class="input_group">
                        <label for="password">Password</label>
                        <input type="password" id="password"/>
                    </div>
                    <a href="/forgot-password">Forgot Password?</a>
                    <div class="submit_butt">
                        <input type="submit" id="regist_submit" class="info_btn" value="Login"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
