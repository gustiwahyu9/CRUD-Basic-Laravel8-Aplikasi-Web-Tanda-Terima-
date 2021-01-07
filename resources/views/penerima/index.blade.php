@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Penerima</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                  <li class="breadcrumb-item active">Penerima</li>
              </ol>
          </div>
        </div>
    </div>
</section>
<div class="card">
    <div class="card-header">
      @if(session('sukses'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fas fa-check"></i>
        {{session('sukses')}}
      </div>
      @endif

      @if(session('hapus'))
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fas fa-check"></i>
        {{session('hapus')}}
      </div>
      @endif

      @if(session('update'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fas fa-check"></i>
        {{session('update')}}
      </div>
      @endif
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row">
              <div class="col-sm-12 col-md-6"></div>
              <div class="col-sm-12 col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  @if(Request::get('cari'))
                  <a href="/penerima" class="btn btn-primary" style="margin-bottom: 15px;"><i class="fas fa-arrow-left"></i> Kembali</a>
                  @else
                  <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 15px;">
                    <i class="fas fa-plus"></i> Tambah Penerima
                  </button>
                  @endif
                    <a href="/penerima/exportpdf" class="btn btn-md btn-primary" style="float: right;"><i class="fas fa-print"></i> Export PDF</a>
                  <form action="/penerima" method="GET">
                    <div class="input-group md-form form-sm form-2 pl-0 mb-2">
                      <input class="form-control my-0 py-1" type="text" name="cari" placeholder="Search by..." aria-label="Search">
                      <div class="input-group-append">
                        <span class="input-group-text cyan lighten-2" id="basic-text1"><i class="fas fa-search text-grey"
                            aria-hidden="true"></i></span>
                      </div>
                    </div>
                </form>
                
                    <div style="overflow-x: auto;">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">

          <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">NAMA PENERIMA</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">TANGGAL PENYERAHAN</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">SATKER</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">PETUGAS</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">LPJ BULAN</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">TAHUN</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">AKSI</th>
          </tr>
        </thead>
        <tbody>
        @foreach($penerima as $pnm)
        <tr role="row">
          <td tabindex="0" class="sorting_1">{{$pnm->nama_lengkap}}</td>
          <td>{{date('d F Y', strtotime($pnm->tanggal_penyerahan))}}</td>
          <td>{{$pnm->satker}}</td>
          <td>{{$pnm->petugas}}</td>
          <td>{{$pnm->lpj_bulan}}</td>
          <td>{{$pnm->tahun}}</td>
          <td>
          <a href="/penerima/{{$pnm->id}}/detail" class="btn btn-info btn-sm">Detail</a>
          <a href="/penerima/{{$pnm->id}}/edit" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal-{{$pnm->id}}">Edit</a>
            <a href="/penerima/{{$pnm->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin mau dihapus?')">Delete</a>
          </td>
        </tr>
        @endforeach
    </tbody>
      </table>
    </div>
    </div>
  </div>
      <div class="row">
        <div class="col-sm-12 col-md-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
        </div>
          <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
        <ul class="pagination" name="pagination" id="pagination">
          <li class="paginate_button page-item previous disabled" id="example2_previous">
            <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
          </li>
          <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
          </li>
          <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a>
          </li>
          <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a>
          </li>
          <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a>
          </li>
          <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a>
          </li>
          <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
    </div>
    <!-- /.card-body -->
  </div>

  <!-- Modal tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Penerima</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/penerima/create" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" aria-describedby="text" id="nama_lengkap">
            <small id="text" class="form-text text-muted">Masukan Nama Lengkap.</small>
          </div>
          <div class="form-group">
            <label>Tanggal Penyerahan</label>
            <input type="date" name="tanggal_penyerahan" class="form-control" id="tanggal_penyerahan" aria-describedby="date">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">LPJ Bulan</label>
            <select class="form-control" name="lpj_bulan" id="lpj_bulan">
              <option>JANUARI</option>
              <option>FEBRUARI</option>
              <option>MARET</option>
              <option>APRIL</option>
              <option>MEI</option>
              <option>JUNI</option>
              <option>JULI</option>
              <option>AGUSTUS</option>
              <option>SEPTEMBER</option>
              <option>OKTOBER</option>
              <option>NOVEMBER</option>
              <option>DESEMBER</option>
            </select>
          </div>
          <div class="form-group">
            <label>Tahun</label>
            <input type="text" name="tahun" class="year form-control" id="year">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="L" checked>
              <label class="form-check-label" for="exampleRadios1">
                Laki - Laki
              </label>
            </div>
        </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2" value="P">
            <label class="form-check-label" for="exampleRadios2">
              Perempuan
            </label>
          </div>
          <br>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Satker</label>
          <select class="form-control" name="satker" id="satker">
            <option>UPT BAHASA</option>
            <option>UPT PERPUSTAKAAN</option>
            <option>UPT PP & K</option>
            <option>UPT TEKNOLOGI INFORMASI</option>
            <option>UPT LAB TERPADU</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Petugas</label>
          <input type="text" name="petugas" class="form-control" aria-describedby="text" id="petugas">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Bukti</label>
          <input type="file" name="image" class="form-control" aria-describedby="text" id="image">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- /modal tambah -->

<!-- Modal edit -->
@foreach ($penerima as $data)
<div class="modal fade" id="editModal-{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModal">Edit Data Penerima</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/penerima/{{$data->id}}/update" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="hidden" name="id" id="id" value="{{$data->id}}">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" aria-describedby="text" id="nama_lengkap" value="{{$data->nama_lengkap}}">
            <small id="text" class="form-text text-muted">Masukan Nama Lengkap.</small>
          </div>
          <div class="form-group">
            <label>Tanggal Penyerahan</label>
          <input type="date" name="tanggal_penyerahan" class="form-control" id="tanggal_penyerahan" aria-describedby="date" value="{{$data->tanggal_penyerahan}}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">LPJ Bulan</label>
            <select class="form-control" name="lpj_bulan" id="lpj_bulan" value="{{$data->lpj_bulan}}">
              <option value="JANUARI" @if($data->lpj_bulan == 'JANUARI') selected @endif>JANUARI</option>
              <option value="FEBRUARI" @if($data->lpj_bulan == 'FEBRUARI') selected @endif>FEBRUARI</option>
              <option value="MARET" @if($data->lpj_bulan == 'MARET') selected @endif>MARET</option>
              <option value="APRIL" @if($data->lpj_bulan == 'APRIL') selected @endif>APRIL</option>
              <option value="MEI" @if($data->lpj_bulan == 'MEI') selected @endif>MEI</option>
              <option value="JUNI" @if($data->lpj_bulan == 'JUNI') selected @endif>JUNI</option>
              <option value="JULI" @if($data->lpj_bulan == 'JULI') selected @endif>JULI</option>
              <option value="AGUSTUS" @if($data->lpj_bulan == 'AGUSTUS') selected @endif>AGUSTUS</option>
              <option value="SEPTEMBER" @if($data->lpj_bulan == 'SEPTEMBER') selected @endif>SEPTEMBER</option>
              <option value="OKTOBER" @if($data->lpj_bulan == 'OKTOBER') selected @endif>OKTOBER</option>
              <option value="NOVEMBER" @if($data->lpj_bulan == 'NOVEMBER') selected @endif>NOVEMBER</option>
              <option value="DESEMBER" @if($data->lpj_bulan == 'DESEMBER') selected @endif>DESEMBER</option>
            </select>
          </div>
          <div class="form-group">
            <label>Tahun</label>
            <input type="text" name="tahun" class="form-control" id="year" value="{{$data->tahun}}">
          </div>
          <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="L" @if($data->jenis_kelamin == 'L') checked @endif>
                <label class="form-check-label" for="exampleRadios1">
                  Laki - Laki
                </label>
              </div>
          </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2" value="P" @if($data->jenis_kelamin == 'P') checked @endif>
              <label class="form-check-label" for="exampleRadios2">
                Perempuan
              </label>
            </div>
            <br>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Satker</label>
            <select class="form-control" name="satker" id="satker">
              <option value="UPT BAHASA" @if($data->satker == 'UPT BAHASA') selected @endif>UPT BAHASA</option>
              <option value="UPT PERPUSTAKAAN" @if($data->satker == 'UPT PERPUSTAKAAN') selected @endif>UPT PERPUSTAKAAN</option>
              <option value="UPT PP & K" @if($data->satker == 'UPT PP & K') selected @endif>UPT PP & K</option>
              <option value="UPT TEKNOLOGI INFORMASI" @if($data->satker == 'UPT TEKNOLOGI INFORMASI') selected @endif>UPT TEKNOLOGI INFORMASI</option>
              <option value="UPT LAB TERPADU" @if($data->satker == 'UPT LAB TERPADU') selected @endif>UPT LAB TERPADU</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Petugas</label>
            <input type="text" name="petugas" class="form-control" aria-describedby="text" id="petugas" value="{{$data->petugas}}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Bukti</label>
            @if ($data->image)
            <img src="{{$data->getImage()}}" target="_blank" style="width: 150px; height: 150px;">
            @endif
            <input type="file" name="image" class="form-control" aria-describedby="text" id="image" value="{{$data->image}}">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="update" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  @endforeach
  <!-- /modal edit -->

@endsection