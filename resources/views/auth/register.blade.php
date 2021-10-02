<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="bg-secondary bg-opacity-10">

      <div class="container">
        <div class="box d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="card rounded-3" style="width: 35rem">
                <div class="card-body">
                    
                    <h3 class="text-center">Login</h3>
                    
                        <form class="wrapper-input">
                            <div class="mb-3">
                                <label for="nisn" class="form-label">NISN</label>
                                <input type="text" class="form-control" id="nisn">
                                <div id="emailHelp" class="form-text">Gunakan NISN anda</div>
                              </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name">
                              </div>
                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email">
                              <div id="emailHelp" class="form-text">Gunakan Alamat Email anda yang aktif</div>
                            </div>
                            <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control" id="password">
                            </div>

                            <button type="submit" class="btn btn-primary">Daftar</button>
                          </form>
                          <hr width="100%">
                          <p class="text-center text-secondary">sudah punya akun <a href="#">masuk</a></p>


                </div>
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>