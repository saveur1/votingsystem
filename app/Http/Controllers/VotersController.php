<?php

namespace App\Http\Controllers;

use App\Imports\VotersImport;
use App\Models\User;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Exception;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PhpParser\Node\Stmt\TryCatch;

class VotersController extends Controller
{
    public function index(){
        $voters = User::where("role","user")->get();
        return view("admin.voters.index",[ "voters"=>$voters ]);
    }
    public function create(){
        return view("admin.voters.create");
    }
    public function store(Request $request){
        $voter = new User();
        $voter->user_name = request("user_name");
        $voter->email = request("user_email");
        $voter->password = request("user_password");
        $voter->date_of_birth = request("user_dob");
        $voter->mobile_number = request("mobile_no");
        if($request->hasFile("user_image")){
            $user_image = Cloudinary::upload($request->file('user_image')->getRealPath());
            $voter->user_image = $user_image->getSecurePath();
        }
        $voter->address = request("user_address");
        $voter->national_id = request("national_id");
        $voter->gender = request("user_gender");
        $voter->role = "voter";
        $voter->party_id = request("party");

        $voter->save();

        return redirect("/dashboard/voters")->with("message","New voter registered successfully");
    }

    public function destroy($user_id){
        $voter = User::findOrFail($user_id);
        $voter->delete();
        return redirect("/dashboard/voters");
    }

    public function edit($user_id){
        $voter = User::findOrFail($user_id);
        return view("admin.voters.edit", ["voter" => $voter]);
    }

    public function update($user_id,Request $request){
        
        $voter = User::findOrFail($user_id);
        $voter->user_name = request("user_name");
        $voter->email = request("user_email");
        $voter->date_of_birth = request("user_dob");
        $voter->mobile_number = request("mobile_no");
        if($request->hasFile("user_image")){
            $user_image = Cloudinary::upload($request->file('user_image')->getRealPath());
            $voter->user_image = $user_image->getSecurePath();
        }
        $voter->address = request("user_address");
        $voter->national_id = request("national_id");
        $voter->gender = request("user_gender");

        $voter->save();

        return redirect("/dashboard/voters")->with("message",["status"=>"success","message"=>"New voter registered successfully"]);
    }

    public function import(Request $request)
    {
        try{
            Excel::import(new VotersImport, $request->file("upload_excel"));
            return redirect('/dashboard/voters')->with('message', ["status" => "success","message"=>"File Imported Successfully"]);
        }catch(Exception $e){
            return redirect('/dashboard/voters')->with('message', ["status" => "error","message"=>$e->getMessage()]);
        }
    }
}
