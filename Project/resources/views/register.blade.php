@extends('layoutLoginReg')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

<form class="form bg-white p-6 border-1" method="POST" action="{{ route('users.store') }}">
    @csrf
<!-- Prevents attack -- Needed in forms -- Otherwise Errors -->
    <div>
        <label class="text-sm" for="name">Username</label>
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
        <label class="text-sm" for="email">Email</label>
        <input class="text-lg border-1" type="text" id="email" name="email"  value="{{ old('email') }}">
       <!--  <input class="text-lg border-1" type="text" id="brand" name="brand"> -->
        @error('email')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    
    <div>
        <button class=" border-1" type="submit">Submit</button>
    </div>
</form>
        
</div>
@endsection