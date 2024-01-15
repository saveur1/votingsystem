class AdminElection extends AdminCrudOperation{

    fetchAllUsers(elections, delete_form, edit_button){

        const grid = new gridjs.Grid({
            columns: [
                "ID",
                { name: 'Postion', sort: true },
                'Start Date',
                'End Date',
                {
                    name: 'Action',
                    formatter: (cell, row) => {
                        const election = { ...elections.filter(single_elect=>single_elect.election_id===row["_cells"][0]["data"])[0] };
                        
                        return new gridjs.html(`
                            <div class="table_form_buttons">
                                ${ edit_button(election) }
                                ${ delete_form(election) }
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
            data: elections.map(election=>[
                        election.election_id, 
                        election.positions, 
                        election.start_date_time, 
                        election.end_date_time
                    ])
        }).render(document.getElementById("elections_list_table"));

    }
}