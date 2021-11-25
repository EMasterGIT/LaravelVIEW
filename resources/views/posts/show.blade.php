@extends('layout')
@section('title', 'Posts')
@section('content')
    <form action="{{ route('posts.update', ['post'=> $post->id] ) }}" method="POST">
        @method('PUT')
        @csrf
        @error('title')
        @foreach($errors->get('title') as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
        @enderror
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <output type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{old('title') ?? $post->title}}">

        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea class="form-control" id="body" rows="10" name="body">{{old('body') ??  $post->body}}</textarea>

    </form>
@endsection
