<?php

namespace App\Http\Controllers;

use App\Models\Elections;
use App\Models\User;
use App\Models\VoterCandidate;
use Carbon\Carbon;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $users_total = User::all()->count();
        $candidates_total = User::where("role","candidate")->count();
        $voted_users = VoterCandidate::all()->count();

        $users_votes = VoterCandidate::all()
                                       ->join("users", "users.user_id","=","voter_candidate.user_id");
        return view("admin.index", [
                "users_total" => $users_total, 
                "candidates_total" => $candidates_total,
                "voted_users" => $voted_users
        ]);
    }

    public function show(){
        $user_id = Auth::id();
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
        return redirect("/login")->with("message",["status"=>"success", "message"=>"User Registered Successfully"]);
    }

    public function election(){
        $elections = Elections::select("*", Elections::raw("Date(start_date_time) as start_date"), 
                                           Elections::raw("Date(end_date_time) as end_date")
                                           )
                                ->get();

        return view("users.elections",["elections" => $elections ]);
    }

    public function checkLogin(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        $credentials = $request->only("email", "password");
        if(Auth::attempt($credentials)){
            if(Auth()->user()->role == "manager")
                return redirect()->intended("/dashboard");
            else if(Auth()->user()->role == "user")
                return redirect()->intended("/voters");
            else
                return redirect("/login")->with("message",["status"=>"error","message"=>"Your dashboard is not done Yet! Contact your administration if you think it is mistake!"]);
        }
        return redirect("/login")->with("message",["status"=>"error","message"=>"Enter correct credentials please"]);
    }

    public function logout(){
        Auth::logout();
        session()->flush();

        return redirect("/login");
    }

    public function profile(){
        $user = Auth::user();
        return view("users.editprofile", ["user"=>$user]);
    }

    public function update(Request $request){
        $user_id = Auth()->id();
        $user = User::findOrFail($user_id);
        $user->user_name = request("user_name");
        $user->email = request("user_email");
        $user->date_of_birth = request("user_dob");
        $user->mobile_number = request("mobile_number");
        if($request->hasFile("user_image")){
            $user_image = Cloudinary::upload($request->file('user_image')->getRealPath());
            $user->user_image = $user_image->getSecurePath();
        }
        $user->address = request("user_address");
        $user->national_id = request("national_id");
        $user->gender = request("user_gender");

        $user->save();

        return redirect("/voters")->with("message","New voter registered successfully");
    }
}
