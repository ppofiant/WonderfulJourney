@extends('layouts.app')
@section('title', 'List User')

@section('content')
<div class="container my-5 w-50">
    <a href="{{ url('/blog/add') }}" class="btn btn-secondary" role="button">+ Create Blog</a>

    <div class="my-3">
        @include('layouts.errors')
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scop="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($articles); $i++)
                    <tr>
                        <td><a href="{{ url('articles/id='.$articles[$i]->id) }}">{{ $articles[$i]->title }}</a></td>
                        <td><a href="{{ url('articles/remove/id='.$articles[$i]->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection