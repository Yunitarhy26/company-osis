@extends('layouts.app', ['title' => 'Tambah Gambar'])



@section('content')
<br>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Tambah Gambar</div>

            <div class="card-body">
                <form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="gambar">gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control form-control-file">

                        @error('gambar')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kegiatan">Kegiatan</label>
                        <input type="text" name="kegiatan" id="kegiatan" class="form-control" value="{{ old('kegiatan') }}">

                        @error('kegiatan')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Kegiatan</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal') }}">

                        @error('tanggal')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop


