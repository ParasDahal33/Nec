<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CallnowController extends Controller
{
    public function store(Request $request)
    {   
        // return $request;    
        $validated = $request->validate([
            'number' => 'required',
        
        ]);

            
            $data = $request->all();
            $input=new Callnow();
            $input->number=$data['number'];
 
            $input->save();
        
            return redirect('contact');
            
    }   
    
    public function display()
    {
        $data=Callnow::all();

        if(count($data)==0)
        {
            $records=Callnow::all();
            return view('backend.contact_people.view_people_to_contact',compact('records'));
        }
        else{
            $records=[[]];
        
            for($i=0;$i<count($data);$i++)
            {
                $a=count($data)-1-$i;
                $records[$i]=$data[$a];
                
            }
            return view('backend.contact_people.view_people_to_contact',compact('records'));
        }
    }

    public function delete($id)
    {       
        $data =Callnow::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }

        return redirect('view_people_to_contact')->with('message','Data moved to trash Sucessfully');
    }

    public function recyclebin()
    {
        $records=Callnow::onlyTrashed()->get();
        return view('backend.contact_people.recyclebin',compact('records'));
    }

    public function restore($id)
    {       
        $data =Callnow::withTrashed()->find($id);
        if(!is_null($data))
        {
            $data->restore();
        }

        return redirect('view_people_to_contact')->with('message','Data restored Sucessfully');
    }

    public function forcedelete($id)
    {       
        $data =Callnow::withTrashed()->find($id);
        if(!is_null($data))
        {
            $data->forcedelete();
        }
        return redirect('view_people_to_contact')->with('message','Data deleted Sucessfully');
    } 
}
