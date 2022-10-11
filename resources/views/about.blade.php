@extends('layouts.main')

@section('container')
    <h3>Data Diri</h3>


    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">Profile</div>
          <div class="card-body table-responsive">
    <table class="table table-striped table-hover table-sm ">
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{ auth()->user()->name }}</td>
        </tr>
        <tr>
            <td>User Name</td>
            <td>:</td>
            <td>{{ auth()->user()->username }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ auth()->user()->email }}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td>{{ auth()->user()->NIK }}</td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td>{{ auth()->user()->telepon }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ auth()->user()->alamat }}</td>
        </tr>
        <tr>
            <td>Image</td>
            <td>:</td>
            <td>{{ auth()->user()->image }}</td>
        </tr>
    </table>
    <div class="d-grid gap-2 col-2 mx-auto">
    <button class="btn btn-lg btn-primary " type="submit">Edit Profile</button>
</div>
</div>
</div>
</div>
</div>
</div>
    

{{--     
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail "> --}}
@endsection
  
 