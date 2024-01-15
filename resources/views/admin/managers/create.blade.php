@extends("layouts.admin_layout")

@section("content")
    <x-admin-path-back title="Managers" action="Add New"/>
    <x-admin-new-user-form title="Managers Registration" showParty='false' formUrl="/dashboard/manager/new"/>
@endsection