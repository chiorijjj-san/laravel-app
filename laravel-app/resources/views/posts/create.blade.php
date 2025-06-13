@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Create a New Post</h3>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Body</label>
            <textarea name="body" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Post</button>
    </form>
</div>
@endsection