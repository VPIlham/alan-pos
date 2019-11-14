
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Meta -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Alan</title>
</head>
<body>
    <!-- Header -->
    <header class="">
        <!-- Navbar -->
        <div class="container pt-2">
            <nav class="navbar navbar-expand-lg navbar-dark">
              <a class="navbar-brand" href="#">Alan</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Point of Sale
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/pos')}}">Rangkuman Fitur</a>
                      <a class="dropdown-item" href="#">Manajemen Meja</a>
                      <a class="dropdown-item" href="#">Manajemen Inventori</a>
                      <a class="dropdown-item" href="#">Manajemen Staff</a>
                      <a class="dropdown-item" href="#">Manajemen Pelanggan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Payment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Capital</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Lainnya</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <a href="#" class="text-default mr-5">Login</a>
                  <button class="btn btn-outline-primary my-2 my-sm-0 font-weight-bold" type="submit">Coba Gratis</button>
                </form>
              </div>
            </nav>
        </div>
        <!-- End of Navbar -->

        <!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid bg-transparent">
          <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2>Atur kasir lebih mudah dengan Moka POS</h2>
                    <p class="mt-3">Kami membantu bisnis Anda mempercepat proses penjualan dengan aplikasi kasir Moka</p>
                    <a href="#" class="btn btn-primary font-weight-bold mt-3">Coba Gratis Sekarang</a>
                </div>
            </div>
          </div>
        </div>
        <!-- End of Jumbotron -->
    </header>
    <!-- End of Header -->

    <main>
        <!-- Feature -->
        <section class="container feature">
            <div class="row feature-item">
                <div class="col-md-6 offset-md-1 order-md-12 d-flex align-content-center flex-wrap">
                    <h2 class="feature-title">Moka Point of Sale</h2>
                    <h2 class="feature-heading">Catatan pembayaran Anda berantakan?</h2>
                    <p class="feature-body">Aplikasi kasir Moka menyederhanakan proses penjualan usaha Anda dan mengelola transaksi lebih efisien.</p>
                    <a href="#" class="btn btn-outline-primary mt-3">Pelajari Lebih Lanjut</a>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/index-1@2x.png" alt="">
                </div>
            </div>
            <div class="row feature-item">
                <div class="col-md-6 d-flex align-content-center flex-wrap">
                    <h2 class="feature-title">Moka Payments</h2>
                    <h2 class="feature-heading">Susah melacak pembayaran masuk dan keluar?</h2>
                    <p class="feature-body">Aplikasi kasir Moka menyederhanakan proses penjualan usaha Anda dan mengelola transaksi lebih efisien.</p>
                    <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/partners-1.png" alt="#" class="d-block feature-partners">
                    <a href="#" class="btn btn-outline-primary">Pelajari Lebih Lanjut</a>
                </div>
                <div class="col-md-5 offset-md-1">
                    <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/index-2@2x.png" alt="">
                </div>
            </div>
            <div class="row feature-item">
                <div class="col-md-6 offset-md-1 order-md-12 order-md-12 d-flex align-content-center flex-wrap">
                    <h2 class="feature-title">Moka Capital</h2>
                    <h2 class="feature-heading">Mau mengembangkan bisnis Anda lebih cepat?</h2>
                    <p class="feature-body">Pinjam modal usaha dari berbagai platform pendanaan untuk melebarkan sayap bisnis Anda.</p>
                    <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/partners.png" alt="#" class="d-block feature-partners">
                    <a href="#" class="btn btn-outline-primary">Pelajari Lebih Lanjut</a>
                </div>
                <div class="col-md-5 order-md-1 order-md-1">
                    <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/index-3@2x.png" alt="">
                </div>
            </div>
        </section>
        <!-- End of Feature -->

        <!-- Bisnis and Testimonials -->
        <section class="business-testimonials">

            <!-- business -->
            <div class="container business text-center">
                <h2 class="business-heading">Cocok untuk berbagai macam tipe bisnis</h2>
                <div class="row no-gutters">
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/coffee-shop.svg" alt="">
                        <p class="card-text">Kedai Kopi</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/full-service-restaurant.svg" alt="">
                        <p class="card-text">Restoran</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/quick-service-restaurant.svg" alt="">
                        <p class="card-text">Restoran Cepat Saji</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row no-gutters">
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/bakery.svg" alt="">
                        <p class="card-text">Toko Roti</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/retail.svg" alt="">
                        <p class="card-text">Retail</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/minimarket.svg" alt="">
                        <p class="card-text">Minimarket</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row no-gutters">
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/barbershop.svg" alt="">
                        <p class="card-text">Barbershop & Salon</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/layanan-kecantikan.svg" alt="">
                        <p class="card-text">Layanan Kecantikan</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/bakery-copy.svg" alt="">
                        <p class="card-text">Layanan Profesional</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- End of business -->

            <!-- Testimonials -->
            <div class="container testimonials">
                <h2>Dipercaya lebih dari 20,000 pebisnis di seluruh Indonesia</h2>
                <div class="bd-example">
                  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row no-gutters">
                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/testimonial/Cyclo-photo.jpg" alt="">
                                        <p class="card-text testimonial-body">
                                            Dengan Moka, saya dapat menjalankan bisnis pakaian dan kedai kopi dalam satu sistem. Moka mempercepat pengambilan keputusan berdasarkan laporan penjualan yang tersedia.
                                        </p>
                                        <p  class="card-text testimonial-name">
                                            Ardi, Pemilik Cyclo Coffee and Apparel
                                        </p>
                                        <p  class="card-text testimonial-role">
                                            Kedai Kopi
                                        </p>
                                    </div>
                                    <div class="col-md-8 testimonial-image text-right">
                                        <img src="img/Cyclo-photo.jpg" alt="">
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row no-gutters">
                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/testimonial/Eatlah-photo.jpg" alt="">
                                        <p class="card-text testimonial-body">
                                            Moka sangat mudah dioperasikan, entah itu untuk pegawai baru atau untuk outlet baru. Saya bisa memantau 12 toko sekaligus tanpa harus berada di sana.
                                        </p>
                                        <p class="card-text testimonial-name">
                                            Michael, Pemilik Eatlah
                                        </p>
                                        <p class="card-text testimonial-role">
                                            Restoran Cepat Saji
                                        </p>
                                    </div>
                                    <div class="col-md-8 testimonial-image text-right">
                                        <img src="img/Eatlah-photo.jpg" alt="">
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row no-gutters">
                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/testimonial/Bright.jpg" alt="">
                                        <p class="card-text testimonial-body">
                                            Saya tidak menyangka mengajukan pinjaman melalui Moka Capital bisa secepat dan semudah ini.
                                        </p>
                                        <p class="card-text testimonial-name">
                                            Reonal Gultom, Pemilik Bright Printing
                                        </p>
                                        <p class="card-text testimonial-role">
                                            Layanan Profesional
                                        </p>
                                    </div>
                                    <div class="col-md-8 testimonial-image text-right">
                                        <img src="img/Bright-photo.jpg" alt="">
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row no-gutters">
                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/testimonial/Ezo.jpg" alt="">
                                        <p class="card-text testimonial-body">
                                            Moka datanya cloud jadi bisa diakses di mana saja dan kita bisa pantau bisnis dari mulai omset, stok, sampai barang yang efisien dan tidaknya.
                                        </p>
                                        <p class="card-text testimonial-name">
                                            Fairtel Mong, Pemilik Ezo Cheesecake and Bakery
                                        </p>
                                        <p class="card-text testimonial-role">
                                            Toko Roti
                                        </p>
                                    </div>
                                    <div class="col-md-8 testimonial-image text-right">
                                        <img src="img/Ezo-photo.jpg" alt="">
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
            </div>
            <!-- End of Testimonials -->
        </section>
        <!-- Enf of Bisnis and Testimonials -->

        <!-- Press -->
        <section class="press">
            <div class="container-fluid">
                <ul>
                    <li>
                        <a href="#">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/the-business-times.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/kompas.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/tech-crunch.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/tech-in-asia-.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/the-jakarta-post.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Press -->

        <!-- Info -->
        <div class="container info">
            <div class="row info-item">
                <div class="col-md-5">
                    <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/group-19@2x.png" alt="">
                </div>
                <div class="col-md-6 offset-md-1 d-flex align-content-center flex-wrap">
                    <h2 class="info-title">Moka Point of Sale</h2>
                    <h2 class="info-heading">Catatan pembayaran Anda berantakan?</h2>
                    <p class="info-body">Aplikasi kasir Moka menyederhanakan proses penjualan usaha Anda dan mengelola transaksi lebih efisien.</p>
                    <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
        <!-- End of Info -->

        <!-- Try -->
        <section class="container try text-center">
            <h2>Mulai bisnis Anda dengan Moka</h2>
            <p>Menjalankan bisnis bisa lebih efektif dan efisien dengan Moka sehingga Anda bisa fokus mengembangkan bisnis Anda.</p>
            <a href="#" class="btn btn-primary">Coba Gratis Sekarang</a>
        </section>
        <!-- End of Try -->
    </main>
    
    <!-- Footer -->
    <footer>
        <section class="container footer-info">
            <div class="row">
                <div class="col product">
                    <h2 class="footer-heading">Produk Software</h2>
                    <ul>
                        <li><a href="#">Point of Sales</a></li>
                        <li><a href="#">Payments</a></li>
                        <li><a href="#">Capital</a></li>
                        <li><a href="#">Manajemen Kerja</a></li>
                        <li><a href="#">Manajemen Inventori</a></li>
                        <li><a href="#">Manajemen Staff</a></li>
                        <li><a href="#">Manajemen Pelanggan</a></li>
                    </ul>
                </div>
                <div class="col solution">
                    <h2 class="footer-heading">Solusi Bisnis</h2>
                    <ul>
                        <li><a href="#">Kedai Kopi</a></li>
                        <li><a href="#">Restoran</a></li>
                        <li><a href="#">Restoran Cepat Saji</a></li>
                        <li><a href="#">Toko Roti</a></li>
                        <li><a href="#">Retail</a></li>
                        <li><a href="#">Minimarkets</a></li>
                        <li><a href="#">Barbershops & Salons</a></li>
                        <li><a href="#">Layanan Kecantikan</a></li>
                        <li><a href="#">Layanan Profesional</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h2 class="footer-heading">Bantuan</h2>
                    <ul>
                        <li><a href="#">Harga</a></li>
                        <li><a href="#">Hubungi Kami</a></li>
                        <li><a href="#">Support Center</a></li>
                        <li><a href="#">Video Tutorial</a></li>
                        <li><a href="#">Knowledge Center</a></li>
                        <li><a href="#">Panduan Penggunaan</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h2 class="footer-heading">Open Platform</h2>
                    <ul>
                        <li><a href="#">Developers</a></li>
                        <li><a href="#">Getting Started</a></li>
                        <li><a href="#">API References</a></li>
                        <li><a href="#">Developer Terms</a></li>
                    </ul>
                </div>
                <div class="col about">
                    <h2 class="footer-heading">Tentang Moka</h2>
                    <ul>
                        <li><a href="#">Tentang Moka</a></li>
                        <li><a href="#">Berita</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Karir</a></li>
                        <li>
                            <a href="#">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/footer/app-store.svg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/footer/play-store.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Language -->
        <section class="container footer-two clearfix">
            <span class="float-left">
                <div class="dropdown dropup">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bahasa Indonesia
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Bahasa Indoensia</a>
                    <a class="dropdown-item" href="#">English</a>
                  </div>
                </div>
            </span>
            <span class="float-right ">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </span>
        </section>
        <!-- End of Language -->

        <!-- Copyright -->
        <section class="container footer-three clearfix">
            <span class="float-left">Copyright 2019 PT Moka Teknologi Indonesia. All Rights Reserved.</span>
            <span class="float-right">
                <ul>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">Syarat dan Ketentuan</a></li>
                </ul>
            </span>
        </section>
        <!-- End of Copyright -->
    </footer>


    <!-- End of Footer -->


    <!-- JavaScript -->
    <!-- Jquery, Popper, Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>