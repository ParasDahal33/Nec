<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Image;


class Formcontroller extends Controller
{
   

    public function create()
    {
       return view('backend.product.create');
      
    }
 
    public function view($id)
    {
        $record=Project::find($id);
        return view('backend.product.view',compact('record'));
      
    }


    public function viewprojects()
    {
        $data= Project::all();

        if(count($data)==0)
        {
            $records= Project::all();
            return view('backend.product.viewprojects',compact('records'));
        }
        else{
            $records=[[]];
        
            for($i=0;$i<count($data);$i++)
            {
                $a=count($data)-1-$i;
                $records[$i]=$data[$a];
                
            }
            return view('backend.product.viewprojects',compact('records'));
        }
    }

    public function position_update(Request $request,$id)
    {
     
        $validated = $request->validate([
        
            'position'=>'required',
            
        ]);
        $input= Project::find($id);
        $input->position=$request['position'];
        $input->save();
        return redirect('viewprojects')->with('message','Position Updated');
        
    }

    public function store(Request $request)
    {
     
    $validated = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'client'=>'required',
        'deadline'=>'required',
        'position'=>'required',
        'activestatus'=>'required',
        'image'=>'required',
    ]);

        
        $data = $request->all();
        $input=new Project();
        $input->title=$data['title'];
        $input->description=$data['description'];
        $input->client=$data['client'];
        $input->position=$data['position'];
        $input->deadline=$data['deadline'];
        $input->activestatus=$data['activestatus'];

        $image = $request->file('image');
        $image_name=$image->getClientOriginalName();
        $input->image=$image_name;
 
        $destinationPath = public_path('/storage/projects');
        $imgFile = Image::make($image->getRealPath());
        $imgFile->resize(500, 500);
		$imgFile->save($destinationPath.'/'.$image_name);
        $input->save();

     
        return redirect('viewprojects')->with('message','Data added Sucessfully');
        
    }

    public function edit($id)
    {
        $data = Project::find($id);  
        return view('backend.product.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'client'=>'required',
            'deadline'=>'required',
            'position'=>'required',
            'activestatus'=>'required',
        ]);
        $input= Project::find($id);
        // return $request->all();
        $deleteimage=$input['image'];
        $data = $request->all();
        $input->title=$data['title'];
        $input->description=$data['description'];
        $input->client=$data['client'];
        $input->position=$data['position'];
        $input->deadline=$data['deadline'];
        $input->activestatus=$data['activestatus'];
       


        // if(is_null($request->image))
        // {
        //     $input->image=$input->image;
        // }
        // else
        // {
        //     $image=$request->file('image');
        //     $image_name=$image->getClientOriginalName();
        //     $input->image=$image_name;
        //     $request->image->storeAs('public/projects',$image_name);

        //     $path=storage_path('app\public\projects\\').$deleteimage;
    
        //     if(File::exists($path))
        //     {
        //         unlink($path);
        //     }

        //     else
        //     {
        //         return "not found";
        //     }
        // }
        // $input->save();

        if(is_null($request->image))
        {
            $input->image=$input->image;
        }
        else
        {
            $image = $request->file('image');
            $image_name=$image->getClientOriginalName();
            $input->image=$image_name;
     
            $destinationPath = public_path('/storage/projects');
            $imgFile = Image::make($image->getRealPath());
            $imgFile->resize(500, 500);
            $imgFile->save($destinationPath.'/'.$image_name);
    
            $path1=public_path('/storage/projects//').$deleteimage;
      
    
            if(File::exists($path1) && File::exists($path1))
            {
                unlink($path1);
            }

            else
            {
                return "not found";
            }
        }
        $input->save();
        return redirect('viewprojects')->with('message','Data edited Sucessfully');
    }

    public function delete($id)
    {       
        $data = Project::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }

        return redirect('viewprojects')->with('message','Data moved to trash Sucessfully');
    }

    public function activestatus($id)
    {
        $input=Project::Find($id);
        if ($input->activestatus==1)
        {
            $input->activestatus=0;
        }
        else{
            $input->activestatus=1;
        }
        $input->save();
        return redirect('viewprojects');
    }

    public function recyclebin()
    {
        $records= Project::onlyTrashed()->get();
        return view('backend.product.recyclebin',compact('records'));
    }

    public function restore($id)
    {       
        $data = Project::withTrashed()->find($id);
        // $data->deletestatus='0';
        // $data->save();
        if(!is_null($data))
        {
            $data->restore();
        }

        return redirect('viewprojects')->with('message','Data restored Sucessfully');
    }

    public function forcedelete($id)
    {       
        $data = Project::withTrashed()->find($id);
        // $data->save();
        $image=$data['image'];
       
        // $deleteimage=$image->getClientOriginalName();

   

        $path=storage_path('app\public\projects\\').$image;

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

    

        return redirect('viewprojects')->with('message','Data deleted Sucessfully');
    }


}
