class AdminCrudOperation {

    fetchAllUsers(users, delete_form, edit_button){

        const grid = new gridjs.Grid({
            columns: [
                "ID",
                { name: 'Candidate', sort: true },
                'Email',
                'Phone',
                {
                    name: 'Action',
                    formatter: (cell, row) => {
                        const user = { ...users.filter(single_cand=>single_cand.user_id ===row["_cells"][0]["data"])[0] };
                        
                        return new gridjs.html(`
                            <div class="table_form_buttons">
                                <button type="button" class="table_button view_button external" data-id="${ user.user_id }" onclick="openMicroModal(this)"><i class="fa-solid fa-eye"></i></button>
                                ${ edit_button(user) }
                                ${ delete_form(user) }
                            </div>
                        `);
                    }
                }
            ],
    
            // Server side search
            search: true,
            language: {
            'search': {
                'placeholder': '🔍 Search...'
            }
            },
            resizable:true,
            style: {
                th: {
                    'background-color': 'rgba(185, 185, 185,0.2)',
                    'border': '1px solid rgba(185, 185, 185,0.2)',
                },
                td:{
                    'color': '#4e6069'
                }
            },
            pagination: {
            summary: false
            },
            data: users.map(user=>[
                        user.user_id, 
                        user.user_name, 
                        user.email, 
                        user.mobile_number
                    ])
        }).render(document.getElementById("users_list_table"));

    }

    delete_single_data(form){

        swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this information!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            
            form.submit();

        } else {
            return;
        }
        });
    }

    viewUserDetails(user){
        document.getElementById("modal_holder").innerHTML = 
        `
        <div class="modal micromodal-slide" id="viewModal" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close><i class="fa-solid fa-xmark"></i></button>
                    <div class="modal-content-content">
                        <div class="modal__content">
                            <div class="profile_header">
                                <div class="image">
                                    <img src="${user.user_image}" alt=""/>
                                </div>
                                <h3>${ user.user_name }</h3>
                                <h3>${ user.email }</h3>
                            </div>
                        </div>
                        <div class="modal_description">
                            <div class="left_desc">
                                <h3>Gender:</h3>
                                <h3>Date of Birth:</h3>
                                <h3>Mobile Number:</h3>
                                <h3>National ID:</h3>
                                <h3>Role:</h3>
                                ${user.party_id? "<h3>Party Name:</h3>":""}
                                <h3>Address:</h3>
                            </div>
                            <div class="right_desc">
                                <h3>${ user.gender }</h3>
                                <h3>${ user.date_of_birth }</h3>
                                <h3>${ user.mobile_number }</h3>
                                <h3>${ user.national_id }</h3>
                                <h3>${ user.role }</h3>
                                ${user.party_id? "<h3>" +user.party_id+"</h3>":""}
                                <h3>${ user.address }</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;

        MicroModal.show("viewModal");
    }
}