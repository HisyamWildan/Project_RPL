@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-black me-3 mr-3">
          <i class="mdi mdi-library"></i>
          </span>Daftar Berita
      </h3>
      <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
          </ul>
      </nav>
  </div>
  <a class="btn btn-primary" href="{{ url('/berita/create')}}" role="button" ><i class="mdi mdi-plus"></i>Tambah Berita</a>
  <div>
    <br>
  </div>
  <div class="row">
      <div class="col-12 grid-margin">
          <div class="card">
              <div class="card-body">
                  @if(session('success'))
                    <div class="alert alert-success">
                      {{ session('success')}}
                    </div>
                    <script>
                      setTimeout(function() {
                          $('.alert').fadeOut('slow');
                      }, 4000);
                    </script>
                  @endif
                  <h4 class="card-title">Daftar Berita</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered text-center">
                      <thead>
                        <tr class="table-success">
                          <th> No </th>
                          <th> Judul Berita </th>
                          <th> Isi </th>
                          <th> Tanggal </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($berita as $berita)
                            
                        <tr class="table-secondary">
                            <td> {{ $loop->iteration}} </td>
                            <td> {{ $berita->judul_berita}} </td>
                            <td> {{ $berita->isi_berita}} </td>
                            <td> {{ $berita->tanggal}} </td>
                            <td>
                              <a class="btn btn-warning btn-sm" href="{{ url('/berita/edit', $berita->id)}}">Edit</a>
                              <form action="{{ url('/berita/destroy', $berita->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" onclick="return confirmDelete(event)" type="submit">Delete</button>

                              </form>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
<script>
  function confirmDelete(event) {
    if(!confirm("Apakah anda yakin ingin menghapus Berita?")){
      event.preventDefault()
      return false;
    }
  }
</script>