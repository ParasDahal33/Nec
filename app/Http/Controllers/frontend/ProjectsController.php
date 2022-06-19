<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function projects()
    {
        $projects=Project::all();
        return view('frontend.projects',compact('projects'));
    }
}
