@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-3">
        <div class="card-header">
            {{ $post->user->name }} - {{ $post->created_at->diffForHumans() }}
        </div>
        <div class="card-body">
            <h4>{{ $post->title }}</h4>
            <p>{{ $post->body }}</p>
        </div>
    </div>

    <h5>Comments</h5>
    @foreach ($post->comments as $comment)
        <div class="card mb-2">
            <div class="card-body">
                <strong>{{ $comment->user->name }}</strong>:
                <p>{{ $comment->body }}</p>
            </div>
        </div>
    @endforeach

    <form action="{{ route('comments.store', $post) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Add Comment</label>
            <textarea name="body" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Comment</button>
    </form>
</div>
@endsection