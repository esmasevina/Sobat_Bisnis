@extends('dashboard.layouts.maindash')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Registrasi Admin</h1>
</div>
<!-- General Form Elements -->
<form action ="/dashboard/register" method="post">
                @csrf
                <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-7">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id = "name" placeholder = "Nama" autofocus required value="{{ old('name') }}">
                            @error('name')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-7">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id ="email" placeholder ="name@example.com" required value="{{ old('email') }}">
                            @error('email')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-7">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id ="password" placeholder ="password" required value="{{ old('password') }}">
                            @error('password')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="notelp" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-7">
                            <input type="text" name="notelp" class="form-control @error('notelp') is-invalid @enderror" id ="notelp" placeholder ="08xxxxxxxxxx" required value="{{ old('notelp') }}">
                            @error('password')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-sm-5">
                            <center><button type="submit" class="btn btn-primary">Daftar</button></center>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->
@endsection