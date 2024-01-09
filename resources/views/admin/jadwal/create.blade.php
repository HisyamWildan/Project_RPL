@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-black me-3 mr-3">
                <i class="mdi mdi-map-marker-multiple"></i>
            </span>Jadwal
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
            <h3>Tambah Jadwal</h3><br />
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
            <form class="forms-sample" action="{{ url('/jadwal/store')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="id_lokasi" class="col-sm-4 col-form-label">Lokasi Id</label>
                    <div class="col-sm-8">
                        <select name="id_lokasi" id="id_lokasi" class="form-control">
                            @foreach ($lokasi as $lokasi)
                                <option value="{{ $lokasi->id }}">{{ $lokasi->nama_lokasi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="biaya" class="col-sm-4 col-form-label">Biaya</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="biaya" name="biaya"
                            placeholder="Biaya">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kuota" class="col-sm-4 col-form-label">Kuota</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kuota" name="kuota"
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