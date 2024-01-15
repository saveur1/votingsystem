<?php

namespace App\Http\Controllers;

use App\Models\Elections;
use Illuminate\Http\Request;

class ElectionsController extends Controller
{
    public function index(){
        $elections = Elections::all();
        return view("admin.elections.index",["elections" => $elections]);
    }
    public function create(){
        return view("admin.elections.create");
    }
    public function store(){
        $election = new Elections();
        $election->positions = request("position");
        $election->start_date_time = request("start_date_time");
        $election->end_date_time = request("end_date_time");
        $election->save();
        return redirect("/dashboard/elections")->with("message","New Election Created Successfully");
    }

    public function destroy($election_id){
        $manager = Elections::findOrFail($election_id);
        $manager->delete();
        return redirect("/dashboard/elections");
    }

    public function edit($election_id){
        $election = Elections::findOrFail($election_id);
        return view("admin.elections.edit", ["election" => $election]);
    }

    public function update($election_id){
        $election = Elections::findOrFail($election_id);
        $election->positions = request("position");
        $election->start_date_time = request("start_date_time");
        $election->end_date_time = request("end_date_time");
        $election->save();
        return redirect("/dashboard/elections")->with("message","Election Updated Successfully");
    }
}
