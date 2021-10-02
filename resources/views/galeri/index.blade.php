@extends('layouts.app', ['title' => 'Data Gambar'])


@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                
                <div class="navigation">
                    <nav class="navbar navbar-expand-lg  py-4" id="navbar">
                        <div class="container">
                          <a class="navbar-brand" href="/">

                          </a>
                
                          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fa fa-bars"></span>
                          </button>
                      
                          <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                            <ul class="navbar-nav ml-auto">
                              <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">beranda</a></li>
                              <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Tentang</a></li>
                              <li class="nav-item"><a class="nav-link" href="{{ url('/galery') }}">Galeri</a></li>
                              <li class="nav-item"><a class="nav-link" href="{{ url('/team') }}">tim</a></li>
                              <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">kontak</a></li>
                              {{-- <li class="nav-item active"><a class="btn btn-solid-border btn-round-full" href="{{ url('auth/login') }}">login</a></li> --}}
                          </div>
                        </div>
                   
                    <li>
                    <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                    </li>
                </nav>
                {{-- <div class="container"><h6>Data Gambar</h6></div> --}}
                </div>
            </div>

            <div class="card-body">
                
                

            <a href="{{ route('galeri.create') }}" class="btn btn-primary"><i class="fas fa-plus">Tambah</i></a>
            <br>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                           
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Kegiatan</th>
                           
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($galeri as $gal)
                        <tr>
                            
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="storage/{{ $gal->gambar}}" width="100px" height="100px">
                            </td>
                            <td>{{ $gal->kegiatan }}</td>
                            <td>{{ $gal->tanggal }}</td>
                            
                            <td>
                               

                                <form action="{{ route('galeri.destroy', $gal->id) }}" method="post" style="display: inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Gambar')"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

