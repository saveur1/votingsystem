@extends("layouts.admin_layout")

@section("content")
    <x-admin-path-back title="Parties" action="Add New"/>
    <x-admin-parties-form 
        formUrl="/dashboard/party/new"
    />
@endsection