@extends("layouts.main")

@section("content")
  
  <section class="bg-image" style="background-image: url('{{ asset('img/bgsmk.jpg') }}'); height:40vh; background-position:bottom center;">
    <div class="d-flex flex-column align-items-center justify-content-center text-white h-100" style="background-color: rgba(0, 0, 0, 0.7);">
            <h3 class="fs-3 fw-bold text-decoration-underline">Anggota Osis</h3>
            <span class="small">kenalan bareng anggota inti kami yuk</span>
    </div>
</section>

<section id="strukture">
    <div class="container d-flex flex-column align-items-center text-center mt-5">
        <div class="col-lg-8">
            <div class="row gx-5">
                <div class="col">
                    <div class="card pt-4">
                        <h5>Ketua Osis</h5>
                        <img src="{{ asset('assets/img/bgketuosis.jpeg') }}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                          <p class="text-decoration-underline">Luqman Muhammad Syahidan</p>
                          {{-- <span class="fw-light">nisn</span> --}}
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card pt-4">
                        <h5>Wakil Ketua Osis</h5>
                        <img src="{{ asset('assets/img/bgwklketu.jpeg') }}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                          <p class="text-decoration-underline">Sandi Maulana</p>
                          {{-- <span class="fw-light">nisn</span> --}}
                        </div>
                      </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mt-5">
            <div class="row">
                <div class="col">
                    <h4>Sekretaris</h4>
                    <div class="row gx-5">
                        <div class="col">
                            <div class="card pt-4">
                                <h5>sekretaris</h5>
                                <img src="{{ asset('assets/img/bgsekretaris.jpg') }}" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                  <p class="text-decoration-underline">Santi Fauziah</p>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="card pt-4">
                                <h5>Wakil Sekretaris</h5>
                                <img src="{{ asset('assets/img/bgwklsekre.jpeg') }}" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                  <p class="text-decoration-underline">Calvin Abdul Rozaq</p>
                                </div>
                              </div>
                        </div>
                    </div>  
                </div>
                <div class="col">
                    <h4>Bendahara</h4>
                    <div class="row gx-5">
                        <div class="col">
                            <div class="card pt-4">
                                <h5>Bendahara</h5>
                                <img src="{{ asset('assets/img/bgbendahara.jpeg') }}" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                  <p class="text-decoration-underline">Taufik Nur Hidayat</p>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="card pt-4">
                                <h5>Wakil Bendahara</h5>
                                <img src="{{ asset('assets/img/bgwklbenda.jpeg') }}" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                  <p class="text-decoration-underline">Raihan Muhammad Zakya</p>
                                </div>
                              </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
</section>
@endsection