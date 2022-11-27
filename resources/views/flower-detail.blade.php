@extends('myTemplate')

@section('title')
    {{ $flower->name }}
@endsection

@section('content')
    <p>{{ $flower->name }}</p>
    <p>{{ $flower->price }} $</p>
    <hr>
@endsection
