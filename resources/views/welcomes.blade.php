@extends('layouts.app')
@section('title', 'Wonderful Journey')

@section('dropdownCategory')
    @foreach ($categories as $category)
        <a class="dropdown-item" href="{{ url('/articles/categories='. $category->id) }}">{{ $category->name }}</a>
    @endforeach
@endsection


@section('content')
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