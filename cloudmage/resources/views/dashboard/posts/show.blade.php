@extends('dashboard.layouts.main')

@section('container')
<div class="card mt-5" style="width: 15rem;">
    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{  $post->title  }}">
    <div class="card-body">
        <h4 class="card-title">{{ $post->title }}</h4>
        <p class="card-text">{{ $post->body }}</p>
    </div>
</div>

<a href="/dashboard/posts/" class="btn btn-primary mt-3">Back</a>
@endsection