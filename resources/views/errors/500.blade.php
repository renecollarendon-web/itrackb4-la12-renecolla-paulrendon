@extends('layouts.app')

@section('title', '500 - Server Error')

@section('content')
    <div class="text-center mt-5">
        <h1>Oops! Something went wrong.</h1>
        <p>"We're having a problem with our server. It's not your fault. Please try again later.".</p>
        <a href="{{ route('movies.index') }}" class="btn btn-secondary">Go back home</a>
    </div>
@endsection