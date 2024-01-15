@extends("layouts.admin_layout")

@section("content")
    <div class="path_steps">
        <h2 class="">Elections</h2>
    </div>
    <div class="multi_rows_table">
        <div class="path_steps section_header">
            <h2 class="">Elections History</h2>
            <div class="right_path">
                <a href="/dashboard/electon/new" class="blue_icon_button stop">
                    <i class="fa-solid fa-circle-stop"></i>
                    <span>Stop Election</span>
                </a>
                <a href="/dashboard/election/new" class="blue_icon_button">
                    <i class="fa-solid fa-plus"></i>
                    <span>Add Election</span>
                </a>
            </div>
        </div>
        <div id="elections_list_table"></div>
    </div>
 
 <script src="https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript" src="/js/AdminCrudOperation.js"></script>
 <script type="text/javascript" src="/js/AdminElection.js"></script>
 <script type="text/javascript">

    const elections = JSON.parse(`@json($elections)`);

    const elections_class = new AdminElection();

    function fetchElections(){
        const delete_form = (election)=>`
            <form onsubmit="deleteElection(this)" method="POST" action="/dashboard/elections/${ election.election_id }">
                @csrf
                @method("DELETE")
                <button type="submit" class="table_button delete_button"><i class="fa-solid fa-trash"></i></button>
            </form>`;

        const edit_button = (election)=>`
            <button type="button" class="table_button edit_button" onclick="location.href='/dashboard/election/${ election.election_id }/edit'"><i class="fa-solid fa-pen"></i></button>
        `;
        elections_class.fetchAllUsers(elections,delete_form, edit_button);
    }

    function deleteElection(form){
        event.preventDefault();
        elections_class.delete_single_data(form);
    }

    function openMicroModal(event){
        const user = { ...elections.filter(single_cand=>single_cand.user_id ===parseInt(event.getAttribute("data-id")))[0] };   
        elections_class.viewUserDetails(user);
    }

    fetchElections();

    </script>
@endsection