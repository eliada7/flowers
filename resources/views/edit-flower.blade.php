@extends('myTemplate');

@section('title', 'Edit Flower')

@section('content')

    <h2>Edit Flower</h2>
    <form method="post" class="form">
        @csrf

        @method('PUT')
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name" value="{{ $flower->name }}"><br>

        <label for="price">Price</label>
        <input type="text" name="price" id="price" placeholder="Price" value="{{ $flower->price }}"><br>

        <input type="submit" value="Update">
    </form>

@endsection
