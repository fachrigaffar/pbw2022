@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/posts/{{ $post->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="text" class="form-label ">Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="text" required value="{{ old('title', $post->title) }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label ">Post Image</label>
            <input type="hidden" name="oldImage" value="{{ $post->image }}">
            @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-1 col-sm-3 d-block">
            @else
            <img class="img-preview img-fluid mb-1 col-sm-3">
            @endif
            <br>
            <small>Max file size is 1 Mb</small>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
            name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <textarea type="text" name="body" class="form-control @error('body') is-invalid @enderror" value="{{ old('body', $post->body) }}" id="status" rows="3"></textarea>
            @error('body')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
             @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit Post</button>
        <a href="/dashboard/posts/" class="btn btn-primary">Back</a>
    </form>
</div>
<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection