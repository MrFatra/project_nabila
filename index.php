<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>SISTEM REKAPITULASI PEMBAYARAN SPP</title>
  <meta name="description" content="" />
  <meta name="author" content="Tooplate" />
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Additional CSS Files -->
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/tooplate-style.css" />
  <link rel="stylesheet" href="assets/css/owl.css" />
  <link rel="stylesheet" href="assets/css/lightbox.css" />
</head>
<!--
Tooplate 2116 Blugoon
https://www.tooplate.com/view/2116-blugoon
-->

<body>
  <div id="page-wraper">
    <!-- Sidebar Menu -->
    <div class="responsive-nav">
      <i class="fa fa-bars" id="menu-toggle"></i>
      <div id="menu" class="menu">
        <i class="fa fa-times" id="menu-close"></i>
        <div class="container">
          <div class="image">
            <a href="#"><img src="assets/images/logo_miftahul_falah.jpg" alt="logo miftahul falah" /></a>
          </div>
          <div class="author-content">
            <h4>SISTEM REKAPITULASI PEMBAYARAN SPP</h4>
            <span>Teknologi</span>
          </div>
          <nav class="main-nav" role="navigation">
            <ul class="main-menu">
              <li><a href="#section1">Home</a></li>
              <li><a href="#section2">Data Siswa</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </nav>
          <div class="social-network">
            <ul class="soial-icons">
              <li>
              </li>
              <li>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <section class="section about-me" data-section="section1">
      <div class="container">
        <div class="top-header">
          <img src="assets/images/miftahul_falah.jpg" alt="miftahul falah" />
        </div>
        <div class="section-heading">

          <h2>SISTEM INFORMASI PEMBAYRAN SPP</h2>
          <div class="line-dec"></div>
          <span>Sistem informasi Rekapitulasi pembayaran Pondok Pesantren Miftahul Falah.</span>
        </div>
        <div class="right-image-post">

          <div class="col-md-8">
            <div class="left-text">
              <h4>Pondok Peasntren Miftahul Falah</h4>

            </div>
          </div>
        </div>

    </section>

    <section class="section my-services" data-section="section2">
      <div class="container">
        <div class="section-heading">
          <h2>Data Santri Putri & Putri</h2>
          <div class="line-dec"></div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="service-item">
              <i class="fa fa-area-chart"></i>
              <h4>Nama Santri</h4>
              <a href="data_santri.php">Data Santri</a>

            </div>
          </div>
          <div class="col-md-6">
            <div class="service-item">
              <i class="fa fa-check-square-o"></i>
              <h4>Pembayaran</h4>
              <a href="data_pembayaran.php">Pembayaran</a>

            </div>
          </div>

    </section>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate({
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
</body>

</html>