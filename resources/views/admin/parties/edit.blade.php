@extends("layouts.admin_layout")

@section("content")
    <x-admin-path-back title="Parties" action="Edit Party"/>
    
    <x-admin-parties-form
        :party="$party"
        formUrl="/dashboard/parties/{{ $party['party_id'] }}"
        partyId="{{ $party['party_id'] }}"
    />
@endsection