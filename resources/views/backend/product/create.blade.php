@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer')

@section('content')

<div class="panel panel-default container">
          <div class="panel-heading">
            <h3 class="m-y-0">Create</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
                <form class="form-horizontal" action="{{url('/create')}}" method="post" id="create-form" enctype="multipart/form-data">
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
                    <label class="col-sm-3 control-label" for="form-control-1">Title</label>
                    <span>@error('title'){{$message}}@enderror</span>
                    <div class="col-sm-9">
                      <input id="form-control-1" name="title" placeholder="enter title" class="form-control" value="{{ old('title') }}" type="text">
                    </div>
                  </div>    
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Description</label>
                    <div class="col-sm-9">
                      
                      <!-- <input id="form-control-4" name="description" class="form-control" type="text" value=""> -->
                      <textarea rows="4" id="description" name="description" placeholder="enter description" class="form-control"   name="description" id="form-control-4" value="{{ old('description') }}" form="create-form" >{{ old('description') }}</textarea>
                      <span>@error('Description'){{$message}}@enderror</span>
                    </div>
                  </div>

                

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Client</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="client" class="form-control" placeholder="enter client" value="{{ old('client') }}" type="text" value="">
                      <span>@error('client'){{$message}}@enderror</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Deadline</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" value="{{ old('deadline') }}" placeholder="enter deadline" name="deadline" class="form-control" type="date" value="">
                      <span>@error('deadline'){{$message}}@enderror</span>
                    </div>
                  </div>

                  <input  name="activestatus" type="text" hidden="hidden" value='1'>
                             
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Image</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="image" class="form-control" type="file" value="">
                      <!-- <span>@error('image'){{$message}}@enderror</span> -->
                    </div>
                  </div> 

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