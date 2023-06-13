@extends('layouts/main')

@section('container')
<div class="row mt-5 gx-5">
    <div class="col ms-5 mt-5">
        <h1 class="mt-5 text-capitalize">Post your image with</h1>
        <h1 class="mt-1">CloudMage.</h1>
        <p class="mt-3 col-lg-8">
            Welcome to Cloudmage, website penyedia layanan simpan gambar  
        </p>
        <a class="btn btn-primary mt-3" href="/register" role="button">Get Started!</a>
    </div>
    <div class="col">
        <img src="/img/cloud.jpg" alt="home" class="w-100">
    </div>
</div>
@endsection