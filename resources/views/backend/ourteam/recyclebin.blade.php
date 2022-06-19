@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer') 
@section('content')


<div class="panel panel-default panel-table container">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">Deleted Member Details</h3>
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
                    <th>Name</th>
                    <th>Role</th>
                    <th>Contact</th>
                    <th>Image</th>
                    <th>position </th>
                    <th>Active Status</th>
                    <th>Operation</th>
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
                <td>{{ $item->member_name }}</td>
                <td>{{ $item->member_role}}</td>
                <td>{{ $item->contact }}</td>

                <td><img src="{{asset('/storage/team_members').'/'.$item->image}}" height='50px' width='50px' alt='profile'><br></td>            

                <td>
                  <form method="post" action="{{url($item->id .'/position_update_member')}}"  >
                  @csrf
                      <input  type="number" name="position" value="{{ $item->position  }}" >
                      <span>
                          <input type="submit" value="Save" class="btn btn-sm btn-warning"><br>
                  </span>
                  <span>@error('position'){{$message}}@enderror</span>
                    </div>
                  </form>
                </td>


                <td>   
                  <?php
                  if ($item['activestatus']=='1'){
                  ?>
                                <a href="{{ url($item->id .'/activestatus_member')}}" align='center' class="btn btn-success btn-sm">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Active
                                </a></td>
                  <?php
                    }
                  else{
                  ?>
                                <a href="{{ url($item->id .'/activestatus_member') }}" class="btn btn-danger btn-sm">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Inactive
                                </a></td>
                  <?php
                    }
                  ?>
       
                <td>
                  <a href="{{ url($item->id . '/restore_member') }}" title="delete Student"><button class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Restore</button></a>
                  <a href="{{ url($item->id . '/forcedelete_member') }}" id="click" title="delete Student"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete</button></a>
                </tr>
                
                @endforeach

                
           
  

                </tbody>
               
              </table>
            </div>
          </div>
        </div>
   

<script>
  $('#click').on('click',function(e)
  {
    e.preventDefault();
    var self =$(this);
    console.log(self.data('title'));
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            // Swal.fire(
            //   'Deleted!',
            //   'Your file has been deleted.',
            //   'success'
            // )
            location.href=self.attr('href');
          }
      })
  
  })
  </script>

  

@endsection