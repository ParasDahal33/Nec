<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactus;

class ContactusController extends Controller
{

    public function store(Request $request)
    {   
        // return $request;    
        $validated = $request->validate([
            'fullname' => 'required',
            'email' => 'required',
        
        ]);

            
            $data = $request->all();
            $input=new Contactus();
            $input->fullname=$data['fullname'];
            $input->email=$data['email'];
 
            $input->save();
        
            return redirect('contact');
            
    }   
    
    public function display()
    {
        $data=Contactus::all();

        if(count($data)==0)
        {
            $records=Contactus::all();
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
        $data =Contactus::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }

        return redirect('view_people_to_contact')->with('message','Data moved to trash Sucessfully');
    }

    public function recyclebin()
    {
        $records=Contactus::onlyTrashed()->get();
        return view('backend.contact_people.recyclebin',compact('records'));
    }

    public function restore($id)
    {       
        $data =Contactus::withTrashed()->find($id);
        if(!is_null($data))
        {
            $data->restore();
        }

        return redirect('view_people_to_contact')->with('message','Data restored Sucessfully');
    }

    public function forcedelete($id)
    {       
        $data =Contactus::withTrashed()->find($id);
        if(!is_null($data))
        {
            $data->forcedelete();
        }
        return redirect('view_people_to_contact')->with('message','Data deleted Sucessfully');
    } 
}
