@extends('layouts.index')
@section('title', 'Arsipkan')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <<div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h2 class="card-title">
                                    Arsip Surat » Unggah
                                </h2>
                                <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan<br>
                                    Catatan:<br>&ensp;&ensp; • Gunakan file berformat PDF
                                </p>
                            </div>
                        </div>
                        <form class="form-horizontal mt-4" method="POST" action="/arsip/store" enctype="multipart/form-data">
                            @csrf
                             <div class="row form-group">
                                <label class="col-md-3 text-md-right" for="nama">Nomor Surat</label>
                                <div class="col-md-9">
                                    <input name="no_surat" value="{{ old('no_surat') }}" id="no_surat" type="text" class="form-control @error('isbn') is-invalid @enderror" placeholder="Nomor Surat.." autofocus>
                                    @error('isbn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3 text-md-right" for="kategori">Kategori Surat</label>
                                <div class="col-md-9">
                                    <select name="kategori" id="kategori" class="form-select shadow-none  @error('kategori') is-invalid @enderror">
                                        <option value="" selected disabled>Kategori Surat</option>
                                        <option value="Undangan">Undangan</option>
                                        <option value="Pengumuman">Pengumuman</option>
                                        <option value="Nota Dinas">Nota Dinas</option>
                                        <option value="Pemberitahuan">Pemberitahuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3 text-md-right" for="judul">Judul</label>
                                <div class="col-md-9">
                                    <input name="judul" value="{{ old('judul') }}" id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul.." autofocus>
                                    @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3 text-md-right" for="file">File Surat (PDF)</label>
                                <div class="col-md-9">
                                    <input type="file" value="{{ old('file') }}" class="form-control" id="file" name="file"  required>
                                    <img src="" width="150px" alt="" id="prev" >
                                    @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">

                            <div class="col-auto">
                                <a href="/" class="btn btn-sm btn-primary"><i class="mdi mdi-arrow-left-bold"></i>
                                    Kembali
                                </a>
                            </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
</div>
</div>
@endsection
