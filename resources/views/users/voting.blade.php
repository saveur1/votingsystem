@extends("layouts.layout")

@section("content")
<section id="voter_dashboard">

    <div class="project_container voters_elections">
        <nav class="navbar">
            <a href="#home" id="bars"><i class="fa-solid fa-bars"></i></a>
            <div class="collapsable_links">
                <a href="/voters">Profile</a>
                <a href="/voters/elections">Elections</a>
                <a href="/voters/voting" class="info_btn">Vote</a>
            </div>
        </nav>

        @if(Auth()->user()->status == "not voted")
            <h2>Voting Panel</h2>
            <form method="POST" action="/voters/voting">
                @csrf
                @isset($candidates)
                    @foreach($candidates as $candidate)
                        <div class="voting_card">
                            <div class="card_header" onclick="foldAndUnforldCard(this)">
                                <input type="radio" name="candidate_id" value="{{ $candidate->user_id }}" data-id="{{ $candidate->user_name }}" required/>
                                <div class="party_candidate">
                                    <img src="{{ $candidate->symbol }}" alt="" />
                                    <div class="party_text">
                                        <h3>{{ $candidate->party_name }}</h3>
                                        <h3>{{ $candidate->user_name }}</h3>
                                    </div>
                                </div>
                                <i class="fa-solid fa-angle-down"></i>
                            </div>
                            <div class="card_body">
                                <div class="image">
                                    <img src="{{ $candidate->user_image }}" alt=""/>
                                </div>
                                <div class="body_text">
                                    <h3>Name:&nbsp;<span>{{ $candidate->user_name }}</span></h3>
                                    <h3>Gender:&nbsp;<span>{{ $candidate->gender }}</span></h3>
                                    <h3>Age:&nbsp;<span> {{ $candidate->age }} Years</span></h3>
                                    <h3>Party:&nbsp;<span>{{ $candidate->party_name }}</span></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset

                <div class="card_footer">
                    <div class="checkbox">
                        <input type="checkbox" name="voted_candidate" />
                        <h3>I have selected to vote for Nsenga Queen Milleraire</h3>
                    </div>
                    <input type="submit" name="vote_now" value="SUBMIT" class="info_btn"/>
                </div> 
            </form>
        @elseif(Auth::user()->status == "voted")
            <div class="project_container voters_elections voted_successfully">
                <div class="project_container">
                    <img src="/images/success_bg.png" alt="" width="400"/>
                </div>
                <div class="project_container" style="margin-top:0px">
                    <h1>You have successfully voted, Thank you for your time!</h1>
                </div>
            </div>
        @endif
    </div>
</section>
<script type="text/javascript">

    // Select all card elements with the class "card"
    const cards = document.querySelectorAll('.voting_card');

    cards.forEach(card => {
        card.addEventListener('click', () => {
            cards.forEach(_card=>{
                _card.classList.remove("active");
            })
            const input = card.querySelector('input[type="radio"]');

            input.checked = true;
            card.classList.add("active");

            // Optional: Uncheck other radio buttons with the same name
            const otherInputs = document.querySelectorAll('input[name="voting"]:not(:checked)');
            otherInputs.forEach(otherInput => {
                otherInput.checked = false;
            });
        });
    });

    function foldAndUnforldCard(event){

        const card = event.parentNode;
        right_icon = card.querySelector("i");

        if(!card.classList.contains("fold_card")){
            card.classList.add("fold_card");
            right_icon.style.transform = "rotate(-90deg)";
        }else {
            card.classList.remove("fold_card");
            right_icon.style.transform = "rotate(0deg)";
        }
    }
    
    
</script>
@endsection