@extends("layouts.admin_layout")

@section("content")
    <x-admin-path-back title="Candidates" action="Add New"/>
    <x-admin-new-user-form 
        title="Candidate Form" 
        showParty='true' 
        formUrl="/dashboard/candidate/new" 
        :parties="$parties"
        />
@endsection