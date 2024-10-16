@extends('dashboard.layouts.maindash')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>
<div class="row">
    <div class="col-md-3 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="edukasi">
            <div class="jumlahkursus">
                
            </div>
        </div>
    </div>
    <div class="col-md-3 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="kursus">
            <div class="jumlahedukasi">

            </div>
        </div>
    </div>
</div>
    @endsection