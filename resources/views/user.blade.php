@extends('layouts.app')
@section('title', 'List User')

@section('content')
    <div class="container my-5 w-50">
        <div class="my-3">
            @include('layouts.errors')
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $usr)
                        <tr>
                            <td>{{ $usr->name }}</td>
                            <td>{{ $usr->email }}</td>
                            <td><a href="{{ url('/delete/id='.$usr->id) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection