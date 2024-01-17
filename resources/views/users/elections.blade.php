@extends("layouts.layout")

@section("content")
<section id="voter_dashboard">
    <div class="project_container voters_elections">
    <nav class="navbar">
        <a href="#home" id="bars"><i class="fa-solid fa-bars"></i></a>
        <div class="collapsable_links">
            <a href="/voters">Profile</a>
            <a href="/voters/elections" class="active">Elections</a>
            <a href="/voters/voting" class="info_btn">Vote</a>
        </div>
    </nav>

    <h2 class="others">All Elections</h2>
    @foreach($elections as $election)
        <div class="election_card">
            <h3>{{ $election->positions }}</h3>
            <h3>{{ $election->end_date }}</h3>
        </div>
    @endforeach
</div>
</section>
@endsection