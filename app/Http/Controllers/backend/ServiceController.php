<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function create()
    {
       return view('backend.service.create');
      
    }

    public function edit($id)
    {
        $data = Service::find($id);  
        return view('backend.service.edit',compact('data'));
    }

     
    public function view($id)
    {
        $record=Service::find($id);
        return view('backend.service.view',compact('record'));
      
    }

    public function store(Request $request)
    {
     
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon'=>'required',
            'position'=>'required',
            'activestatus'=>'required',
        ]);

        $data = $request->all();
        $input=new Service();
        $input->title=$data['title'];
        $input->description=$data['description'];
        $input->icon=$data['icon'];
        $input->position=$data['position'];
        $input->activestatus=$data['activestatus'];
        $input->save();
        return redirect('view_services')->with('message','Data added Sucessfully');
        
    }
    
    public function display()
    {
        $data= Service::all();

        if(count($data)==0)
        {
            $records= Service::all();
            return view('backend.service.view_services',compact('records'));
        }
        else{
            $records=[[]];
        
            for($i=0;$i<count($data);$i++)
            {
                $a=count($data)-1-$i;
                $records[$i]=$data[$a];
                
            }
            return view('backend.service.view_services',compact('records'));
        }
    }

    public function activestatus($id)
    {
        $input=Service::Find($id);
        if ($input->activestatus==1)
        {
            $input->activestatus=0;
        }
        else{
            $input->activestatus=1;
        }
        $input->save();
        return redirect('view_services');
    }
    
    public function position_update(Request $request,$id)
    {
     
        $validated = $request->validate([
        
            'position'=>'required',
            
        ]);
        $input= Service::find($id);
        $input->position=$request['position'];
        $input->save();
        return redirect('view_services')->with('message','Position Updated');
        
    }

    public function update(Request $request,$id)
    {

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
            'position'=>'required',
            'activestatus'=>'required',
        ]);
        $input= Service::find($id);
        $data = $request->all();
        $input->title=$data['title'];
        $input->description=$data['description'];
        $input->icon=$data['icon'];
        $input->position=$data['position'];
        $input->activestatus=$data['activestatus'];
        $input->save();
        return redirect('view_services')->with('message','Data edited Sucessfully');
    }

    public function delete($id)
    {       
        $data = Service::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }

        return redirect('view_services')->with('message','Data moved to trash Sucessfully');
    }

    public function recyclebin()
    {
        $records= Service::onlyTrashed()->get();
        return view('backend.service.recyclebin',compact('records'));
    }

    public function restore($id)
    {       
        $data = Service::withTrashed()->find($id);
        if(!is_null($data))
        {
            $data->restore();
        }

        return redirect('view_services')->with('message','Data restored Sucessfully');
    }

    public function forcedelete($id)
    {       
        $data = Service::withTrashed()->find($id);
        if(!is_null($data))
        {
            $data->forcedelete();
        }
        return redirect('view_services')->with('message','Data deleted Sucessfully');
    }
}
