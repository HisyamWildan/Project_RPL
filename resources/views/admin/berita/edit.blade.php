@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-black me-3 mr-3">
                <i class="mdi mdi-car"></i>
            </span>Berita
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <h3>Edit Berita</h3><br />
            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- form validasi -->
            <form class="forms-sample" action="{{ url('/berita/update', $berita->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="judul_berita" class="col-sm-4 col-form-label">Judul Berita</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="judul_berita" name="judul_berita"
                            placeholder="Judul Berita" value="{{ $berita->judul_berita }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isi_berita" class="col-sm-4 col-form-label">Isi Berita</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="isi_berita" name="isi_berita"
                            placeholder="Isi Berita" value="{{ $berita->isi_berita}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                            placeholder="Tanggal" value="{{ $berita->tanggal }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-primary me-2">Reset</button>
            </form>
        </div>
    </div>
</div>
@endsection