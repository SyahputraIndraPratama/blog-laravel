@extends('layout')

@section('title')
    Blog
@endsection

@push('addons-css')
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $item)
                <div class="col-sm-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                            <a href="{{ url('detail-blog/' . $item->id) }}" class="btn btn-primary">Detail</a>
                            <a href="{{ url('edit-blog/' . $item->id) }}" class="btn btn-warning">Ubah</a>
                            <a href="{{ url('hapus-blog/' . $item->id) }}"
                                onclick="return confirm('apakah yakin menghapus blog ini?')"
                                class="btn btn-danger">Hapus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('addons-js')
@endpush
