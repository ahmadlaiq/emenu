@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Daftar Kategori</h1>
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
            <h4>Data Daftar Kategori</h4>
            <div class="card-header-action">
              <a href="/tambah-data-kategori" class="btn btn-primary">Tambah Data</a> 
            </div>
          </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-md">
            <tbody><tr>
              <th>#</th>
              <th>Nama</th>
              <th>Action</th>
            </tr>
            @foreach ($kategori as $data)
            <tr>
              <td>{{ $no++  }}</td>
              <td>{{ $data->nama }}</td>
              <td>
                <a class="btn btn-success btn-sm" href="{{ route('halaman-update-kategori', $data->id)}}">Edit</a>
                <a href="#" data-id="{{ $data->id }}" class="btn btn-danger btn-sm swal-confirm">
                  <form action="{{ route('delete-kategori',$data->id)}}" id="delete{{ $data->id }}" method="POST">
                      @csrf
                      @method('delete')
                  </form>
                  Hapus</a>
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

@push('page-scripts')
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js')}}"></script>

@endpush

@push('after-scripts')
<script>
$(".swal-confirm").click(function(e) {
    id = e.target.dataset.id;
    swal({
        title: 'Apakah anda yakin?',
        text: 'Data yang dihapus tidak dapat dikembalikan!',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            swal('Data berhasil dihapus!', {
            icon: 'success',
            });
        $(`#delete${id}`).submit();
        } else {
            swal('File anda aman!');
        }
      });
  });
</script>
@endpush