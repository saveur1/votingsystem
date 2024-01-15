class AdminParties extends AdminCrudOperation{

    fetchAllUsers(parties, delete_form, edit_button){

        const grid = new gridjs.Grid({
            columns: [
                "ID",
                {
                    name:'Party Symbol',
                    formatter:(cell,row)=>{
                        return new gridjs.html(`
                            <img src="${row["_cells"][1]["data"]}" alt=""/width="50" height="50">
                        `)
                    }
                },
                { 
                    name: 'Party Name', 
                    sort: true 
                },
                'Contact',
                {
                    name: 'Actions',
                    formatter: (cell, row) => {
                        const party = { ...parties.filter(single_elect=>single_elect.party_id===row["_cells"][0]["data"])[0] };
                        
                        return new gridjs.html(`
                            <div class="table_form_buttons">
                                <button type="button" class="table_button view_button external" data-id="${ party.party_id }" onclick="openMicroModal(this)"><i class="fa-solid fa-eye"></i></button>
                                ${ edit_button(party) }
                                ${ delete_form(party) }
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
            data: parties.map(party=>[
                        party.party_id, 
                        party.symbol, 
                        party.party_name, 
                        party.contact
                    ])
        }).render(document.getElementById("parties_list_table"));

    }

    viewUserDetails(party){
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
                                    <img src="${party.symbol}" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="modal_description">
                            <div class="left_desc">
                                <h3>Party Name:</h3>
                                <h3>contact:</h3>
                                <h3>Party ID:</h3>
                            </div>
                            <div class="right_desc">
                                <h3>${ party.party_name }</h3>
                                <h3>${ party.contact }</h3>
                                <h3>${ party.party_id }</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;

        MicroModal.show("viewModal");
    }
}