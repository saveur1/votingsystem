<?php

namespace App\Http\Controllers;

use App\Models\Party;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function index(){
        $parties = Party::all();

        return view("admin.parties.index", ["parties" => $parties]); 
    }

    public function create(){
        return view("admin.parties.create");
    }
    public function store(Request $request){
        $party = new Party();
        $party->party_name = request("party_name");
        if($request->hasFile("symbol")){
            $symbol = Cloudinary::upload($request->file('symbol')->getRealPath());
            $party->symbol = $symbol->getSecurePath();
        }
        $party->contact = request("contact");
        $party->save();
        return redirect("/dashboard/parties")->with("message","New party Created Successfully");
    }

    public function destroy($party_id){
        $party = Party::findOrFail($party_id);
        $party->delete();
        return redirect("/dashboard/parties");
    }

    public function edit($party_id){
        $party = Party::findOrFail($party_id);
        return view("admin.parties.edit", ["party" => $party]);
    }

    public function update($party_id,Request $request){
        $party = Party::findOrFail($party_id);
        $party->party_name = request("party_name");
        $party->contact = request("contact");
        if($request->hasFile("symbol")){
            $symbol = Cloudinary::upload($request->file('symbol')->getRealPath());
            $party->symbol = $symbol->getSecurePath();
        }
        $party->save();
        return redirect("/dashboard/parties")->with("message","Party Updated Successfully");
    }
}
