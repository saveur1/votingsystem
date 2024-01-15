@extends("layouts.admin_layout")

@section("content")
    <x-admin-path-back title="Candidates" action="Edit Info"/>
    <x-admin-new-user-form 
        title="Candidate Form" 
        showParty='true' 
        :candidate="$candidate" 
        form_url="/dashboard/candidates/{{ $candidate['user_id'] }}"
        userId="{{ $candidate['user_id'] }}"
        />
@endsection