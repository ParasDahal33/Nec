@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer')

@section('content')

<div class="panel panel-default container">
          <div class="panel-heading">
            <h3 class="m-y-0">Create Member</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
              <form class="form-horizontal" action="{{url('/store_member')}}" method="post" id="create-form" enctype="multipart/form-data">
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
                      <input id="form-control-1" name="member_name" placeholder="enter membername" class="form-control" value="{{ old('member_name') }}" type="text">
                    </div>
                  </div>   
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Facebook</label>
                    <span>@error('facebook'){{$message}}@enderror</span>
                    <div class="col-sm-9">
                      <input id="form-control-1" name="facebook"  placeholder="enter facebook link" class="form-control" value="{{ old('facebook') }}" type="text">
                    </div>
                  </div> 

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Twitter</label>
                    <span>@error('twitter'){{$message}}@enderror</span>
                    <div class="col-sm-9">
                      <input id="form-control-1" name="twitter"  placeholder="enter twitter link" class="form-control" value="{{ old('twitter') }}" type="text">
                    </div>
                  </div> 

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Linkedin</label>
                    <span>@error('linkedin'){{$message}}@enderror</span>
                    <div class="col-sm-9">
                      <input id="form-control-1" name="linkedin"  placeholder="enter linkedin link" class="form-control" value="{{ old('linkedin') }}" type="text">
                    </div>
                  </div> 

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Pinterest</label>
                    <span>@error('pinterest'){{$message}}@enderror</span>
                    <div class="col-sm-9">
                      <input id="form-control-1" name="pinterest"  placeholder="enter pinterest link" class="form-control" value="{{ old('pinterest') }}" type="text">
                    </div>
                  </div> 
 
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Organization Role</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="member_role"  placeholder="enter organization role" class="form-control" value="{{ old('member_role') }}" type="text" >
                      <span>@error('member_role'){{$message}}@enderror</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Contact</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" value="{{ old('contact') }}"  placeholder="enter contact number" name="contact" class="form-control" type="text" >
                      <span>@error('contact'){{$message}}@enderror</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Email</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" value="{{ old('email') }}"  placeholder="enter email" name="email" class="form-control" type="email" >
                      <span>@error('email'){{$message}}@enderror</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Image</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="image" class="form-control" type="file" value="">
                      <!-- <span>@error('image'){{$message}}@enderror</span> -->
                    </div>
                  </div> 

                  <input  name="activestatus" type="text" hidden="hidden" value='1'>
                            
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Position</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="position" class="form-control" placeholder="enter position" value="{{ old('position') }}" type="number" value="">
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