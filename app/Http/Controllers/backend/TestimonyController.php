<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimony;
use Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class TestimonyController extends Controller
{
    public function create()
    {
       return view('backend.testimony.create');
      
    }
 
    public function view($id)
    {
        $record=Testimony::find($id);
        return view('backend.testimony.view',compact('record'));
      
    }


    public function display()
    {
        $data= Testimony::all();

        if(count($data)==0)
        {
            $records= Testimony::all();
            return view('backend.testimony.view_testimonys',compact('records'));
        }
        else{
            $records=[[]];
        
            for($i=0;$i<count($data);$i++)
            {
                $a=count($data)-1-$i;
                $records[$i]=$data[$a];
                
            }
            return view('backend.testimony.view_testimonys',compact('records'));
        }
    }

    public function position_update(Request $request,$id)
    {
     
        $validated = $request->validate([
        
            'position'=>'required',
            
        ]);
        $input= Testimony::find($id);
        $input->position=$request['position'];
        $input->save();
        return redirect('view_testimonys')->with('message','Position Updated');
        
    }

    // public function store(Request $request)
    // {
     
    //     $validated = $request->validate([
    //         'client_name' => 'required',
    //         'testimony' => 'required',
    //         'client_number'=>'required',
    //         'image'=>'required',
    //         'position'=>'required',
    //         'activestatus'=>'required',
    //     ]);

        
    //     $data = $request->all();
    //     $input=new Testimony();
    //     $input->client_name=$data['client_name'];
    //     $input->testimony=$data['testimony'];
    //     $input->client_number=$data['client_number'];
    //     $input->position=$data['position'];
    //     $input->activestatus=$data['activestatus'];

    //     $image=$request->file('image');
    //     $image_name=$image->getClientOriginalName();
    //     $input->image=$image_name;

       

    //     $input->save();
    //     $request->image->storeAs('public',$image_name);
     
    //     return redirect('view_testimonys')->with('message','Data added Sucessfully');
        
    // }

    // public function edit($id)
    // {
    //     $data = Testimony::find($id);  
    //     return view('backend.testimony.edit',compact('data'));
    // }

    // public function update(Request $request,$id)
    // {

    //     $validated = $request->validate([
    //         'client_name' => 'required',
    //         'testimony' => 'required',
    //         'client_number'=>'required',
    //         'position'=>'required',
    //         'activestatus'=>'required',
    //     ]);
    //     $input= Testimony::find($id);
    //     // return $request->all();
    //     $deleteimage=$input['image'];
    //     $data = $request->all();
    //     $input->client_name=$data['client_name'];
    //     $input->testimony=$data['testimony'];
    //     $input->client_number=$data['client_number'];
    //     $input->position=$data['position'];
    //     $input->activestatus=$data['activestatus'];
       


    //     if(is_null($request->image))
    //     {
    //         $input->image=$input->image;
    //     }
    //     else
    //     {
    //         $image=$request->file('image');
    //         $image_name=$image->getClientOriginalName();
    //         $input->image=$image_name;
    //         $request->image->storeAs('public',$image_name);

    //         $path=storage_path('app\public\\').$deleteimage;
    
    //         if(File::exists($path))
    //         {
    //             unlink($path);
    //         }

    //         else
    //         {
    //             return "not found";
    //         }
    //     }
    //     $input->save();
    //     return redirect('view_testimonys')->with('message','Data edited Sucessfully');
    // }

    public function delete($id)
    {       
        $data = Testimony::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }

        return redirect('view_testimonys')->with('message','Data moved to trash Sucessfully');
    }

    public function activestatus($id)
    {
        $input=Testimony::Find($id);
        if ($input->activestatus==1)
        {
            $input->activestatus=0;
        }
        else{
            $input->activestatus=1;
        }
        $input->save();
        return redirect('view_testimonys');
    }

    public function recyclebin()
    {
        $records= Testimony::onlyTrashed()->get();
        return view('backend.testimony.recyclebin',compact('records'));
    }

    public function restore($id)
    {       
        $data = Testimony::withTrashed()->find($id);
        // $data->deletestatus='0';
        // $data->save();
        if(!is_null($data))
        {
            $data->restore();
        }

        return redirect('view_testimonys')->with('message','Data restored Sucessfully');
    }

    public function forcedelete($id)
    {       
        $data = Testimony::withTrashed()->find($id);
        // $data->save();
        $image=$data['image'];
       
        // $deleteimage=$image->getClientOriginalName();

   

        $path=storage_path('app\public\\').$image;

        if(File::exists($path))
        {
            unlink($path);
        }

        else
        {
            return "not found";
        }
        if(!is_null($data))
        {
            $data->forcedelete();
        }

    

        return redirect('view_testimonys')->with('message','Data deleted Sucessfully');
    }

    public function store(Request $request)
    {
     
        $validated = $request->validate([
            'client_name' => 'required',
            'testimony' => 'required',
            'client_number'=>'required',
            'image'=>'required',
            'position'=>'required',
            'activestatus'=>'required',
        ]);

        
        $data = $request->all();
        $input=new Testimony();
        $input->client_name=$data['client_name'];
        $input->testimony=$data['testimony'];
        $input->client_number=$data['client_number'];
        $input->position=$data['position'];
        $input->activestatus=$data['activestatus'];

        $image = $request->file('image');
        $image_name=$image->getClientOriginalName();
        $input->image=$image_name;
 
        $destinationPath = public_path('/thumbnail');
        $imgFile = Image::make($image->getRealPath());
        $imgFile->resize(200, 200);
		$imgFile->save($destinationPath.'/'.$image_name);
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['image']);
        $input->save();
        return redirect('view_testimonys')->with('message','Data added Sucessfully');    
    }

    public function edit($id)
    {
        $data = Testimony::find($id);  
        return view('backend.testimony.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'client_name' => 'required',
            'testimony' => 'required',
            'client_number'=>'required',
            'position'=>'required',
            'activestatus'=>'required',
        ]);
        $input= Testimony::find($id);
        // return $request->all();
        $deleteimage=$input['image'];
        $data = $request->all();
        $input->client_name=$data['client_name'];
        $input->testimony=$data['testimony'];
        $input->client_number=$data['client_number'];
        $input->position=$data['position'];
        $input->activestatus=$data['activestatus'];
       
        if(is_null($request->image))
        {
            $input->image=$input->image;
        }
        else
        {
            $image = $request->file('image');
            $image_name=$image->getClientOriginalName();
            $input->image=$image_name;
     
            $destinationPath = public_path('/thumbnail');
            $imgFile = Image::make($image->getRealPath());
            $imgFile->resize(200, 200);
            $imgFile->save($destinationPath.'/'.$image_name);
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $input['image']);
    
            $path1=public_path('/thumbnail//').$deleteimage;
            $path2=public_path('/uploads//').$deleteimage;
    
            if(File::exists($path1) && File::exists($path1))
            {
                unlink($path1);
                unlink($path2);
            }

            else
            {
                return "not found";
            }
        }
        $input->save();
        return redirect('view_testimonys')->with('message','Data edited Sucessfully');
    }
}
