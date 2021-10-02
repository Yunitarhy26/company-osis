@extends("layouts.main")

@section("content")


	<!-- Slider Start -->

	<style>
		/* karena yg di kasih backgroundnya di css, jadi buat style yang 1 tingkat di atas class.. */
		section.slider{
			background: url("assets/img/bgsekolah.jpeg");
			background-repeat: no-repeat;
			background-size: cover;
			background-position-y: bottom;
		}
	</style>
<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-10">
				<div class="block">
					<span class="d-block mb-3 text-white text-capitalize">Sabisa bisa kudu bisa</span>
					<h1 class="animated fadeInUp mb-5"><br>Organisasi Siswa Intra Sekolah <br>SMKS MAHAPUTRA CERDAS UTAMA</h1>
					{{-- <a href="#" target="_blank" class="btn btn-main animated fadeInUp btn-round-full" >lihat<i class="btn-icon fa fa-angle-right ml-2"></i></a> --}}
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Section Intro Start -->
{{-- visimisi --}}
<section class="section intro">
	<div class="container">
		<div class="section-title">
			{{-- <center><span class="h6 text-color ">Beranda</span></center> --}}
			<h2 class="mt-3 content-title d-flex justify-content-center">Visi Misi</h2>
		</div>

		<div class="justify-content-center">
			<div class="visi">
				<h3>Visi</h3>
				<p>Mewujudkan cita-cita atau harapan sekolah menjadikan kita lebih berprestasi, kreatif, inovatif dan bertanggungjawab serta lebih perduli akan lingkungan sekitar yang dilandasi iman dan taqwa.</p>
			</div>
			<div class="misi mt-4">
				<h3>Misi</h3>
				<div class="misi-wrap row gx-3">
	
					<div class="col mx-2 card">
						<div class="card-body">
							Memperlihatkan karya seni siswa siswi SMK Mahaputra.
						</div>
					</div>
	
					<div class="col mx-2 card">
						<div class="card-body">
							Mengasah softskill dengan mengadakan kegiatan muhadoroh sebelum kegiatan ibadah sholat jum'at dilaksanakan.
						</div>
					</div>
	
					<div class="col mx-2 card">
						<div class="card-body">
							Mengadakan aspirasi dari seluruh siswa OSIS.
						</div>
					</div>
	
					<div class="col mx-2 card">
						<div class="card-body">
							Mendukung potensi para siswa baik dari segi pengetahuan maupun keterampilan.
						</div>
					</div>
	
				</div>
			</div>
{{-- <div>
	<div class="col-lg-4 col-md-6 col-14">
		<div class="intro-item mb-5 mb-lg-0"> 
			<i class="ti-star color-one"></i>
			<h2 class="mt-4 mb-3">Visi</h2>
			<h4> Mewujudkan cita-cita atau harapan sekolah menjadikan kita lebih berprestasi, kreatif, inovatif dan bertanggungjawab serta lebih perduli akan lingkungan sekitar yang dilandasi iman dan taqwa.</h4>	
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="intro-item mb-5 mb-lg-0">
			<i class="ti-star color-one"></i> 
			<h2 class="mt-4 mb-3">Misi</h2>
			<h4> <br>1. Memperlihatkan karya seni siswa siswi SMK Mahaputra.<br/><br>2. Mengasah softskill dengan mengadakan kegiatan muhadoroh sebelum kegiatan ibadah sholat jum'at dilaksanakan.</br><br>3. Mengadakan aspirasi dari seluruh siswa OSIS.</br>
				 <br>4. Mendukung potensi para siswa baik dari segi pengetahuan maupun keterampilan.</br>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="intro-item">
			<i class="ti-layers-alt color-one"></i>
			<h4 class="mt-4 mb-3">fisi misi foya foya</h4>
			
		</div>
	</div> 
</div> --}}

		</div>
	</div>
</section>
<!-- Section Intro END -->

<!-- Section Mading Start -->
<section class="section latest-blog bg-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					{{-- <span class="h6 text-color">MADING</span> --}}
					<h2 class="mt-3 content-title text-white">Yang perlu kamu tau</h2>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">

			<div class="col-lg-4 col-md-6 mb-5">
				<div class="card bg-transparent border-0">
					<img src="images/blog/1.jpg" alt="" class="img-fluid rounded">

					<div class="card-body mt-2">
						<img src="{{ asset('assets/images/bg/adiw.jpeg') }}" class="img-fluid" alt="">

						<h3 class="mt-3 mb-5 lh-36"><a href="#" class="text-white ">Adiwiyata Tingkat Provinsi</a></h3>

						{{-- <a href="#" class="btn btn-small btn-solid-border btn-round-full text-white">Lihat</a> --}}
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-5">
				<div class="card bg-transparent border-0">
					<img src="images/blog/1.jpg" alt="" class="img-fluid rounded">

					<div class="card-body mt-2">
						<img src="{{ asset('assets/images/bg/akredi.jpeg') }}" class="img-fluid" alt="">

						<h3 class="mt-3 mb-5 lh-36"><a href="#" class="text-white ">Terakreditasi "A"</a></h3>

						{{-- <a href="#" class="btn btn-small btn-solid-border btn-round-full text-white">Lihat</a> --}}
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-5">
				<div class="card bg-transparent border-0">
					<img src="images/blog/1.jpg" alt="" class="img-fluid rounded">

					<div class="card-body mt-2">
						<img src="{{ asset('assets/images/bg/adiw1.jpg') }}" class="img-fluid" alt="">

						<h3 class="mt-3 mb-5 lh-36"><a href="#" class="text-white ">Adiwiyata Tingkat Nasional</a></h3>

						{{-- <a href="#" class="btn btn-small btn-solid-border btn-round-full text-white">Lihat</a> --}}
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
 
<!-- Section Testimonial Start -->
<footer class="footer section">
	<div class="container">
		 <div class="footer-btm pt-4">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="copyright">
						&copy; SMKS Mahaputra <span class="text-color">Cerdas Utama</span></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="copyright">
					Designed by <a href="https://OsisSmksMahaputra.com/" target="_blank">themefisher</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 text-left text-lg-left">
					<ul class="list-inline footer-socials">
						<li class="list-inline-item"><a href="https://www.facebook.com/SMKMAHAPUTRACERDASUTAMA"><i class="ti-facebook mr-2"></i>Facebook</a></li>
						<li class="list-inline-item"><a href="https://instagram.com/smkmahaputra?utm_medium=copy_link"><i class="ti-instagram mr-2"></i>Instagram</a></li>
						<li class="list-inline-item"><a href="https://youtube.com/channel/UCCfYqV-2N44pFhsQpGEedCw"><i class="ti-youtube mr-2 "></i>Youtube</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>



@endsection 