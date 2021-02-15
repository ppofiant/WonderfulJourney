@extends('layouts.app')

@section('content')
    @include('layouts.errors')
    <div class="container my-5 d-flex flex-wrap justify-content-start align-items-center">
        @foreach ($articles as $article)
            <div class="box m-2">
                <h2>{{ $article->title }}</h2>
                <p>{{ $article->description }}<a href="{{ url('/articles/id='.$article->id) }}"><i> full story</i></a></p>
                <i class="boxI">Category: <a href="{{ url('/articles/categories='. $article->categories->id) }}">{{ $article->categories->name }}</a></i>
            </div>
        @endforeach
    </div>
@endsection
