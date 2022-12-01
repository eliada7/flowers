@extends('myTemplate');

@section('title', 'Registraion Form')



@section('content')

<p><h1>Registration</h1></p>

<form method="post" class="form">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Name"><br><br>

    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="email"><br><br>

    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="password">Password</label>
    <input type="text" name="password" id="password" placeholder="password"><br><br>

    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="submit" value="Register">
</form>





@endsection