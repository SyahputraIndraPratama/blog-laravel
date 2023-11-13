@extends('layout')

@section('title')
    Edit Blog
@endsection

@push('addons-css')
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h1>{{ $blog->judul }}</h1>
                <p>{{ $blog->deskripsi }}</p>
            </div>
        </div>
    </div>
@endsection

@push('addons-js')
@endpush
