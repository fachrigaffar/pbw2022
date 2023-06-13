@extends('layouts/main')

@section('container')

@auth
    <small></small>
@else
    <div class="alert alert-dark" role="alert">
        Maaf anda belum login. <a href="/login" class="alert-link">klik disini</a> untuk melakukan login.
    </div>
@endauth

<h2 class="mt-5 text-capitalize">Daftar Post</h2>

    @foreach ($post as $view)
    <div class="album mt-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('storage/' . $view->image) }}" class="card-img-top" alt="{{  $view->title  }}">
                        <div class="card-body">
                            <h4 class="card-title">{{ $view->title }}</h4>
                            <p class="card-text">{{ $view->body }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection