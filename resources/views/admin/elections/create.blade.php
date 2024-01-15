@extends("layouts.admin_layout")

@section("content")
    <x-admin-path-back title="Elections" action="Add New"/>
    <x-admin-election-form 
        formUrl="/dashboard/election/new"
    />
@endsection