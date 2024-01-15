@extends("layouts.admin_layout")

@section("content")
    <x-admin-path-back title="Managers" action="Edit Info"/>
    <x-admin-new-user-form 
        title="Managers Registration" 
        showParty='false' 
        :candidate="$manager" 
        form_url="/dashboard/managers/{{ $manager['user_id'] }}"
        userId="{{ $manager['user_id'] }}"
        />
@endsection