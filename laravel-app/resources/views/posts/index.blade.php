@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">New Post</a>
    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-header">
                {{ $post->user->name }} - {{ $post->created_at->diffForHumans() }}
            </div>
            <div class="card-body">
                <h5>{{ $post->title }}</h5>
                <p>{{ Str::limit($post->body, 150) }}</p>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-outline-secondary">View Discussion</a>
            </div>
        </div>
    @endforeach
    {{ $posts->links() }}
</div>
@endsection