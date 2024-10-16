@extends('dashboard.layouts.maindash')

@section('container')
@if(session()->has('addSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session("addSuccess")}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Unggah Konten Edukasi Bisnis</h1>
</div>

 <!-- General Form Elements -->
 <form action ="/dashboard/postsedukasi" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row mb-3">
                        <label for="filter" class="form-label">Kategori</label>
                        <div class="col-sm-10">
                        <input type="text" name="filter" class="form-control @error('filter') is-invalid @enderror" id = "filter" autofocus required value="{{ old('filter') }}">
                            @error('filter')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

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
                        <label for="author" class="form-label">Penulis</label>
                        <div class="col-sm-10">
                        <input type="text" name="author" class="form-control @error('title') is-invalid @enderror" id = "author" autofocus required value="{{ old('author') }}">
                            @error('author')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="publish_at" class="form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" name="publish_at" class="form-control @error('publish_at') is-invalid @enderror" id = "publish_at" required value="{{ old('publish_at') }}">
                            @error('publish_at')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="titlebawah" class="form-label">Sub Judul</label>
                        <div class="col-sm-10">
                        <input type="text" name="titlebawah" class="form-control @error('titlebawah') is-invalid @enderror" id = "titlebawah" autofocus required value="{{ old('titlebawah') }}">
                            @error('titlebawah')
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
                        <label for="kontenatas" class="form-label">Konten Atas</label>
                        <div class="col-sm-10">
                        <textarea input type="text" name="kontenatas" class="form-control" id="kontenatas" rows="12"></textarea>
                            @error('kontenatas')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="kontenbawah" class="form-label">Konten Bawah</label>
                        <div class="col-sm-10">
                        <textarea input type="text" name="kontenbawah" class="form-control" id="kontenbawah" rows="12"></textarea>
                            @error('kontenbawah')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>
            
                        <div class="row mb-5">
                          <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Unggah</button>
                          </div>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->
@endsection