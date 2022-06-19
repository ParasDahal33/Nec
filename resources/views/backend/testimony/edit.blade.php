@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer')

@section('content')
	

        <div class="panel panel-default container">
          <div class="panel-heading">
            <h3 class="m-y-0">Edit testimony</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
              <form class="form-horizontal" action="{{url('update_testimony/'.$data['id'])}}" id="myform" method="post" enctype="multipart/form-data">
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
                    <!-- <span>@error('client_name'){{$message}}@enderror</span> -->
                    <div class="col-sm-9">
                      <input id="form-control-1" placeholder="enter client name" name="client_name" class="form-control" value="{{$data['client_name']}}" type="text">
                    </div>
                  </div>    
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Testimony</label>
                    <div class="col-sm-9">
                      <!-- <input id="form-control-4" name="testimony" class="form-control" type="text" value=""> -->
                      <textarea name="testimony" form="myform" placeholder="enter testimony....." id="description">{{$data['testimony']}}</textarea>
                      <!-- <span>@error('testimony'){{$message}}@enderror</span> -->
                    </div>
                  </div>


                

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Client_number</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" placeholder="enter client number" name="client_number" class="form-control" value="{{$data['client_number']}}" type="text" value="">
                      <!-- <span>@error('client_number'){{$message}}@enderror</span> -->
                    </div>
                  </div>

                  <input  name="activestatus" type="text" hidden="hidden" value="{{$data['activestatus']}}">

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Image</label>
                    <div class="col-sm-9">
                    
                      <img src="{{asset('/thumbnail').'/'.$data['image']}}" height='50px' width='50px' alt='profile'>
                      <input id="form-control-4" name="image" class="form-control" type="file" value="">
                      <span>@error('deadline'){{$message}}@enderror</span>
                    </div>
                  </div> 
            
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Position</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" placeholder="enter position" name="position" class="form-control" value="{{$data['position']}}" type="number" value="">
                      <!-- <span>@error('positon'){{$message}}@enderror</span> -->
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

