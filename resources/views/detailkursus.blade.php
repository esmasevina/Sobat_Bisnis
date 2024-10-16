@extends('layouts.main')
@section('halaman')
 <!-- ======= Detail Kursus ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/kursusbisnis">Kursus bisnis</a></li>
          </ol>
          <h2>{{ $kursusdetail->title }}</h2>
        </div>
      </section><!-- End Breadcrumbs -->  

    <section id="kursus-bisnis-detail" class="kursus-bisnis-detail">
        <div class="container">
             <!-- ======= Blog Single Section ======= -->  
          <div class="row">
            <div class="col-lg-6 detail" >
              <article class="entry entry-single">
                <div class="entry-img">
                  <img src="assets/img/kursusbisnis/kursus-dalam-1.jpeg" alt="" class="img-fluid">
                </div>
                <h2 class="entry-title">
                  <a href="blog-single.html"></a>
                </h2>
              </article><!-- End blog entry -->
            </div>
            <div class="col-lg-6 detail">
                <div class="kursus-detail">
                    <div class="kursus-title">
                        <h1>{{ $kursusdetail->title }}</h1>
                        <h4>{{ $kursusdetail->tema }}</h4>
                        <p>{{ $kursusdetail->date }}</p>
                        <br>
                    </div>
                    <div class="kursus-info">
                        <div class="deskripsi-kursus">
                            <p>{!! $kursusdetail->isi !!}</p>
                        </div>
                        <div class="info-tanggal">
                          <div class="tgdaftar">
                            <div class="tgjudul">
                              <h4> Tanggal Pendaftaran : </h4>
                            </div> 
                            <div class="tanggal">
                              <div class="mulaidaftar">
                                  <div class="mulai-pelatihan">
                                    <p>pendaftaran dimulai</p>
                                    <p>: {{ $kursusdetail->tanggaldaftar }}</p>
                                  </div>
                               </div>
                               <div class="selesaidaftar">
                                  <p>penutupan pendaftaran</p>
                                  <p>: {{ $kursusdetail->tanggaltutup }}</p>
                              </div>
                            </div>
                               
                          </div>
                          <div class="tgpelatihan">
                              <div class="tgjudul">
                                <h4> Tanggal Pelaksanaan : </h4>
                              </div>
                              <div class="tanggal">
                                  <div class="mulai-pelatihan">
                                    <p>kelas dimulai </p>
                                    <p>: {{ $kursusdetail->tanggalmulai }}</p>
                                  </div>
                                  <div class="durasi-pelatihan">
                                    <p>durasi program </p>
                                    <p>: {{ $kursusdetail->durasi }}</p>
                                  </div>
                                  <div class="sesi-kelas">
                                    <p>sesi kelas live:</p>
                                    <p>: {{ $kursusdetail->kelaslive }}</p>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="harga-pelatihan">
                          <div class="judul">
                            <p>harga</p>
                          </div>
                          <div class="harga">
                            <p>: {{ $kursusdetail->harga }}</p>
                          </div>
                        </div>
                        <div class="info-daftar-pelatihan">
                            <div class="button-link">
                                <a href="{{ $kursusdetail->link }}">Pelajari lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>   
    </section>
      <!-- ======= end section ======= -->
    @endsection