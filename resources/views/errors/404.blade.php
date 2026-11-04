@extends('layouts.app')

@section('title', '404 - Page Not Found')

@section('content')
    <div class="text-center mt-5">
        <h1>Page not found</h1>
        <p>Sorry, We couldn't find the page you're looking for.</p>
        <a href="{{ route('movies.index') }}" class="btn btn-primary">Back to the list</a>
    </div>
@endsection