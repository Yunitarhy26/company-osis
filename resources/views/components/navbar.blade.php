<header class="navigation">
	<nav class="navbar navbar-expand-lg  py-4" id="navbar">
		<div class="container">
		  <a class="navbar-brand" href="/">
		  	o<span>sis.</span>
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
			  <li class="nav-item active"><a class="btn btn-solid-border btn-round-full" href="{{ url('auth/login') }}">login</a></li>
		  </div>
		</div>
	</nav>
</header>