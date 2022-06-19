@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer')

@section('content')
	

        <div class="panel panel-default container">
          <div class="panel-heading">
            <h3 class="m-y-0">Edit Service</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
              <form class="form-horizontal" action="{{url('update_service/'.$data['id'])}}" id="myform" method="post" enctype="multipart/form-data">
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
                    <div class="col-sm-9">
                      <input id="form-control-1" name="title" class="form-control" placeholder="enter title" value="{{$data['title']}}" type="text">
                    </div>
                  </div>    
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Description</label>
                    <div class="col-sm-9">
                      <textarea name="description" form="myform"  placeholder="enter description" id="description">{{$data['description']}}</textarea>
                    </div>
                  </div>

                

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Icone</label>
                    <div class="col-sm-9">
                      <a href="https://icons.getbootstrap.com/" target="_blank" >Get Icon Class</a>
                      <input id="form-control-4" name="icon" class="form-control" placeholder="enter icone class" value="{{$data['icon']}}" type="text" value="">
                    </div>
                  </div>

                  <input  name="activestatus" type="text" hidden="hidden" value="{{$data['activestatus']}}">
            
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Position</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="position" placeholder="enter position" class="form-control" value="{{$data['position']}}" type="number" >
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

