<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VoterCandidate;
use Illuminate\Http\Request;

class VoterCandidateController extends Controller
{
    public function index(){
        $candidates = User::where("role","candidate")
                            ->join("parties","parties.party_id","=","users.party_id")
                            ->get();
                    
        return view("users.voting",["candidates"=>$candidates]);
    }
    public function store(){
        $user_id = Auth()->id();

        $vote = new VoterCandidate();
        $vote->user_id = $user_id;
        $vote->candidate_id = request("candidate_id");
        $vote->save();

        // Marking User as voted
        $user = User::findOrFail($user_id);
        $user->status = "voted";
        $user->save();

        return view("users.voting");
    }
}
