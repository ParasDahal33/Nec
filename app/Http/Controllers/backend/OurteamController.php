<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ourteam;
use Illuminate\Support\Facades\File;
use Image;

class OurteamController extends Controller
{
    public function create()
    {
       return view('backend.ourteam.create');
      
    }

    public function edit($id)
    {
        $data = Ourteam::find($id);  
        return view('backend.ourteam.edit',compact('data'));
    }

     
    public function view($id)
    {
        $record=Ourteam::find($id);
        return view('backend.ourteam.view',compact('record'));
      
    }

    public function store(Request $request)
    {
     
        $validated = $request->validate([
            'member_name' => 'required',
            'member_role' => 'required',
            'contact'=>'required',
            'email'=>'required',
            'position'=>'required',
            'activestatus'=>'required',
        ]);

        $data = $request->all();
        $input=new Ourteam();
        $input->member_name=$data['member_name'];
        $input->member_role=$data['member_role'];
        $input->contact=$data['contact'];
        $input->position=$data['position'];
        $input->email=$data['email'];
        $input->activestatus=$data['activestatus'];

        $data = $request->all();

        if(!isset($data['facebook']))
        {
            $input->facebook="https://www.facebook.com/";
        }
        else{
            $input->facebook=$data['facebook'];
        }

        if(!isset($data['linkedin']))
        {
            $input->linkedin="https://www.linkedin.com/signup";
        }
        else{
            $input->linkedin=$data['linkedin'];
        }

        if(!isset($data['pinterest']))
        {
            $input->pinterest="https://www.pinterest.com/";
        }
        else{
            $input->pinterest=$data['pinterest'];
        }

        if(!isset($data['twitter']))
        {
            $input->twitter="https://twitter.com/?lang=en";
        }
        else{
            $input->twitter=$data['twitter'];
        }

        // $image=$request->file('image');
        // $image_name=$image->getClientOriginalName();
        // $input->image=$image_name;
        // $input->save();


        $image = $request->file('image');
        $image_name=$image->getClientOriginalName();
        $input->image=$image_name;
 
        $destinationPath = public_path('/storage/team_members');
        $imgFile = Image::make($image->getRealPath());
        $imgFile->resize(200, 200);
		$imgFile->save($destinationPath.'/'.$image_name);
        $input->save();

        
        return redirect('view_team_members')->with('message','Data added Sucessfully');
        
    }
    
    public function viewmembers()
    {
        $data= Ourteam::all();

        if(count($data)==0)
        {
            $records= Ourteam::all();
            return view('backend.ourteam.view_team_members',compact('records'));
        }
        else{
            $records=[[]];
        
            for($i=0;$i<count($data);$i++)
            {
                $a=count($data)-1-$i;
                $records[$i]=$data[$a];
                
            }
            return view('backend.ourteam.view_team_members',compact('records'));
        }
    }

    public function activestatus($id)
    {
        $input=Ourteam::Find($id);
        if ($input->activestatus==1)
        {
            $input->activestatus=0;
        }
        else{
            $input->activestatus=1;
        }
        $input->save();
        return redirect('view_team_members');
    }
    
    public function position_update(Request $request,$id)
    {
     
        $validated = $request->validate([
        
            'position'=>'required',
            
        ]);
        $input= Ourteam::find($id);
        $input->position=$request['position'];
        $input->save();
        return redirect('view_team_members')->with('message','Position Updated');
        
    }

    public function update(Request $request,$id)
    {

        $validated = $request->validate([
            'member_name' => 'required',
            'member_role' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'pinterest' => 'required',
            'contact'=>'required',
            'email'=>'required',
            'position'=>'required',
            'activestatus'=>'required',
        ]);
        $input= Ourteam::find($id);
        $deleteimage=$input['image'];
        $data = $request->all();
        $input->member_name=$data['member_name'];
        $input->member_role=$data['member_role'];
        $input->contact=$data['contact'];
        $input->position=$data['position'];
        $input->email=$data['email'];
        $input->activestatus=$data['activestatus'];
        $input->facebook=$data['facebook'];
        $input->twitter=$data['twitter'];
        $input->pinterest=$data['pinterest'];
        $input->linkedin=$data['linkedin'];

        if(is_null($request->image))
        {
            $input->image=$input->image;
        }
        else
        {
            $image = $request->file('image');
            $image_name=$image->getClientOriginalName();
            $input->image=$image_name;
     
            $destinationPath = public_path('/storage/team_members');
            $imgFile = Image::make($image->getRealPath());
            $imgFile->resize(200, 200);
            $imgFile->save($destinationPath.'/'.$image_name);
    
            $path1=public_path('/storage/team_members//').$deleteimage;
      
    
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
        return redirect('view_team_members')->with('message','Data edited Sucessfully');
    }

    public function delete($id)
    {       
        $data = Ourteam::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }

        return redirect('view_team_members')->with('message','Data moved to trash Sucessfully');
    }

    public function recyclebin()
    {
        $records= Ourteam::onlyTrashed()->get();
        return view('backend.ourteam.recyclebin',compact('records'));
    }

    public function restore($id)
    {       
        $data = Ourteam::withTrashed()->find($id);
        if(!is_null($data))
        {
            $data->restore();
        }

        return redirect('view_team_members')->with('message','Data restored Sucessfully');
    }

    public function forcedelete($id)
    {       
        $data = Ourteam::withTrashed()->find($id);
        if(!is_null($data))
        {
            $data->forcedelete();
        }
        $image=$data['image'];
       
        // $deleteimage=$image->getClientOriginalName();

   

        $path=storage_path('app\public\team_members\\').$image;

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

    
        return redirect('view_teams_members')->with('message','Data deleted Sucessfully');
    }

}

