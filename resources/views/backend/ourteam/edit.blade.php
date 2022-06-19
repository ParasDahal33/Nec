@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer')

@section('content')
	

        <div class="panel panel-default container">
          <div class="panel-heading">
            <h3 class="m-y-0">Edit Member</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
      

                <form class="form-horizontal" action="{{url($data['id'].'/update_member')}}" method="post" id="create-form" enctype="multipart/form-data">
                @csrf
                @if($errors->any())
                <div class="alert alert-danger">
                  @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </div>
                @endif
                  @csrf
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Member Name</label>
                    <span>@error('member_name'){{$message}}@enderror</span>
                    <div class="col-sm-9">
                      <input id="form-control-1" name="member_name" class="form-control" placeholder="enter Member name" value="{{ $data['member_name'] }}" type="text">
                    </div>
                  </div>   
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Facebook</label>
                    <span>@error('facebook'){{$message}}@enderror</span>
                    <div class="col-sm-9">
                      <input id="form-control-1" name="facebook" class="form-control" placeholder="enter facebook link" value="{{ $data['facebook'] }}" type="text">
                    </div>
                  </div> 

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Twitter</label>
                    <span>@error('twitter'){{$message}}@enderror</span>
                    <div class="col-sm-9">
                      <input id="form-control-1" name="twitter" class="form-control"placeholder="enter twitter link" value="{{ $data['twitter'] }}" type="text">
                    </div>
                  </div> 

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Linkedin</label>
                    <span>@error('linkedin'){{$message}}@enderror</span>
                    <div class="col-sm-9">
                      <input id="form-control-1" name="linkedin" class="form-control" placeholder="enter linkedin link" value="{{ $data['linkedin'] }}" type="text">
                    </div>
                  </div> 

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Pinterest</label>
                    <span>@error('pinterest'){{$message}}@enderror</span>
                    <div class="col-sm-9">
                      <input id="form-control-1" name="pinterest" class="form-control" placeholder="enter pinterest link" value="{{ $data['pinterest'] }}" type="text">
                    </div>
                  </div> 
 
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Organization Role</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="member_role" placeholder="enter organization link" class="form-control" value="{{ $data['member_role']}}" type="text" >
                      <span>@error('member_role'){{$message}}@enderror</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Contact</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" value="{{ $data['contact'] }}" placeholder="enter contact number" name="contact" class="form-control" type="text" >
                      <span>@error('contact'){{$message}}@enderror</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Email</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" value="{{ $data['email'] }}" name="email"  placeholder="enter email"class="form-control" type="text" >
                      <span>@error('email'){{$message}}@enderror</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Image</label>
                    <div class="col-sm-9">
                    
                      <img src="{{asset('/storage/team_members').'/'.$data['image']}}" height='50px' width='50px' alt='profile'>
                      <input id="form-control-4" name="image" class="form-control" type="file" value="">
                      <!-- <span>@error('deadline'){{$message}}@enderror</span> -->
                    </div>
                  </div> 

                  <input  name="activestatus" type="text" hidden="hidden" value="{{ $data['activestatus'] }}">
                            
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Position</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="position" class="form-control" placeholder="enter position" value="{{$data['position'] }}" type="number" value="">
                      <span>@error('position'){{$message}}@enderror</span>
                    </div>
                  </div>



                  <div class="form-group">
                  <span class="input-group-btn">
                          <input type="submit" value="Save" class="btn btn-primary">
                  </span>
                  </div>

                 
              
                </form>
              </div>
            </div>
          </div>
</div> 
@endsection

