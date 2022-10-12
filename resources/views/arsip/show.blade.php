@extends('layouts.index')
@section('title', 'Lihat')
@section('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h2 class="card-title">
                                    Arsip Surat >> Lihat
                                </h2>
                            </div>
                            <div class="col-auto">
                                <a href="/" class="btn btn-sm btn-primary"><i class="mdi mdi-arrow-left-bold"></i>
                                    Kembali
                                </a>
                            </div>
                        </div>
                         <form class="form-horizontal mt-4">
                            <div class="row">
                                <label class="text-md-right" for="no_surat">Nomor: {{$arsip->no_surat}}</label>
                            </div>
                            <div class="row">
                                <label class="text-md-right" for="no_surat">Kategori: {{$arsip->kategori}}</label>
                            </div>
                            <div class="row">
                                <label class="text-md-right" for="no_surat">Judul: {{$arsip->judul}}</label>
                            </div>
                            <div class="row">
                                <label class="text-md-right" for="no_surat">Waktu Unggah: {{$arsip->created_at}}</label>
                            </div>
                            <div class="row">
                                <iframe src="{{url('/arsip/'.$arsip->file.'#toolbar=0')}}" width="100%" height="500px"></iframe>
                            </div>
                        </form>
                        <br>
                            <a href="/" class="btn btn-primary" >Kembali</a>
                            <a href="/arsip/{{$arsip->file}}"download class="btn btn-danger" >Unduh</a>
                            <a href="/" class="btn btn-warning" >Edit/Ganti File</a>
      </br>
                    </div>
                </div>

            </div>

        </div>
</div>
@endsection