@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>

@if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create Post</a>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Image</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)    
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->image }}</td>
          <td>{{ $post->body }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-primary"><span data-feather="eye"></span></a>
            <a href="/dashboard/posts/{{ $post->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

            <form action="/dashboard/posts/{{ $post->id }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Delete data?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection