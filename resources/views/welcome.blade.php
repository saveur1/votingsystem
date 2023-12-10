@extends("layouts.layout")

@section("content")
<header id="home">
    <nav class="navbar" style="background-color:black;">
        <a href="#home" id="bars"><i class="fa-solid fa-bars"></i></a>
        <div class="collapsable_links">
            <a href="#about">About</a>
            <a href="/contact">Contact</a>
            <a href="/login" class="info_btn">Login</a>
        </div>
    </nav>
    <div class="home_content">
        <div class="image">
            <img src="/images/home_vote.svg" alt="" />
        </div>
        <div class="content_text">
            <h3>Be Part of Decision</h3>
            <h1>Vote Today</h1>
            <div class="two_buttons">
                <a href="/register" class="info_btn">Register</a>
                <a href="/readmore" class="info_btn">Read More</a>
            </div>
        </div>
    </div>
</header>
<section id="guidelines">
    <div class="project_container">
        <h1>Follow these easy steps</h1>
        <div class="steps">
            <i class="fa-solid fa-address-card"></i>
            <h4>Register yourself by filling the required informations</h4>
        </div>
        <div class="steps">
            <i class="fa-solid fa-right-to-bracket"></i>
            <h4>Signin as user</h4>
        </div>
        <div class="steps">
            <i class="fa-solid fa-grip"></i>
            <h4>Go to vote option on dashboard</h4>
        </div>
        <div class="steps">
            <i class="fa-solid fa-key"></i>
            <h4>Give  your  security key(fingerprint)</h4>
        </div>
        <div class="steps">
            <i class="fa-solid fa-check-to-slot"></i>
            <h4>Vote your candidate and submit</h4>
        </div>
    </div>
</section>
<section id="about">
    <div class="project_container">
        <h2>ABOUT</h2>
        <p>
            An online voting system that will replace the 
            old ballot system or paper system. Over the time 
            we have utilized the required technology in every
            sector to improve efficiency and save the extra
            resources. But the voting system is still very 
            expensive and requires a bigger workforce.
            We bring the system that is safe,
            reliable and solve the modern issues like higher
            reacheability of the booth, crowd free voting, 
            inexpensive, faster results and others.
        </p> 
    </div>
</section>
<footer id="project_footer">
    <div class="project_container">
        <div class="contact_info">
            <div class="contact1">
                <h3>Contact:</h3>
                <p>0788406382</p>
                <p>0789472648</p>
            </div>
            <div class="contact1">
                <h3>Helpline Number:</h3>
                <p>07963728182</p>
                <p>07846289102</p>
            </div>
            <div class="contact1">
                <h3>Email:</h3>
                <p>complaint@electionrwanda.gov.in</p>
                <p>info@electionrwanda.gov.in</p>
            </div>
        </div>
        <div class="social_media">
            <div class="accounts">
                <div class="contact1">
                    <h3>GetIn:</h3>
                    <p>Login</p>
                    <p>Register</p>
                </div>
                <div class="contact1">
                    <h3>Know More:</h3>
                    <p>Features</p>
                    <p>About</p>
                    <p>Steps</p>
                </div>
                <div class="contact1">
                    <h3>Follow Us:</h3>
                    <p>Facebook</p>
                    <p>Instagram</p>
                    <p>Twitter</p>
                </div>
            </div>
            <div class="social_icon">
                <div class="icons">
                    <i class="fa-brands fa-square-x-twitter"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-square-instagram"></i>
                </div>
                <p>&copy;Saveur.Queen</p>
            </div>
        </div>
        <div class="quick_feedback">
            <h3>Quick Feedback:</h3>
            <form id="feedback_form">
                <input type="text" name="subject" id="subject" placeholder="Subject" />
                <textarea name="message" id="message" cols="9" rows="5" placeholder="Message"></textarea>
                <div class="alignment">
                    <div class="icon_button">
                        <i class="fa-solid fa-paper-plane"></i>
                        <input type="submit" value="Send">
                    </div>
                </div>
            </form>
        </div>
    </div>
</footer>
@endsection