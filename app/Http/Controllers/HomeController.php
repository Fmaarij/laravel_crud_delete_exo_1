<?php

namespace App\Http\Controllers;

use App\Models\addMember;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHomePage(){
        $allHommeFemme = addMember::orderByDesc('id')->limit(15)->get();

        $homme = addMember::orderByDesc('id')->limit(15)->where("genre", '=', 'Homme')->get();

        $femme=addMember::orderByDesc('id')->limit(15)->where("genre", '=', 'Femme')->get();

        return view('frontend.pages.home',compact('homme','femme','allHommeFemme'));
    }
    public function destroy($id){
        $destroy =addMember::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
