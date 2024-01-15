@extends("layouts.admin_layout")

@section("content")
    <div class="path_steps">
        <h2 class="">Manage Parties</h2>
    </div>
    <div class="multi_rows_table">
        <div class="path_steps section_header">
            <h2 class="">List of Parties</h2>
            <div class="right_path">
                <a href="/dashboard/party/new" class="blue_icon_button">
                    <i class="fa-solid fa-plus"></i>
                    <span>Add Party</span>
                </a>
            </div>
        </div>
        <div id="parties_list_table"></div>
    </div>
 <script src="https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript" src="/js/AdminCrudOperation.js"></script>
 <script type="text/javascript" src="/js/AdminParties.js"></script>

 <script type="text/javascript">

    const parties = JSON.parse(`@json($parties)`);

    const cand_class = new AdminParties();

    function fetchParties(){
        const delete_form = (party)=>`
            <form onsubmit="deleteParty(this)" method="POST" action="/dashboard/parties/${ party.party_id }">
                @csrf
                @method("DELETE")
                <button type="submit" class="table_button delete_button"><i class="fa-solid fa-trash"></i></button>
            </form>`;

        const edit_button = (party)=>`
            <button type="button" class="table_button edit_button" onclick="location.href='/dashboard/party/${ party.party_id }/edit'"><i class="fa-solid fa-pen"></i></button>
        `;
        cand_class.fetchAllUsers(parties,delete_form, edit_button);
    }

    function deleteParty(form){
        event.preventDefault();
        cand_class.delete_single_data(form);
    }

    function openMicroModal(event){
        const party = { ...parties.filter(single_cand=>single_cand.party_id ===parseInt(event.getAttribute("data-id")))[0] };   
        cand_class.viewUserDetails(party);
    }

    fetchParties();
    
    </script>
@endsection