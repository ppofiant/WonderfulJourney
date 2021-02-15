@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h2 class="my-2 text-center"><strong>{{ $articles->title }}</strong></h2>
        <div class="images">
            <img class="imageArticles img-fluid mx-auto rounded" src="{{ asset('storage/images/articles/'.$articles->image) }}" alt="{{ $articles->image }}">
        </div>
        <p class="my-3 mx-auto w-75">{{ $articles->description }}</p>

        <p class="my-3 mx-auto w-75">
            <button onclick="goBack()" class="btn btn-secondary">Back</button>
            @if (Auth::user())
                @if ($articles->user_id == Auth::user()->id || Auth::user()->role == "admin")
                    <a href="{{ url('articles/delete/id='.$articles->id) }}" class="btn btn-danger">Delete</a>
                @endif
            @endif
        </p>
    </div>
@endsection