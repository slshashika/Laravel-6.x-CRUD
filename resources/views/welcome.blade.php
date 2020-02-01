@extends('layouts.main')

@section('content')


<div class="card">
  <div class="card-body"><center><h1>All Student Details</h1></center> </div></div>   

   <div class="container">
@if(session('successMsg'))

<div style="margin-top: 20px;" class="alert alert-success" role="alert">
 {{  session('successMsg')}}
</div>
@endif


<table class="table" style="margin-top: 20px;">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $student)
  
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->first_name }}</td>
      <td>{{ $student->last_name}}</td>
      <td>{{$student->email }}</td>
      <td>{{$student->phone}}</td>
      <td> <a class="btn btn-primary btn-sm" href="{{ route('edit', $student->id )}}"> <i class="fa fa-pencil"  aria-hidden="true"> Edit </i></a>
           &nbsp;&nbsp;&nbsp; 
           <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModel">
       <i class="fa fa-trash" aria-hidden="true"> Delete</i>
      </button>
 </td>
    </tr>
   @endforeach  
    
  </tbody>
</table>
{{$data->links()}}

<!-- Modal -->
<div class="modal fade" id="myModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">

  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Warning !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Are you sure ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Abourt</button>
       
       <a  href="{{ route('delete', $student->id )}}"> <button type="button" class="btn btn-danger"> Delete</button></a>
      </div>
    </div>
  </div>
</div>

</div>

@endsection