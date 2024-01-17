@extends("layouts.admin_layout")

@section("content")
    <x-admin-path-back title="Candidates" action="Edit Info"/>
    <x-admin-new-user-form 
        title="Candidate Form" 
        showParty='true' 
        formUrl="/dashboard/candidates/{{ $candidate['user_id'] }}" 
        :parties="$parties"
        :candidate="$candidate"
        />
@endsection