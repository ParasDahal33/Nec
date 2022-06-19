@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer')

@section('content')


<div class="panel panel-default container">
          <div class="panel-heading">
            <h3 class="m-y-0">Create Description</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
              <div align='center'>
                <form class="form-horizontal" id="myform" action="{{url('/store_aboutus')}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($errors->any())
                <div class="alert alert-danger">
                  @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </div>
                @endif
                  @csrf                
 

                    <?php if (isset($data))
                      {
                        $value=$data['aboutus'];
                      }
                      else
                      {
                        $value=old('aboutus');
                      }
                      ?>

                                       
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">About us</label>
                    <div class="col-sm-9">
                      
                      <!-- <input id="form-control-4" name="description" class="form-control" type="text" value=""> -->
                      <textarea id="description" name="aboutus" class="form-control" placeholder="enter about us....." form="myform" >{{ $value }}</textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Image</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" name="image" class="form-control" type="file" value="">
                      <!-- <span>@error('image'){{$message}}@enderror</span> -->
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


