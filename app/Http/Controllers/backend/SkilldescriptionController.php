<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skilldescription;

class SkilldescriptionController extends Controller
{
    public function create()
    {
        $id=1;
        $data=Skilldescription::find($id);
        return view('backend.skill.description.create',compact('data'));
    }

    public function store(Request $request)
    {
     
        $validated = $request->validate([
            'skilldescription' => 'required',
        ]);

        $input= Skilldescription::all();

        if (count($input)==0)
        {
            $input=new Skilldescription();
            $data = $request->all();
            $input->skilldescription=$data['skilldescription'];
            $input->save();   
            return view('backend.skill.description.create',compact('data'));
        } 

        else
        {   
            $id=1;
            $input=Skilldescription::find($id);
            $data = $request->all();
            $input->skilldescription=$data['skilldescription'];
            $input->save();   
            return view('backend.skill.description.create',compact('data'));
        }
    }
    
}
