<?php

namespace App\Http\Controllers;

use App\Models\addMember;
use Illuminate\Http\Request;

class addMemberController extends Controller
{
    public function addMembers(){

        return view('frontend.pages.addMembers');
    }

    public function addMember(Request $request){
        $addMember = new addMember;
        $addMember->age = $request->age;
        $addMember->nom = $request->nom;
        $addMember->genre = $request->genre;
        $addMember->save();
        return redirect()->back();
    }


}
