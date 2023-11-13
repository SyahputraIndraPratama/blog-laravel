@extends('layout')

@section('title')
    Tambah Blog
@endsection

@push('addons-css')
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <form action="{{ url('simpanblog') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Judul</label>
                        <input type="text" value="{{ old('judul') }}" name="judul"
                            class="form-control @error('judul') is-invalid @enderror">
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Kategori</label>
                        <select name="kategori" class="form-control @error('kategori') is-invalid @enderror" id="">
                            <option value=" ">-- Kategori --</option>
                            <option {{ old('kategori') == 'blog' ? 'selected' : '' }} value="blog">blog</option>
                            <option {{ old('kategori') == 'pemrograman' ? 'selected' : '' }} value="pemrograman">pemrograman
                            </option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('addons-js')
@endpush
