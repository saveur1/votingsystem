@extends("layouts.admin_layout")

@section("content")
    <div class="path_steps">
        <h2 class="">Candidates</h2>
    </div>
    <div class="multi_rows_table">
        <div class="path_steps section_header">
            <h2 class="">Candidates List</h2>
            <div class="right_path">
                <a href="/dashboard/candidate/new" class="blue_icon_button">
                    <i class="fa-solid fa-plus"></i>
                    <span>Add Candidate</span>
                </a>
            </div>
        </div>
        <div id="users_list_table"></div>
    </div>

 <script src="https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript" src="/js/AdminCrudOperation.js"></script>
 <script type="text/javascript">

    candidates = JSON.parse(`@json($candidates)`);

    const cand_class = new AdminCrudOperation();

    function fetchCandidates(){
        const delete_form = (user)=>`
            <form onsubmit="deleteCandidate(this)" method="POST" action="/dashboard/candidates/${ user.user_id }">
                @csrf
                @method("DELETE")
                <button type="submit" class="table_button delete_button"><i class="fa-solid fa-trash"></i></button>
            </form>`;

        const edit_button = (user)=>`
            <button type="button" class="table_button edit_button" onclick="location.href='/dashboard/candidate/${ user.user_id }/edit'"><i class="fa-solid fa-pen"></i></button>
        `;                       
        cand_class.fetchAllUsers(candidates, delete_form, edit_button);
    }

    function deleteCandidate(form){
        event.preventDefault();

        cand_class.delete_single_data(form);
    }

    function openMicroModal(event){

        const user = { ...candidates.filter(single_cand=>single_cand.user_id ===parseInt(event.getAttribute("data-id")))[0] };
        
        cand_class.viewUserDetails(user);

    }

    fetchCandidates();
    </script>
@endsection