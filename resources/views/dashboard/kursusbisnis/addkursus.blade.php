@extends('dashboard.layouts.maindash')

@section('container')

@if(session()->has('addSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session("addSuccess")}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Unggah Konten Kursus Bisnis</h1>
</div>

 <!-- General Form Elements -->
 <form action ="/dashboard/postskursus" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row mb-3">
                        <label for="juduldepan" class="form-label">Slug</label>
                        <div class="col-sm-10">
                        <input type="text" name="juduldepan" class="form-control @error('juduldepan') is-invalid @enderror" id = "juduldepan" autofocus required value="{{ old('juduldepan') }}">
                            @error('juduldepan')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tema" class="form-label">Tema</label>
                        <div class="col-sm-10">
                        <input type="text" name="tema" class="form-control @error('tema') is-invalid @enderror" id = "tema" autofocus required value="{{ old('tema') }}">
                            @error('tema')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <div class="col-sm-10">
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id = "title" autofocus required value="{{ old('title') }}">
                            @error('title')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="isi" class="form-label">Deskripsi</label>
                        <div class="col-sm-10">
                        <input type="text" name="isi" class="form-control @error('isi') is-invalid @enderror" id = "isi" autofocus required value="{{ old('isi') }}">
                            @error('isi')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    
                    <div class="row mb-3">
                        <label for="tanggaldaftar" class="form-label">Mulai Pendaftaran</label>
                        <div class="col-sm-10">
                        <input type="text" name="tanggaldaftar" class="form-control @error('tanggaldaftar') is-invalid @enderror" id = "tanggaldaftar" autofocus required value="{{ old('tanggaldaftar') }}">
                            @error('tanggaldaftar')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tanggaltutup" class="form-label">Akhir Pendaftaran</label>
                        <div class="col-sm-10">
                        <input type="text" name="tanggaltutup" class="form-control @error('tanggaltutup') is-invalid @enderror" id = "tanggaltutup" autofocus required value="{{ old('tanggaltutup') }}">
                            @error('tanggaltutup')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tanggalmulai" class="form-label">Pelaksanaan Kelas</label>
                        <div class="col-sm-10">
                        <input type="text" name="tanggalmulai" class="form-control @error('tanggalmulai') is-invalid @enderror" id = "tanggalmulai" autofocus required value="{{ old('tanggalmulai') }}">
                            @error('tanggalmulai')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="durasi" class="form-label">Durasi Program</label>
                        <div class="col-sm-10">
                        <input type="text" name="durasi" class="form-control @error('durasi') is-invalid @enderror" id = "durasi" autofocus required value="{{ old('durasi') }}">
                            @error('durasi')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="kelaslive" class="form-label">Sesi Kelas Live</label>
                        <div class="col-sm-10">
                        <input type="text" name="kelaslive" class="form-control @error('kelaslive') is-invalid @enderror" id = "kelaslive" autofocus required value="{{ old('kelaslive') }}">
                            @error('kelaslive')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <div class="col-sm-10">
                        <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" id = "harga" autofocus required value="{{ old('harga') }}">
                            @error('harga')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tanggaltutup" class="form-label">Link</label>
                        <div class="col-sm-10">
                        <input type="text" name="tanggaltutup" class="form-control @error('tanggaltutup') is-invalid @enderror" id = "tanggaltutup" autofocus required value="{{ old('tanggaltutup') }}">
                            @error('tanggaltutup')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>



                    <div class="row mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <div class="col-sm-10">
                          <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" id = "foto"
                          name="foto" onchange="previewImage()">
                          @error('foto')
                            <div class= "invalid-feedback">
                              {{ $message }}
                            </div>
                          @enderror
                        </div>
                    </div>

                        <div class="row mb-3">
                          <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Unggah</button>
                          </div>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->
@endsection