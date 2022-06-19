<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skilldescription;
use App\Models\Skillname;
use App\Models\Service;
use App\Models\Testimony;
use App\Models\Project;

class IndexController extends Controller
{
    public function index()
    {
        $id=1;
        $skilldescription=Skilldescription::find($id);
        $skillname=Skillname::all()->take(3);
        $services=Service::all()->take(3);
        $projects=Project::all()->take(3);
        $testimony=Testimony::all();
        return view('frontend.index',compact('skilldescription','skillname','services','testimony','projects'));
    }
}
