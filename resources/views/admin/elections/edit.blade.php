@extends("layouts.admin_layout")

@section("content")
    <x-admin-path-back title="Elections" action="Edit Election"/>
    
    <x-admin-election-form
        :election="$election"
        formUrl="/dashboard/elections/{{ $election['election_id'] }}"
        electionId="{{ $election['election_id'] }}"
    />
@endsection