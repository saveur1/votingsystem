<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index(){
        $users_total = User::where("role","user")->count();
        $candidates_total = User::where("role","candidate")->count();
        return view("admin.index", ["users_total"=>$users_total, "candidates_total"=>$candidates_total]);
    }

    public function show($user_id){
        $user = User::findOrFail($user_id);
        return view("users.index",["user" => $user]);
    }
    public function login(){
        return view("auth.login");
    }
    public function create() { 
        return view("auth.register");
    }

    public function store(){
        $user = new User();
        $user->user_name = request("user_name");
        $user->email = request("email");
        $user->password = request("password");
        $user->date_of_birth = request("date_of_birth");
        $user->mobile_number = request("mobile_number");
        $user->gender = request("gender");
        $user->address = "Kicukiro, Kigali, Rwanda";
        $user->save();

        session()->put("user_id",$user->user_id);
        print($user->user_id);
        return redirect("/login")->with("message","User Registered Successfully");
    }

    public function election(){
        return view("users.elections");
    }
    public function voting(){
        return view("users.voting");
    }
}
