<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?= $title; ?></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/homepage/'); ?>assets/img/favicon.svg"/> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="<?= base_url('assets/homepage/'); ?>assets/css/bootstrap-5.0.0-beta2.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/homepage/'); ?>assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="<?= base_url('assets/homepage/'); ?>assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="<?= base_url('assets/homepage/'); ?>assets/css/animate.css" />
    <link rel="stylesheet" href="<?= base_url('assets/homepage/'); ?>assets/css/main.css" />
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		<!-- preloader end -->
		

    <!-- ========================= header start ========================= -->
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                  <img src="<?= base_url('assets/img/'); ?>logobcon.png" alt="BconLogo" style="width: 100%; height: 80px; object-fit; cover;" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="page-scroll active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#about">About</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="page-scroll" href="#service">Services</a>
                    </li> -->
                    <li class="nav-item">
                      <a class="" href="<?= base_url('auth/login'); ?>">Login</a>
                    </li>
                  </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->

    <!-- ========================= hero-section start ========================= -->
    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content">
							<span class="wow fadeInLeft" data-wow-delay=".2s">Welcome to IT Helpdesk Bakrie Construction</span>
              <h1 class="wow fadeInUp" data-wow-delay=".4s">
								Got an IT Problem? We’ve Got You Covered.
							</h1>
              <p class="wow fadeInUp" data-wow-delay=".6s">
                Please open a ticket for any IT-related issues.
              </p>
							<a href="<?= base_url('auth/login');?>" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Open Ticket Now</a>
            </div>
					</div>
					<div class="col-lg-6">
						<div class="hero-img wow fadeInUp" data-wow-delay=".5s">
							<img src="<?= base_url('assets/homepage/'); ?>assets/img/hero/hero-img.svg" alt="">
						</div>
					</div>
        </div>
			</div>
    </section>
		<!-- ========================= hero-section end ========================= -->

		<!-- ========================= about-section start ========================= -->
		<section id="about" class="about-section pt-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-img mb-50">
							<img src="<?= base_url('assets/homepage/'); ?>assets/img/about/about-img.svg" alt="about">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-content mb-50">
							<div class="section-title mb-50">
								<h1 class="mb-25">
                                    Read more about our IT Solutions
                                </h1>
								<p>We provide reliable and innovative IT solutions to support your business operations. Our services include system support, troubleshooting, infrastructure management, and technical assistance to ensure your technology runs smoothly, securely, and efficiently. We are committed to delivering fast response times, clear communication, and effective solutions tailored to your organization’s needs.</p>
							</div>
							<div class="accordion pb-15" id="accordionExample">
								<div class="single-faq">
									<button class="w-100 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Which IT Services Do We Provide?
									</button>
							
									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="faq-content">We provide comprehensive IT support services to ensure your systems operate efficiently and reliably.
										</div>
									</div>
								</div>
								
								
							</div>
							<!-- <a href="javascript:void(0)" class="main-btn btn-hover">View More</a> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= about-section end ========================= -->

		<!-- ========================= service-section start ========================= -->
		<!-- <section id="service" class="service-section img-bg pt-100 pb-100 mt-150">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10">
						<div class="section-title text-center mb-50">
							<h1>Our services</h1>
							<p>We deliver professional IT services including helpdesk support, system maintenance, troubleshooting, and infrastructure management to ensure reliable and efficient IT operations.</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-1">
								<i class="lni lni-layers"></i>
							</div>
							<div class="content">
								<h3>Network</h3>
								<p>Lorem ipsum dolor sitsdw consetsad pscing eliewtr, diam nonumy.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-2">
								<i class="lni lni-code-alt"></i>
							</div>
							<div class="content">
								<h3>Web design</h3>
								<p>Lorem ipsum dolor sitsdw consetsad pscing eliewtr, diam nonumy.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-3">
								<i class="lni lni-pallet"></i>
							</div>
							<div class="content">
								<h3>Maintenance</h3>
								<p>Lorem ipsum dolor sitsdw consetsad pscing eliewtr, diam nonumy.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-4">
								<i class="lni lni-vector"></i>
							</div>
							<div class="content">
								<h3>troubleshooting</h3>
								<p>Lorem ipsum dolor sitsdw consetsad pscing eliewtr, diam nonumy.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="view-all-btn text-center pt-30">
					<a href="javascript:void(0)" class="main-btn btn-hover">View All Services</a>
				</div>

			</div>
		</section> -->
		<!-- ========================= service-section end ========================= -->

    <!-- ========================= footer start ========================= -->
		<footer class="footer">
			<div class="container">
				<div class="widget-wrapper">
					
				</div>

				<div class="copy-right">
					<p>© 2026 IT Bcon. All Rights Reserved.</p>
				</div>

			</div>
		</footer>
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="<?= base_url('assets/homepage/'); ?>assets/js/bootstrap-5.0.0-beta2.min.js"></script>
    <script src="<?= base_url('assets/homepage/'); ?>assets/js/count-up.min.js"></script>
    <script src="<?= base_url('assets/homepage/'); ?>assets/js/tiny-slider.js"></script>
    <script src="<?= base_url('assets/homepage/'); ?>assets/js/wow.min.js"></script>
    <script src="<?= base_url('assets/homepage/'); ?>assets/js/polifill.js"></script>
    <script src="<?= base_url('assets/homepage/'); ?>assets/js/main.js"></script>
  </body>
</html>
