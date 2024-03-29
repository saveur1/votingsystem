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
                <form id="registrationForm" method="POST" action="/login">
                    @csrf
                    <div class="input_group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" required/>
                    </div>
                    <div class="input_group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required/>
                    </div>
                    <a href="/forgot-password">Forgot Password?</a>
                    @if(session("message") != null)
                        <div class="info_card {{ session('message')['status'] }}">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            {{ session('message')['message'] }}
                        </div>
                    @endif
                    <div class="submit_butt">
                        <input type="submit" id="regist_submit" class="info_btn" value="Login"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
