@extends('myTemplate');

@section('title', 'Flowers List')



@section('content')

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif

    @foreach ($flowers as $flower)
        <p>Name: {{ $flower->name }}</p>

        <p> Price: {{ $flower->priceWithEuro }}</p>
        <p> Created At: {{ $flower->created_at }}</p>
        <a href="/flowers/{{ $flower->id }}">Detail Page</a> /
        <a href="/flowers/update/{{ $flower->id }}">Update Flower</a> /
        <a href="/flowers/delete/{{ $flower->id }}">Delete Flower</a>

        <hr>
    @endforeach
@endsection
