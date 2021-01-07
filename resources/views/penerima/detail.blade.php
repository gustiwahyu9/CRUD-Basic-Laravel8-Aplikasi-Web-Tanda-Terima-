@extends('layouts.master')

@section('content')

<div class="main-content">
  <div class="container">
        <div class="container-fluid">
              <div class="row">
                      <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                              <div class="text-center">
                                <h3 class="profile-username text-center">Bukti</h3>
                                <p class="text-muted text-center">Ketuk untuk melihat</p>
                                <a href="{{$penerima->getImage()}}" target="_blank">
                                <img class="profile-user-img img-fluid img-thumbnail" src="{{$penerima->getImage()}}" alt="image">
                                </a>
                              </div>
                              <h3 class="profile-username text-center">{{$penerima->nama_lengkap}}</h3>
                              <p class="text-muted text-center">{{$penerima->satker}}</p>
                            </div>
                            <a href="/penerima">
                              <button type="submit" class="btn btn-primary" style="margin-left: 25%; margin-bottom: 15px;" aria-hidden="true">Kembali</button>
                            </a>
                      </div>
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Keterangan</h3>
                      </div>
                      <!-- /.card-header -->
                        <div class="card-body">
                          <strong><i class="fas fa-clock mr-1"></i> Tanggal Penyerahan</strong>
          
                          <p class="text-muted">
                            {{date('d F Y', strtotime($penerima->tanggal_penyerahan))}}
                          </p>
          
                          <hr>
          
                          <strong><i class="fas fa-user mr-1"></i> Petugas</strong>
          
                          <p class="text-muted">
                            {{$penerima->petugas}}
                          </p>
          
                          <hr>
          
                          <strong><i class="fas fa-pencil-alt mr-1"></i> LPJ Bulan</strong>
          
                          <p class="text-muted">
                            {{$penerima->lpj_bulan}}
                          </p>

                          <hr>
          
                          <strong><i class="fas fa-calendar-alt mr-1"></i> Tahun</strong>
          
                          <p class="text-muted">
                            {{$penerima->tahun}}
                          </p>

                          <hr>
          
                          <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
          
                          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                        </div>
                      <!-- /.card-body -->
                    </div>
              </div>
        </div>
  </div>
</div>

@endsection