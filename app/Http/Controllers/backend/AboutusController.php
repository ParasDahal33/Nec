<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutus;
use Illuminate\Support\Facades\File;

class AboutusController extends Controller
{
    public function create()
    {
        $id=1;
        $data=Aboutus::find($id);
        return view('backend.aboutus.create',compact('data'));
    }

    public function store(Request $request)
    {
     
        $validated = $request->validate([
            'aboutus' => 'required',
        ]);

        $input= Aboutus::all();

        if (count($input)==0)
        {
            $input=new Aboutus();
            $data = $request->all();
            $input->aboutus=$data['aboutus'];

            $image=$request->file('image');
            $image_name=$image->getClientOriginalName();
            $input->image=$image_name;
    
           
    
            $input->save();
            $request->image->storeAs('public/aboutus',$image_name); 
            return view('backend.aboutus.create',compact('data'));
        } 

        else
        {   
            $id=1;
            $input=Aboutus::find($id);
            $deleteimage=$input['image'];
            $data = $request->all();
            $input->aboutus=$data['aboutus'];

            if(is_null($request->image))
            {
                $input->image=$input->image;
            }
            else
            {
                $image=$request->file('image');
                $image_name=$image->getClientOriginalName();
                $input->image=$image_name;
                $request->image->storeAs('public/aboutus',$image_name);
    
                $path=storage_path('app\public\aboutus\\').$deleteimage;
        
                if(File::exists($path))
                {
                    unlink($path);
                }
    
                else
                {
                    return "not found";
                }
            }
            $input->save(); 
            return view('backend.aboutus.create',compact('data'));
        }
    }    
}
