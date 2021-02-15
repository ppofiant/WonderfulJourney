@extends('layouts.app')
@section('title', 'Success Login')

@section('content')
<div class="container my-5">
    <div class="my-2">
        <div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h2>Welcome {{ Auth::user()->name }}</h2>
        </div>
    </div>
</div>
@endsection