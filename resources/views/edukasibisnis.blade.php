@extends('layouts.main')
@section('halaman')
  <!-- ======= Fitur Edukasi Bisnis ======= -->
  <section id="edukasi-bisnis" class="edukasi-bisnis">
        <div class="container">
  
          <div class="section-title">
            <h2 data-aos="fade-up">Edukasi Bisnis</h2>
            <p data-aos="fade-up">Di Edukasi bisnis ini kita bisa mendapatkan pengetahuan-pengetahuan baru mengenai bisnis, mulai dari pembuatan bisnis, perencanaan bisnis, hingga pengelolaan bisnis agar bisnis tersebut dapat berjalan dengan lancar.</p>
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="edukasi-bisnis-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-cosmetic" >Cosmetic</li>
                <li data-filter=".filter-fashion">Fashion</li>
                <li data-filter=".filter-foodbaverage">Food and baverage</li>
              </ul>
            </div>
          </div>
  
          <div class="row edukasi-bisnis-container" data-aos="fade-up" data-aos-delay="200">
  
            <!-- <div class="col-lg-4 col-md-6 edukasi-bisnis-item filter-cosmetic">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="edukasi-bisnis-info">
                <h4>Cosmetic 1</h4>
                <p>cosmetic</p>
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="edukasi-bisnis-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="/edubisnis-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div> -->
  
            <div class="col-lg-4 col-md-6 edukasi-bisnis-item filter-foodbaverage">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="edukasi-bisnis-info">
                <h4>Buat Konten Instagram untuk Bisnis Makanan Anda</h4>
                <p>Konten Instagram</p>
                <a href="assets/img/portofolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="edukasi-bisnis-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="/edubisnis-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <!-- <div class="col-lg-4 col-md-6 edukasi-bisnis-item filter-cosmetic">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="edukasi-bisnis-info">
                <h4>Cosmetic 2</h4>
                <p>cosmetic</p>
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="edukasi-bisnis-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="/edubisnis-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div> -->
  
            <!-- <div class="col-lg-4 col-md-6 edukasi-bisnis-item filter-fashion">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="edukasi-bisnis-info">
                <h4>Fashion 2</h4>
                <p>fashion</p>
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="edukasi-bisnis-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="/edubisnis-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div> -->
  
            <div class="col-lg-4 col-md-6 edukasi-bisnis-item filter-foodbaverage">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="edukasi-bisnis-info">
                <h4>Tips Menjalankan Bisnis Kue Kering untuk Pemula</h4>
                <p>Bisnis Kue kering</p>
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="edukasi-bisnis-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="/edubisnis-details1" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <!-- <div class="col-lg-4 col-md-6 edukasi-bisnis-item filter-cosmetic">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="edukasi-bisnis-info">
                <h4>Cosmetic 3</h4>
                <p>cosmetic</p>
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="edukasi-bisnis-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="/edubisnis-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 edukasi-bisnis-item filter-fashion">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="edukasi-bisnis-info">
                <h4>Fashion 1</h4>
                <p>fashion</p>
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="edukasi-bisnis-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="/edubisnis-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 edukasi-bisnis-item filter-fashion">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="edukasi-bisnis-info">
                <h4>Fashion 3</h4>
                <p>fashion</p>
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="edukasi-bisnis-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="/edubisnis-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 edukasi-bisnis-item filter-foodbaverage">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="edukasi-bisnis-info">
                <h4>5 Resep Makanan Viral </h4>
                <p>Resep Makanan Viral</p>
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="edukasi-bisnis-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="/edubisnis-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div> -->
          </div>
        </div>
        <!-- <div class="read-more-box" data-aos="fade-up" data-aos-delay="300">
          <a href="#">Read More</a>
        </div> -->
      </section>
      <!-- ======= End of Fitur Edukasi Bisnis ======= -->
@endsection