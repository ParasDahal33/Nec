@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer')

@section('content')

<div class="panel panel-default container">
          <div class="panel-heading">
            <h3 class="m-y-0">Create Skill</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
              <form class="form-horizontal" action="{{url('/store_skillname')}}" method="post" id="create-form" enctype="multipart/form-data">
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
                    <label class="col-sm-3 control-label" for="form-control-1">Skill Name</label>
                    <div class="col-sm-9">
                      <input id="form-control-1" name="skillname" class="form-control"placeholder="enter skill name" value="{{ old('skillname') }}" type="text">
                    </div>
                  </div>   
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Skill percentage</label>
                    <div class="col-sm-9">
                      <input id="form-control-1" name="skillpercentage" placeholder="enter skill percentage" class="form-control" min="0" max="100" value="{{ old('skillpercentage') }}" type="number">
                    </div>
                  </div>   

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Position</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="position" placeholder="enter position" class="form-control" value="{{ old('position') }}" type="number" value="">
                    </div>
                  </div>

                  <input  name="activestatus" type="text" hidden="hidden" value='1'>

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