@extends("layouts.layout")

@section("content")
<section id="voter_dashboard">
    <div class="project_container voters_elections">
    <nav class="navbar">
        <a href="#home" id="bars"><i class="fa-solid fa-bars"></i></a>
        <div class="collapsable_links">
            <a href="#about">Profile</a>
            <a href="/voters/elections">Elections</a>
            <a href="/voters/voting" class="info_btn">Vote</a>
        </div>
    </nav>
    <h2>Voting Panel</h2>
    <div class="voting_card">
        <div class="card_header" onclick="foldAndUnforldCard(this)">
            <input type="radio" name="voting" value="candidate_id" />
            <div class="party_candidate">
                <img src="/images/logoInkotanyi.png" alt="" />
                <div class="party_text">
                    <h3>FPR Inkotanyi</h3>
                    <h3>Kanamura</h3>
                </div>
            </div>
            <i class="fa-solid fa-angle-down"></i>
        </div>
        <div class="card_body">
            <div class="image">
                <img src="/images/saveur.jpg" alt=""/>
            </div>
            <div class="body_text">
                <h3>Name:&nbsp;<span>Kananura Abdul</span></h3>
                <h3>Gender:&nbsp;<span>Male</span></h3>
                <h3>Age:&nbsp;<span>81</span></h3>
                <h3>Party:&nbsp;<span>FPR Inkotanyi</span></h3>
            </div>
        </div>
    </div>
    <div class="voting_card">
        <div class="card_header" onclick="foldAndUnforldCard(this)">
            <input type="radio" name="voting" value="candidate_id" />
            <div class="party_candidate">
                <img src="/images/logoInkotanyi.png" alt="" />
                <div class="party_text">
                    <h3>FPR Inkotanyi</h3>
                    <h3>Kanamura</h3>
                </div>
            </div>
            <i class="fa-solid fa-angle-down"></i>
        </div>
        <div class="card_body">
            <div class="image">
                <img src="/images/saveur.jpg" alt=""/>
            </div>
            <div class="body_text">
                <h3>Name:&nbsp;<span>Kananura Abdul</span></h3>
                <h3>Gender:&nbsp;<span>Male</span></h3>
                <h3>Age:&nbsp;<span>81</span></h3>
                <h3>Party:&nbsp;<span>FPR Inkotanyi</span></h3>
            </div>
        </div>
    </div>
    <div class="voting_card">
        <div class="card_header" onclick="foldAndUnforldCard(this)">
            <input type="radio" name="voting" value="candidate_id" />
            <div class="party_candidate">
                <img src="/images/logoInkotanyi.png" alt="" />
                <div class="party_text">
                    <h3>FPR Inkotanyi</h3>
                    <h3>Kanamura</h3>
                </div>
            </div>
            <i class="fa-solid fa-angle-down"></i>
        </div>
        <div class="card_body">
            <div class="image">
                <img src="/images/saveur.jpg" alt=""/>
            </div>
            <div class="body_text">
                <h3>Name:&nbsp;<span>Kananura Abdul</span></h3>
                <h3>Gender:&nbsp;<span>Male</span></h3>
                <h3>Age:&nbsp;<span>81</span></h3>
                <h3>Party:&nbsp;<span>FPR Inkotanyi</span></h3>
            </div>
        </div>
    </div>
    <div class="card_footer">
        <div class="checkbox">
            <input type="checkbox" name="voted_candidate" />
            <h3>I have selected to vote for Mr Kananura</h3>
        </div>
        <input type="submit" name="vote_now" value="SUBMIT" class="info_btn"/>
    </div>
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