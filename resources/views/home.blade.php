@extends('layouts.main')

@section('container')
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Product example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/product/">

    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

{{-- bs icon --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

{{-- my style --}}
<link rel="stylesheet" href="/css/style.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-8 p-lg-8 mx-auto my-8">
      <h1 class="display-8 fw-normal">Smart Meter / Hybrid Energy Monitor</h1>
      <img src="{{ ('img/smartgrid.jpg') }}" width="70%" height="70%">
      <p class="lead fw-normal">An Iot system in the form of software and hardware that provides convenience in recording electricity usage by utilizing various communication technologies. 
        And by implementing the Smart Grid in all its aspects, it will 
        provide greater benefits because the number of renewable generation and storage units that are distributed and integrated is 
        distributed and integrated storage units increases and of course CO2 emissions decrease, reliability increases through 
        network optimization because it has the ability to self-correct or self-heal.</p>
      <a class="btn btn-outline-secondary" href="https://forms.gle/TbCSoCtUr8XEBD1T7">Click here to register Smart Meter at your home</a>
    </div>
    {{-- <div class="product-device shadow-sm d-none d-md-block"></div> --}}
    {{-- <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div> --}}
  
</div>
<div >
<h1 class="display-12 fw-normal text-center">Benefits of Smart Meter</h1>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <img src="{{ ('img/catatan.png') }}" >
        <h2 class="display-7">Smart Meter</h2>
        <p class="lead">Melakukan pencataan otomasis pemakaian pelanggan</p>
      </div>
      {{-- <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> --}}
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-7">Smart Meter</h2>
        <p class="lead">Integrase dengan system billing dan payment perusahaan</p>
        <img src="{{ ('img/billing.png') }}" >
      </div>
      {{-- <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> --}}
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <img src="{{ ('img/realtime.jpg') }}" >
        <h2 class="display-7">Smart Meter</h2>
        <p class="lead">Data pengukuran pelanggan lebih valid dan dapat di monitoring</p>
      </div>
      {{-- <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> --}}
    </div>
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-7">Smart Meter</h2>
        <p class="lead">Tidak perlu di lakukan pencatatan manual pelanggan</p>
        <img src="{{ ('img/data.png') }}" >
      </div>
      {{-- <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> --}}
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 p-3">
        <img src="{{ ('img/analisis.png') }}" >
        <h2 class="display-7">Smart Meter</h2>
        <p class="lead">Tidak ada tunggakan tagihan pelanggan, Karena dapat menganalisis tarif</p>
      </div>
      {{-- <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> --}}
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-7">Smart Meter</h2>
        <p class="lead">Mempermudah pelanggan dalam monitoring konsumsi pemakaian sehingga pelanggan bisa melakukan efisiensi</p>
        <img src="{{ ('img/monitoring.png') }}" >
      </div>
      {{-- <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div> --}}
    </div>
  </div>
</div>
</main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
@endsection

