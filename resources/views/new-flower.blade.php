@extends('myTemplate')

@section('title', 'Create New Flower')

@section('content')
    <h2>New Flower</h2>
    <form method="post" class="form">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name"><br>

        <label for="price">Price</label>
        <input type="text" name="price" id="price" placeholder="Price"><br>

        <input type="submit" value="Insert">
    </form>




@endsection
