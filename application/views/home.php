<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LAPOR LURAH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="icon" href="<?=base_url()?>/assets/logo pengaduan.png" type="image/gif">
  <!-- Favicons -->
  <link href="<?= base_url() ?>/aset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>/aset/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>/aset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/aset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>/aset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/aset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>/aset/css/style.css" rel="stylesheet">

  <!-- Script jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#tombol").click(function() {
        $("#div").fadeToggle("slow");
      });
    });
  </script>

  <!-- Script React JS -->
  <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

  <!-- =======================================================
  * Template Name: NewBiz - v4.5.0
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1><a href="index.html">NewBiz</a></h1> -->
        <a href="index.html"><img src="<?= base_url() ?>/aset/img/logo pengaduan.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Prosedur</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="nav-link active" href="<?= base_url() ?>Auth/index">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">

      <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?= base_url() ?>/aset/img/logo-jaksel.png" alt="" width="500px" class="img-fluid">
      </div>

      <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
        <h2>LAYANAN PENGADUAN <br>ONLINE MASYARAKAT <br> Kelurahan Grogol Utara</h2>
        <div>
          <a href="Auth" class="btn-services scrollto">Tulis Pengaduan Anda</a>
          <br>
          <!-- <center>
            <p>Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a></p>
          </center> -->

        </div>
      </div>

    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header" id="tombol">
          <h3 class="fs-2 fw-bold">Apa itu LAPOR LURAH?</h3>
        </header>

        <div class="row about-container" id="div">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p class="py-5 text-break">
              Layanan Pengaduan Online Masyarakat (LAPOR) LURAH berbasis web ini merupakan form pengaduan yang di khususkan 
              untuk warga grogol utara yaitu dalam hal kebersihan, Bencana, 
              dan hal-hal lain yang berhubungan dengan Pemda Kelurahan Grogol Utara
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Meningkatkan Mutu Pelayanan</a></h4>
              <p class="description">Dengan adanya Website ini diharapkan dapat meningkatkan pelayanan terhadap masyarakat</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Praktis dan Hemat Waktu</a></h4>
              <p class="description">Dengan adanya Website ini masyarakat tidak perlu datang ke kantor Kelurahan untuk melakukan pengaduan</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
            <img src="<?= base_url() ?>/aset/img/lapor 1.png" class="img-fluid rounded rounded-3" alt="">
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="section-bg" >
      <div class="container " data-aos="fade-up" >

        <header class="section-header">
          <h3 class="text-white fw-bolder py-5">Prosedur Pengaduan di Website LAPOR LURAH</h3>
        </header>

        <div class="row justify-content-center pt-3 pb-3">

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">1. Daftar/Masuk</a></h4>
              <p class="description">Daftar terlebih dahulu sebelum melakukan pengaduan. Setelah mendaftar, login untuk menulis pengaduan Anda.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">2. Tulis Pengaduan</a></h4>
              <p class="description">Tulis pengaduan yang sesuai dengan masalah yang Anda alami atau yang Anda temui. Sertakan surat atau foto sebelum melakukan pengaduan.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">3. Verifikasi Pengaduan</a></h4>
              <p class="description">Jika Anda sudah mengirim pengaduan, maka pengaduan Anda akan segera diproses dan diverifikasi oleh petugas Kami.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">4. Proses Tindak Lanjut</a></h4>
              <p class="description">Setelah melalui proses verifikasi oleh petugas, selanjutnya Kami akan menindak lanjuti terkait pengaduan Anda.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-brightness-high" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">5. Beri Tanggapan</a></h4>
              <p class="description">Setelah Kami tindak lanjuti, maka selanjutnya Anda tinggal menunggu tanggapan dari Kami.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-calendar4-week" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">6. Selesai</a></h4>
              <p class="description">Anda bisa melihat tanggapan atau status dari pengaduan Anda di halaman dashboard Anda.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header" id="tombol">
          <h3>Kontak Kami</h3>
        </div>

        <div class="row" id="div">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4224.378690356634!2d106.79039776251618!3d-6.21090554215618!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6c926e4b1e3%3A0x4db84332f410d692!2sKantor%20Lurah%20Grogol%20Utara!5e0!3m2!1sid!2sus!4v1713877426041!5m2!1sid!2sus" style="border:0; width: 100%; height: 340px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="bi bi-geo-alt"></i>
                <p>Jl. Kemandoran I No. 99</p>
              </div>
              <div class="col-md-3 info">
                <i class="bi bi-phone"></i>
                <p> 021 5480785</p>
              </div>
            </div>

            <div class="form">
              <form action="https://formsubmit.co/zitcheron@gmail.com" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6 footer-info footer-links">
            <h3>LAPOR LURAH</h3>
            <p>Layanan Pengaduan Online Masyarakat (LAPOR) LURAH berbasis web ini merupakan 
              form pengaduan yang di khususkan untuk warga grogol utara yaitu dalam hal kebersihan,
              Bencana, dan hal-hal lain yang berhubungan dengan Pemda Kelurahan Grogol Utara</p>
            <br>
            <ul>
              <li>
                <div id="mydiv"></div>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Berita Terkini</h4>
            <ul>
              <li><a href="https://selatan.jakarta.go.id/berita-selatan/detail/Kelurahan-Grogol-Utara-Fokuskan-PSN-di-Sentral-Tanaman">kegiatan Pemberantasan Sarang Nyamuk (PSN) di Sentral Tanaman RT 001/RW 10</a></li>
              <li><a href="https://www.rri.co.id/daerah/278146/kelurahan-grogol-utara-tata-kawasan-di-jalan-tentara-pelajar">Kelurahan Grogol Utara Tata Kawasan Di Jalan Tentara Pelajar</a></li>
              <li><a href="https://m.beritajakarta.id/video/play/32035/kelurahan-grogol-utara-ciptakan-ruang-interaksi-melalui-penataan-kawasan">Kelurahan Grogol Utara Ciptakan Ruang Interaksi Melalui Penataan Kawasan</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Kontak Kami</h4>
            <p>
              Kantor Kelurahan Grogol Utara <br>
              Alamat : Jl. Kemandoran I No. 99<br>
              Kecamatan Kebayoran Lama,<br>
              Jakarta Selatan <br>
              <strong>Hub:</strong> 021 5480785<br>
            </p>

            <div class="social-links">
              <a href="https://www.facebook.com/pages/Kelurahan-Grogol-Utara-jakarta-selatan/228581463930781" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/kelurahan_grogol_utara/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCerI4ONlApqTuzZewGn5KYA" class="youtube"><i class="bi bi-youtube"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>LAPOR LURAH</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
      -->
        Designed by <a href="https://portofolio-tailwindcss.on.drv.tw/adhamastito/" target="_blank">Adha Mastito</a>

      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>/aset/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>/aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/aset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>/aset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>/aset/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>/aset/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url() ?>/aset/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>/aset/js/main.js"></script>

  <!-- Script React JS -->
  <!-- <script type="text/babel">
    function Hello() {
      return <a href="<?= base_url() ?>homepage/corona">Cek disini</a>;
    }

    ReactDOM.render(<Hello />, document.getElementById('mydiv'))
  </script> -->

</body>

</html>