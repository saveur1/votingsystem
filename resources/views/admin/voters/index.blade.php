@extends("layouts.admin_layout")

@section("content")
    <div class="path_steps">
        <h2 class="">Voters</h2>
    </div>
    <div class="multi_rows_table">
        <div class="path_steps section_header">
            <h2 class="">Voters List</h2>
            <div class="right_path">
                <a href="/dashboard/voter/new" class="blue_icon_button">
                    <i class="fa-solid fa-plus"></i>
                    <span>Add Voter</span>
                </a>
                <div id="upload_excell_div"></div>
            </div>
        </div>
        @if(session("message") != null)
            <div class="info_card {{ session('message')['status'] }}">
                {{ session('message')['message'] }}
            </div>
        @endif
        <div id="users_list_table"></div>
    </div>


 <script src="https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript" src="/js/AdminCrudOperation.js"></script>
 <script type="text/javascript">

    const voters = JSON.parse(`@json($voters)`);

    const cand_class = new AdminCrudOperation();

    function fetchVoters(){
        const delete_form = (user)=>`
            <form onsubmit="deleteVoter(this)" method="POST" action="/dashboard/voters/${ user.user_id }">
                @csrf
                @method("DELETE")
                <button type="submit" class="table_button delete_button"><i class="fa-solid fa-trash"></i></button>
            </form>`;

        const edit_button = (user)=>`
            <button type="button" class="table_button edit_button" onclick="location.href='/dashboard/voter/${ user.user_id }/edit'"><i class="fa-solid fa-pen"></i></button>
        `;
        cand_class.fetchAllUsers(voters,delete_form, edit_button);
    }

    function deleteVoter(form){
        event.preventDefault();
        cand_class.delete_single_data(form);
    }

    function openMicroModal(event){
        const user = { ...voters.filter(single_cand=>single_cand.user_id ===parseInt(event.getAttribute("data-id")))[0] };   
        cand_class.viewUserDetails(user);
    }

    function upload_excel_div(){
        document.getElementById("upload_excell_div").innerHTML=`
        <form onsubmit="upload_excel_submit(this)" action="/dashboard/voters/import" method="POST" enctype="multipart/form-data" id="file_uploader">
            @csrf
            <input type="file" name="upload_excel" id="upload_excel" accept=".xlsx, .xls,.csv"/>
            <button type="submit" class="blue_icon_button import">
            <i class="fa-solid fa-file-import"></i>
                <span>Import excel</span>
            </button>
        </form>
        `;
    }
    function upload_excel_submit(form){
        event.preventDefault();
        document.querySelector("input[type=file]").click();

        document.querySelector(".multi_rows_table").addEventListener("change", function(){
            form.submit();
        });
    }

    setTimeout(()=>{
        document.querySelector(".info_card").style.display="none";
    },4000);

    fetchVoters();
    upload_excel_div();

    </script>
@endsection