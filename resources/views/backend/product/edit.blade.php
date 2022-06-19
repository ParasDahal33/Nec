@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer')

@section('content')
	

        <div class="panel panel-default container">
          <div class="panel-heading">
            <h3 class="m-y-0">Edit</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
              <form class="form-horizontal" action="{{url('update/'.$data['id'])}}" id="myform" method="post" enctype="multipart/form-data">
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
                      <input id="form-control-1" placeholder="enter title" name="title" class="form-control" value="{{$data['title']}}" type="text">
                    </div>
                  </div>    
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Description</label>
                    <div class="col-sm-9">
                      <!-- <input id="form-control-4" name="description" class="form-control" type="text" value=""> -->
                      <textarea name="description" form="myform" placeholder="enter description" id="description">{{$data['description']}}</textarea>
                      <span>@error('Description'){{$message}}@enderror</span>
                    </div>
                  </div>

                

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Client</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="client" class="form-control" placeholder="enter client" value="{{$data['client']}}" type="text" value="">
                      <span>@error('client'){{$message}}@enderror</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Deadline</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" value="{{$data['deadline']}}" name="deadline" placeholder="enter deadline" class="form-control" type="date" value="">
                      <span>@error('deadline'){{$message}}@enderror</span>
                    </div>
                  </div>



                  <!-- <input  name="deletestatus" type="text" hidden="hidden" value='1'> -->
                  <input  name="activestatus" type="text" hidden="hidden" value="{{$data['activestatus']}}">                             
                

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Image</label>
                    <div class="col-sm-9">
                    
                      <img src="{{asset('/storage/projects').'/'.$data['image']}}" height='50px' width='50px' alt='profile'>
                      <input id="form-control-4" name="image" class="form-control" type="file" value="">
                      <!-- <span>@error('deadline'){{$message}}@enderror</span> -->
                    </div>
                  </div> 

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Position</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="position" placeholder="enter position" class="form-control" value="{{$data['position']}}" type="number" value="">
                      <span>@error('deadline'){{$message}}@enderror</span>
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

