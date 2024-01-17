<?php

namespace App\Http\Controllers;

use App\Models\Party;
use App\Models\User;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index(){
        $candidates = User::where("role","candidate")
                            ->latest()->get();
        return view("admin.candidates.index",["candidates" => $candidates]);
    }
    public function create(){
        $parties = Party::all();
        return view("admin.candidates.create",["parties" => $parties]);
    }
    public function store(Request $request){
        $candidate = new User();
        $candidate->user_name = request("user_name");
        $candidate->email = request("user_email");
        $candidate->password = request("user_password");
        $candidate->date_of_birth = request("user_dob");
        $candidate->mobile_number = request("mobile_no");
        if($request->hasFile("user_image")){
            $user_image = Cloudinary::upload($request->file('user_image')->getRealPath());
            $candidate->user_image = $user_image->getSecurePath();
        }
        $candidate->address = request("user_address");
        $candidate->national_id = request("national_id");
        $candidate->gender = request("user_gender");
        $candidate->role = "candidate";
        $candidate->party_id = request("party");

        $candidate->save();

        return redirect("/dashboard/candidates")->with("message","New Candidate Registered Successfully");
    }

    public function destroy($user_id){
        $candidate = User::findOrFail($user_id);
        $candidate->delete();
        return redirect("/dashboard/candidates");
    }

    public function edit($user_id){
        $candidate = User::findOrFail($user_id);
        $parties = Party::all();
        return view("admin.candidates.edit", ["candidate" => $candidate, "parties" => $parties]);
    }

    public function update($user_id,Request $request){
        
        $candidate = User::findOrFail($user_id);
        $candidate->user_name = request("user_name");
        $candidate->email = request("user_email");
        $candidate->date_of_birth = request("user_dob");
        $candidate->mobile_number = request("mobile_no");
        if($request->hasFile("user_image")){
            $user_image = Cloudinary::upload($request->file('user_image')->getRealPath());
            $candidate->user_image = $user_image->getSecurePath();
        }
        $candidate->address = request("user_address");
        $candidate->national_id = request("national_id");
        $candidate->gender = request("user_gender");
        $candidate->party_id = request("party");

        $candidate->save();

        return redirect("/dashboard/candidates")->with("message","New Candidate Registered Successfully");
    }
}
