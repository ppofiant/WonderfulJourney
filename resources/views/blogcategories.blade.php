@extends('layouts.app')
@section('title', 'Blog - Categorize')

@section('dropdownCategory')
    @foreach ($categories as $category)
        <a class="dropdown-item" href="{{ url('/articles/categories='. $category->id) }}">{{ $category->name }}</a>
    @endforeach
@endsection

@section('content')
    @if (count($articles) > 0)
        <h1 class="container my-5 ml-1">Categories : {{ $articles[0]->categories->name }}</h1>    
        <div class="container mb-5 d-flex flex-wrap justify-content-start align-items-center">
            @if(count($articles) > 0)
                @foreach ($articles as $article)
                    <div class="box m-2">
                        <h2>{{ $article->title }}</h2>
                        <p>{{ $article->description }}<a href="{{ url('/articles/id='.$article->id) }}"><i> full story</i></a></p>
                        <i class="boxI">Category: <a href="{{ url('/articles/categories='. $article->categories->id) }}">{{ $article->categories->name }}</a></i>
                    </div>
                @endforeach
            @endif
        </div>
    @else
        <h1 class="container my-5 ml-1">No Blog Exist</h1>
    @endif
@endsection