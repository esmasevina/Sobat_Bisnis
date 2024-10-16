@extends('layouts.main')
@section('halaman')
      <!-- ======= Kursus Section ======= -->
      <section id="kursus-bisnis" class="kursus-bisnis">
        <div class="container">
  
          <div class="section-title">
            <h2>Kursus Bisnis</h2>
          </div>
  
          <div class="row">
          @foreach ( $kursusbisnis as $kursusdetail )
            <div class="col-md-3 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="card">
                <div class="card-image"  style="background-image: url(assets/img/kursusbisnis/bootcamp.png);">
                </div>
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="/detailkursus{{ $kursusdetail->juduldepan }}">{{ $kursusdetail->title }}</a>
                  </h5>
                  <p class="card-text">
                  {{ $kursusdetail->tema }}
                 </p>
                  <!-- <div class="read-more"><a href="/kursus-bisnis-detail1"><i class="bi bi-arrow-right"></i> Read More</a></div> -->
                </div>
              </div>
            </div>
          @endforeach

          </div>
        </div>
      </section><!-- End Values Section -->
  

      <!-- ======= End of Fitur Edukasi Bisnis ======= -->
@endsection