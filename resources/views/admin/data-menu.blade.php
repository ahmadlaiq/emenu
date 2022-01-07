@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Daftar Menu</h1>
    </div>
    <div class="col-12 col-md-6 col-lg-12">
      @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          {{ Session::get('success') }}
        </div>
      @endif
        <div class="card">
            <div class="card-header">
                <h4>Data Daftar Menu</h4>
                <div class="card-header-action">
                  <a href="/tambah-data-menu" class="btn btn-primary">Tambah Data</a> 
                </div>
              </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped table-md">
                <tbody><tr>
                  <th>#</th>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th>Harga</th>
                  <th>Kategori</th>
                  <th>Action</th>
                </tr>
                @foreach ($menu as $data)
                <tr>
                  <td>{{ $no++  }}</td>
                  <td><img height="100" width="100" src="{{ url('/gambar/'.$data->gambar) }}" alt="" style="display:block; margin:auto;"></td>
                  <td>{{ $data->nama }}</td>
                  <td>Rp. {{ $data->harga }}</td>
                  <td>Makanan</td>
                  <td>
                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
          </div>
          <div class="card-footer text-right">
            
          </div>
        </div>
      </div>
  </section>
@endsection