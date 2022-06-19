@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer')

@section('content')


<div class="panel panel-default container">
          <div class="panel-heading">
            <h3 class="m-y-0">Create Contact detail</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
              <div align='center'>
                <form class="form-horizontal" id="myform" action="{{url('/store_contactdetail')}}" method="post" enctype="multipart/form-data">
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
                        $value1=$data['phone'];
                        $value2=$data['email'];
                        $value3=$data['address'];
                      }
                      else
                      {
                        $value1=old('phone');
                        $value2=old('email');
                        $value3=old('address');
                      }
                      ?>

                                       
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Phone</label>
                    <div class="col-sm-9">
                      
                      <input id="form-control-4" name="phone" class="form-control" placeholder="enter phone number" type="text" value="{{ $value1 }}">
                      <!-- <input id="form-control-4" name="phone" type="text" class="form-control"   value="{{ $value1 }}"> -->
                    </div>
                  </div>

                                          
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Email</label>
                    <div class="col-sm-9">
                      
                    <input id="form-control-4" name="email" class="form-control" placeholder="enter email" type="email" value="{{ $value2 }}">
                                          <!-- <input id="form-control-4" name="phone" type="text" class="form-control"   value="{{ $value1 }}"> -->
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Address</label>
                    <div class="col-sm-9">
                      
                    <input id="form-control-4" name="address" class="form-control" placeholder="enter address" type="text" value="{{ $value3 }}">
                                          <!-- <input id="form-control-4" name="phone" type="text" class="form-control"   value="{{ $value1 }}"> -->
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