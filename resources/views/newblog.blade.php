@extends('layouts.app')
@section('title', 'New Blog')

@section('content')
    <div class="container w-50 my-5">
        <h1 class="mb-3"><strong>New Blog</strong></h1>

        <form action="/blog/add" method="POST" enctype="multipart/form-data">
            @include('layouts.errors')
            @csrf

            <div class="form-group my-2">
                <label for="title"><strong>{{ __('Title:') }}</strong></label>

                <div>
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter Title" required autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group my-2">
                <label for="categoryId"><strong>{{ __('Category:') }}</strong></label>

                <div>
                    <select class="form-control" style="height: 40px; overflow-y: scroll;" id="categoryId" name="categoryId">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group my-2">
                <label for="photo"><strong>{{ __('Photo:') }}</strong></label>

                <div>
                    <input name="photo" id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" autofocus>

                    @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group my-2">
                <label for="story"><strong>{{ __('Story:') }}</strong></label>

                <div>
                    <textarea name="story" id="story" cols="30" rows="10" class="form-control @error('story') is-invalid @enderror"></textarea>

                    @error('story')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group my-2">
                <div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection