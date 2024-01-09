@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-black me-3 mr-3">
                <i class="mdi mdi-map-marker-multiple"></i>
            </span>Lokasi
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
            <h3>Tambah Lokasi</h3><br />
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
            <form class="forms-sample" action="{{ url('/lokasi/store')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="nama_lokasi" class="col-sm-4 col-form-label">Nama Lokasi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi"
                            placeholder="Nama Lokasi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            placeholder="Alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_olahraga" class="col-sm-4 col-form-label">Jenis Olahraga</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="jenis_olahraga" name="jenis_olahraga"
                            placeholder="Jenis Olahraga">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                            placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="waktu" class="col-sm-4 col-form-label">Waktu</label>
                    <div class="col-sm-8">
                        <input type="time" class="form-control" id="waktu " name="waktu"
                            placeholder="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-primary me-2">Reset</button>
            </form>
        </div>
    </div>  
</div>
@endsection