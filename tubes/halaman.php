<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>

    <!-- My Css -->
    <link rel="stylesheet" href="css/halaman.css"/>

    <title>Kumpulan Film</title>
  </head> 
  <body id="home">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Kumpulan Film</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#film">Film</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="data-film.php">Data Film</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Akhir Navbar -->

      <!-- Jumbotron -->
      <section class="jumbotron text-center">
        <img src="img/logo gambar.jpg" alt="Logo Film" width="200" class="rounded-circle" />
        <h1 class="display-4">Kumpulan Film</h1>
        <p class="lead">Film Website</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L60,138.7C120,117,240,75,360,80C480,85,600,139,720,186.7C840,235,960,277,1080,250.7C1200,224,1320,128,1380,80L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
      </section>
      <!-- Akhir Jumbotron -->

      <!-- About -->
      <section id="about">
        <div class="container">
          <div class="row text-center mb-5">
            <div class="col">
              <h2>About</h2>
            </div>
          </div>
          <div class="row justify-content-center fs-5 text-center">
            <div class="col-md-4">
              <p>Ini adalah website kumpulan film action dan comedy terbaik.</p>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0ffff" fill-opacity="1" d="M0,0L48,42.7C96,85,192,171,288,186.7C384,203,480,149,576,144C672,139,768,181,864,192C960,203,1056,181,1152,176C1248,171,1344,181,1392,186.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </section>
      <!-- Akhir About -->

      <!-- Film -->
      <section id="film">
        <div class="container">
          <div class="row text-center mb-5">
            <h2>Film</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
              <div class="card text-center">
                <img src="img/black widow.jpg" class="card-img-top" alt="Product1">
                <div class="card-body">
                  <h6 class="card-title">Black Widow</h6>
                  <a href="data-film.php" class="cetak btn btn-outline-primary">Klik disini!</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card text-center">
                <img src="img/rampage.jpeg" class="card-img-top" alt="Product2">
                <div class="card-body">
                  <h6 class="card-title">Rampage</h6>
                  <a href="data-film.php" class="cetak btn btn-outline-primary">Klik disini!</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card text-center">
                <img src="img/resident evil.jpg" class="card-img-top" alt="Product2">
                <div class="card-body">
                  <h6 class="card-title">Resident Evil</h6>
                  <a href="data-film.php" class="cetak btn btn-outline-primary">Klik disini!</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card text-center">
                <img src="img/the batman.jpg" class="card-img-top" alt="Product4">
                <div class="card-body">
                  <h6 class="card-title">The Batman</h6>
                  <a href="data-film.php" class="cetak btn btn-outline-primary">Klik disini!</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card text-center">
                <img src="img/the boss baby.jpg" class="card-img-top" alt="Product2">
                <div class="card-body">
                  <h6 class="card-title">The Boss Baby</h6>
                  <a href="data-film.php" class="cetak btn btn-outline-primary">Klik disini!</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card text-center">
                <img src="img/the spongebob.jpg" class="card-img-top" alt="Product6">
                <div class="card-body">
                  <h6 class="card-title">The Spongebob Movie: Sponge on the Run</h6>
                  <a href="data-film.php" class="cetak btn btn-outline-primary">Klik disini!</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0ffff" fill-opacity="1" d="M0,96L40,85.3C80,75,160,53,240,85.3C320,117,400,203,480,240C560,277,640,267,720,266.7C800,267,880,277,960,250.7C1040,224,1120,160,1200,133.3C1280,107,1360,117,1400,122.7L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg> 
      </section>
      <!-- Akhir Film -->

      <!-- Contact -->
      <section id="contact">
        <div class="container">
          <div class="row text-center mb-4">
            <div class="col">
              <h2>Contact</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                <strong>Terimakasih</strong> Pesan anda sudah kami terima.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <form name="contact-form">
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
                </div>

                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>

                <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading...
                </button>
              </form>
            </div>
          </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#198754" fill-opacity="1" d="M0,128L60,106.7C120,85,240,43,360,48C480,53,600,107,720,122.7C840,139,960,117,1080,101.3C1200,85,1320,75,1380,69.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
        </section>
      <!-- Akhir Contact -->

      <!-- Footer -->
      <footer class="bg-success text-white text-center p-5">
        <p>Muhammad Angga Kusuma <a href="https://instagram.com/m_angga_k?igshid=YmMyMTA2M2Y=" class="text-white fw-bold"><i class="bi bi-instagram"></i></a> <a href="https://api.whatsapp.com/send?phone=6282127202795" class="text-white fw-bold"><i class="bi bi-whatsapp ms-2"></i></a></p>
      </footer>
      <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbxov2D4CKjR6AeftkRHa5qmdtuHsLDM9CtqQrgqLPlxCVhJpdarTwWxHCP35uXWskWW/exec';
      const form = document.forms['contact-form'];
      const btnKirim = document.querySelector('.btn-kirim');
      const btnLoading = document.querySelector('.btn-loading');
      const myAlert = document.querySelector('.my-alert');

      form.addEventListener('submit', e => {
        e.preventDefault();
        // ketika tombol submit diklik
        // tampilkan tombol loading, hilangkan tombol kirim
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
          .then(response => {
            // tampilkan tombol kirim, hilangkan tombol loading
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
            // tampilkan alert
            myAlert.classList.toggle('d-none');
            // reset formnya
            form.reset();
            console.log('Success!', response);
          })
          .catch(error => console.error('Error!', error.message));
      });
    </script>

  </body>
</html>