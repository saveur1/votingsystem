@extends("layouts.admin_layout")

@section("content")
    <x-admin-path-back title="Voters" action="Edit Info"/>
    <x-admin-new-user-form 
        title="Voters Registration" 
        showParty='false' 
        :candidate="$voter"
        form_url="/dashboard/voters/{{ $voter['user_id'] }}"
        userId="{{ $voter['user_id'] }}"
        />
@endsection