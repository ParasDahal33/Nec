@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer')

@section('content')


<div class="panel panel-default container">
          <div class="panel-heading">
            <h3 class="m-y-0">Record of  {{ $record->member_name }} </h3>
          </div>
          <div class="panel-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body">
                                    <p class="card-text">Name : {{ $record->member_name }}</p>
                                    <p class="card-text">Role : {{ $record->role }}</p>
                                    <p class="card-text">Facebook : {{ $record->facebook }}</p>
                                    <p class="card-text">Linkedin : {{ $record->linkedin }}</p>
                                    <p class="card-text">Pinterest : {{ $record->pinterest }}</p>
                                    <p class="card-text">Twitter : {{ $record->twitter }}</p>
                                    <p class="card-text">Contact : {{ $record->contact }}</p>
                                    <p class="card-text">Email : {{ $record->email }}</p>
                                    <p class="card-text">Position : {{ $record->position }}</p>
                    </div>
               
                </div>
            </div>
          </div>
</div> 


        

@endsection

