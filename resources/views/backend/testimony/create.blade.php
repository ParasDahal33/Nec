@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer')

@section('content')

<div class="panel panel-default container">
          <div class="panel-heading">
            <h3 class="m-y-0">Create testimony</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
                <form class="form-horizontal" action="{{url('/store_testimony')}}" method="post" id="create-form" enctype="multipart/form-data">
                <!-- <form action="{{route('resizeImage')}}" method="post" enctype="multipart/form-data"> -->

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
                    <label class="col-sm-3 control-label" for="form-control-1">Client Name</label>
                    <div class="col-sm-9">
                      <input id="form-control-1" placeholder="enter name" name="client_name" class="form-control" value="{{ old('client_name') }}" type="text">
                    </div>
                  </div>    
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Testimony</label>
                    <div class="col-sm-9">              
                      <textarea rows="4" id="description" placeholder="enter testimony..." class="form-control"   name="testimony" id="form-control-4" value="{{ old('testimony') }}" form="create-form" >{{ old('description') }}</textarea>   
                    </div>
                  </div>

                

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Client_number</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="client_number"  placeholder="enter client number"class="form-control" value="{{ old('client_number') }}" type="text" value="">
                    </div>
                  </div>

                 
                  <input  name="activestatus" type="text" hidden="hidden" value='1'>
                             
                 
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Position</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="position" placeholder="enter position" class="form-control" value="{{ old('position') }}" type="number" value="">
        
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Profile</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="image" class="form-control" type="file" value="">
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