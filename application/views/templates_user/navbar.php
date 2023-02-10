
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>+62 812 3456 7890</span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>dstlogoagung@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Ikuti Kami:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0">Tlogoagung</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang Desa</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Visi Misi</a>
                        <a href="quote.html" class="dropdown-item">Struktur Organisasi</a>
                        <a href="team.html" class="dropdown-item">Sejarah Desa</a>
                        <!-- <a href="testimonial.html" class="dropdown-item">Pembuatan KTP</a> -->
                        <!-- <a href="404.html" class="dropdown-item">Pelaporan</a> -->
                    </div>
                </div>
                <a href="service.html" class="nav-item nav-link">Berita</a>
                <a href="project.html" class="nav-item nav-link">Galeri</a>
                <a href="contact.html" class="nav-item nav-link">Kontak</a>
            </div>
            <a href="<?php echo base_url('layanan/dashboard') ?>" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Pelayanan<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->