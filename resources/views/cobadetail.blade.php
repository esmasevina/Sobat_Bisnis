@extends('layouts.main')
@section('halaman')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li>Edukasi Bisnis</li>
        </ol>
        <h2>{{ $edudetail->title }}</h2>
        <li>Create By   :{{ $edudetail->author }}</li>
        <li>Publish at  :{{ $edudetail->publish_at  }}</li>
      </div>
    </section><!-- End Breadcrumbs -->
    <section id="edubisnis-details" class="edubisnis-details">
      <div class="containeredu">
        <div class="kontenatas">
          <div class="row">
            <div class="contentimage col-md-6 d-flex">
              <div class="imageedu" style="background-image: url({{ ('storage/'. $edudetail->foto) }})" alt="">
              </div>
            </div>
            <div class="col-md-6 d-flex">
              <div class="edubisnis-description">
                <h2>{{ $edudetail->titlebawah }}</h2>
                <p>{!! $edudetail->kontenatas !!}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="kontenbawah">
          <p>{!! $edudetail->kontenbawah !!}</p>
        </div>
      </div>
    </section>
  </main><!-- End main -->
@endsection