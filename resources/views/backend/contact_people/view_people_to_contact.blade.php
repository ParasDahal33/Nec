@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer') 
@section('content')



<div class="panel panel-default panel-table container">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">People to contact Details</h3>
        
          </div>
          
          <div class="panel-body">
            <div align='center'>
              @if(session()->has('message'))
              <div class='alert alert-success'>
              {{session()->get('message')}}
            </div>
              @endif
            </div>
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Operations</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $count=0;  
                ?>   
               @foreach($records as $item) 

                <?php
                   
                      $count=$count+1;
                ?>
                <tr>
                  <input type="hidden" class="delete_record_id" value="{{ $item->id }}">
                <td>{{ $count }}</td>
                <td>{{ $item->fullname }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ url($item->id . '/delete_people_to_contact') }}" id="click" title="delete Student"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Move to trash</button></a>
                </td>
                </tr>
                
                @endforeach

                
           
  

                </tbody>
               
              </table>
            </div>
          </div>
        </div>
        
  

@endsection