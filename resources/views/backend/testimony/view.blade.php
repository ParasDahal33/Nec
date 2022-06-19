@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer')

@section('content')


<div class="panel panel-default container">
          <div class="panel-heading">
            <h3 class="m-y-0">Record of  {{ $record->title }} </h3>
          </div>
          <div class="panel-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body">
                    <p class="card-text">Name : {{ $record->client_name }}</p>
                                    <?php  echo"<p class='card-text'>Testimony". $record->testimony."</p>"?>
                                    <p class="card-text">clinet number : {{ $record->clinet_number }}</p>
                                    <p class="card-text">Position : {{ $record->position }}</p>
                                    <p><img src="{{asset('/thumbnail').'/'.$record->image}}" height='100px' width='100px' alt='profile'></p>
                                   
                                </p>
                    </div>
               
                </div>
            </div>
          </div>
</div> 


        

@endsection

