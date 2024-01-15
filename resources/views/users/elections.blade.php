@extends("layouts.layout")

@section("content")
<section id="voter_dashboard">
    <div class="project_container voters_elections">
    <nav class="navbar">
        <a href="#home" id="bars"><i class="fa-solid fa-bars"></i></a>
        <div class="collapsable_links">
            <a href="#about">Profile</a>
            <a href="/voters/elections" class="active">Elections</a>
            <a href="/voters/voting" class="info_btn">Vote</a>
        </div>
    </nav>
    <h2>Upcoming Elections</h2>
    <div class="election_card">
        <h3>Presidential Elections</h3>
        <h3>02-04-2024</h3>
    </div>
    <h2 class="others">Other Elections</h2>
    <div class="election_card">
        <h3>Presidential Elections</h3>
        <h3>02-04-2024</h3>
    </div>
    <div class="election_card">
        <h3>Presidential Elections</h3>
        <h3>02-04-2024</h3>
    </div>
    <div class="election_card">
        <h3>Presidential Elections</h3>
        <h3>02-04-2024</h3>
    </div>
    <div class="election_card">
        <h3>Presidential Elections</h3>
        <h3>02-04-2024</h3>
    </div>
</div>
</section>
@endsection