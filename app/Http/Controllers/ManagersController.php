<?php

namespace App\Http\Controllers;

use App\Models\User;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class ManagersController extends Controller
{
    public function index(){
        $managers = User::where("role","manager")
                         ->latest()->get();
        
        return view("admin.managers.index",["managers"=>$managers]);
    }
    public function create(){
        return view("admin.managers.create");
    }
    public function store(Request $request){
        $manager = new User();
        $manager->user_name = request("user_name");
        $manager->email = request("user_email");
        $manager->password = request("user_password");
        $manager->date_of_birth = request("user_dob");
        $manager->mobile_number = request("mobile_no");
        if($request->hasFile("user_image")){
            $user_image = Cloudinary::upload($request->file('user_image')->getRealPath());
            $manager->user_image = $user_image->getSecurePath();
        }
        $manager->address = request("user_address");
        $manager->national_id = request("national_id");
        $manager->gender = request("user_gender");
        $manager->role = "manager";
        $manager->party_id = request("party");

        $manager->save();

        return redirect("/dashboard/managers")->with("message","New Manager Registered Successfully");
    }

    public function destroy($user_id){
        $manager = User::findOrFail($user_id);
        $manager->delete();
        return redirect("/dashboard/managers");
    }

    public function edit($user_id){
        $manager = User::findOrFail($user_id);
        return view("admin.managers.edit", ["manager" => $manager]);
    }

    public function update($user_id,Request $request){
        
        $manager = User::findOrFail($user_id);
        $manager->user_name = request("user_name");
        $manager->email = request("user_email");
        $manager->date_of_birth = request("user_dob");
        $manager->mobile_number = request("mobile_no");
        if($request->hasFile("user_image")){
            $user_image = Cloudinary::upload($request->file('user_image')->getRealPath());
            $manager->user_image = $user_image->getSecurePath();
        }
        $manager->address = request("user_address");
        $manager->national_id = request("national_id");
        $manager->gender = request("user_gender");

        $manager->save();

        return redirect("/dashboard/managers")->with("message","New manager registered successfully");
    }
}
