@extends("layouts.main")

@section("content")
{{-- 17agustus --}}
@foreach($galeri as $gal)

<div class="my-4">
  <div class="container d-inside">
    <div class="col-md-6"></div>
      {{-- <div class="row gy-5 "> --}}

        {{-- <div class="col-3 p-3 "> --}}
          <div class="card shadow ">
            <img src="storage/{{ $gal->gambar}}" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-between align-items-start">
              <h5 class="card-title">{{ $gal->kegiatan }}</h5>
              {{-- <button type="button" data-bs-target="#card-info" data-bs-toggle="modal" class="btn  btn-primary btn-sm d-flex align-items-center ml-3" style="padding:.25rem .5rem; border-radius:.2rem;"><i class="bi bi-eye"></i></button> --}}
            </div>
          </div>
        </div>

      </div>

  </div>
  @endforeach



@endsection