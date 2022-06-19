<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutus;
use App\Models\Ourteam;

class AboutController extends Controller
{
    public function about()
    {
        $id=1;
        $aboutus=Aboutus::find($id);  

        $team_members= Ourteam::all()->take(4);;
        return view('frontend.about',compact('aboutus','team_members'));
    }
}
