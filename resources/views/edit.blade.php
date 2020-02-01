@extends('layouts.main')

@section('content')

<div class="container">



<!-- Default form register -->
<form class="text-center border border-light p-5" action="{{ route('update', $result->id )}}" method="POST">
 {{ csrf_field()}}
    <p class="h4 mb-4">Edit Student Details</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="firstname"  value="{{ $result->first_name}}" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" name="lastname" value="{{ $result->last_name}}" placeholder="Last name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" name="email" value="{{ $result->email }}" placeholder="E-mail">



    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" name="phoneno" value="{{ $result->phone}}" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        
    </small>

 
      @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>            
        @endforeach


    @endif

    <!-- Submit button -->
    <button class="btn btn-primary my-4 btn-block" type="submit">Update</button>

    <!-- Social register -->
    <p>or sign up with:</p>

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

    <hr>

   

</form>
<!-- Default form register -->
</div>

@endsection