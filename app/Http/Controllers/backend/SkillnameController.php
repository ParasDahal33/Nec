<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skillname;

class SkillnameController extends Controller
{
    public function create()
    {
       return view('backend.skill.skillname.create');
      
    }

    public function edit($id)
    {
        $data =Skillname::find($id);  
        return view('backend.skill.skillname.edit',compact('data'));
    }

     
    public function view($id)
    {
        $record=Skillname::find($id);
        return view('backend.skill.skillname.view',compact('record'));
      
    }

    public function store(Request $request)
    {
     
        $validated = $request->validate([
            'skillname' => 'required',
            'skillpercentage' => 'required',
            'position'=>'required',
            'activestatus'=>'required',
        ]);

        $data = $request->all();
        $input=new Skillname();
        $input->skillname=$data['skillname'];
        $input->skillpercentage=$data['skillpercentage'];
        $input->position=$data['position'];
        $input->activestatus=$data['activestatus'];
        $input->save();
        return redirect('view_skillnames')->with('message','Data added Sucessfully');
        
    }
    
    public function display()
    {
        $data=Skillname::all();

        if(count($data)==0)
        {
            $records=Skillname::all();
            return view('backend.skill.skillname.view_skillnames',compact('records'));
        }
        else{
            $records=[[]];
        
            for($i=0;$i<count($data);$i++)
            {
                $a=count($data)-1-$i;
                $records[$i]=$data[$a];
                
            }
            return view('backend.skill.skillname.view_skillnames',compact('records'));
        }
    }

    public function activestatus($id)
    {
        $input=Skillname::Find($id);
        if ($input->activestatus==1)
        {
            $input->activestatus=0;
        }
        else{
            $input->activestatus=1;
        }
        $input->save();
        return redirect('view_skillnames');
    }
    
    public function position_update(Request $request,$id)
    {
     
        $validated = $request->validate([
        
            'position'=>'required',
            
        ]);
        $input=Skillname::find($id);
        $input->position=$request['position'];
        $input->save();
        return redirect('view_skillnames')->with('message','Position Updated');
        
    }

    public function update(Request $request,$id)
    {

        $validated = $request->validate([
            'skillname' => 'required',
            'skillpercentage' => 'required',
            'position'=>'required',
            'activestatus'=>'required',
        ]);
        $input=Skillname::find($id);
        $data = $request->all();
        $input->skillname=$data['skillname'];
        $input->skillpercentage=$data['skillpercentage'];
        $input->position=$data['position'];
        $input->activestatus=$data['activestatus'];
        $input->save();
        return redirect('view_skillnames')->with('message','Data edited Sucessfully');
    }

    public function delete($id)
    {       
        $data =Skillname::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }

        return redirect('view_skillnames')->with('message','Data moved to trash Sucessfully');
    }

    public function recyclebin()
    {
        $records=Skillname::onlyTrashed()->get();
        return view('backend.skill.skillname.recyclebin',compact('records'));
    }

    public function restore($id)
    {       
        $data =Skillname::withTrashed()->find($id);
        if(!is_null($data))
        {
            $data->restore();
        }

        return redirect('view_skillnames')->with('message','Data restored Sucessfully');
    }

    public function forcedelete($id)
    {       
        $data =Skillname::withTrashed()->find($id);
        if(!is_null($data))
        {
            $data->forcedelete();
        }
        return redirect('view_skillnames')->with('message','Data deleted Sucessfully');
    } 
}
