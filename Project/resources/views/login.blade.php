@extends('layoutLoginReg')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

<form class="form bg-white p-6 border-1" method="POST" action="{{ route('users.login') }}">
    @csrf
<!-- Prevents attack -- Needed in forms -- Otherwise Errors -->
    <div>
        <label class="text-sm" for="name">User Name</label>
        <input class="text-lg border-1" type="text" id="name" value="{{ old('name') }}" name="name">
       <!-- <input class="text-lg border-1" type="text" id="name" name="name"> -->
        @error('name')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="password">Password</label>
        <input class="text-lg border-1" type="password" id="password" name="password"  value="{{ old('password') }}">
       <!--  <input class="text-lg border-1" type="text" id="brand" name="brand"> -->
        @error('password')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
   
    <div>
        <button class=" border-1" type="submit">Login</button>
       <!--  <button class=" border-1" type="button" onclick="window.location={{route('register.index')}}">Register</button> -->
        <button class=" border-1" type="button" onclick="window.location='{{ URL::route('register.index'); }}'">Register</button>

    </div>
    <div>
        <!-- <button class=" border-1" type="submit">Register</button> -->
        

    </div>
</form>

@if(isset($errorMessageDuration))
         <div class="alert alert-danger">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             {{ $errorMessageDuration }}
            
         </div>
@endif


        
</div>
@endsection