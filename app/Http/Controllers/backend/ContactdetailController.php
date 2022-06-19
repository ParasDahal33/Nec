<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactdetail;

class ContactdetailController extends Controller
{
    public function create()
    {
        $id=1;
        $data=Contactdetail::find($id);
        return view('backend.contact_detail.create',compact('data'));
    }

    public function store(Request $request)
    {
     
        
        $validated = $request->validate([
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        $input= Contactdetail::all();

        if (count($input)==0)
        {
            $input=new Contactdetail();
            $data = $request->all();
            $input->phone=$data['phone'];
             $input->email=$data['email'];
              $input->address=$data['address'];
            $input->save();   
            return view('backend.contact_detail.create',compact('data'));
        } 

        else
        {   
            $id=1;
            $input=Contactdetail::find($id);
            $data = $request->all();
            $input->phone=$data['phone'];
             $input->email=$data['email'];
              $input->address=$data['address'];
            $input->save();   
            return view('backend.contact_detail.create',compact('data'));
        }
    }       
}
