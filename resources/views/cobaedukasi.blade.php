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
          @foreach ( $edubisnis as $edudetail )
            <div class="col-lg-4 col-md-6 edukasi-bisnis-item {{ $edudetail->filter }}">
              <img src="{{ ('storage/'. $edudetail->foto) }}" class="img-fluid" alt="">
              <div class="edukasi-bisnis-info">
                <h4>
                <a href="/cobadetail{{ $edudetail->juduldepan }}">{{ $edudetail->title }}</a>
                </h4>
                <p>Tema: {{ $edudetail->tema }}</p>
                <a href="{{ ('storage/'. $edudetail->foto) }}" data-gallery="portfolioGallery" class="edukasi-bisnis-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="/cobadetail{{ $edudetail->juduldepan }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          @endforeach

          </div>
          
        </div>
        <!-- <div class="read-more-box" data-aos="fade-up" data-aos-delay="300">
          <a href="#">Read More</a>
        </div> -->
      </section>
@endsection