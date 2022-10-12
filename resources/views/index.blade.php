@extends('layouts.index')
@section('title', 'Buku | SMPN 1 Kandat')
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h2 class="card-title">
                                    &ensp;&ensp;Arsip Surat
                                </h2>
                                <p>&ensp;&ensp;Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.<br> &ensp;&ensp;
                                Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>
                            </div>
                        </div>
                        <br>
                        <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                                <thead>
                                    <tr>
                                        <th>Nomor Surat</th>
                                        <th>Kategori</th>
                                        <th>Judul</th>
                                        <th>Waktu Pengerjaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($arsip as $item)
                                    <tr>
                                        <td>{{$item->no_surat}}</td>
                                        <td>{{$item->kategori}}</td>
                                        <td>{{$item->judul}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                        @if(Auth::user()->hasRole('admin'))
                                            <a href="/arsip/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                                            @endif
                                            <a href="/buku/{{$item->id}}/show" class="btn btn-primary">Show</a>
                                            @if(Auth::user()->hasRole('admin'))
                                            <form action="/buku/{{$item->id}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" onclick="return confirm('Yakin ingin hapus ini?')" class="btn btn-danger btn-sm my-1" value="Delete">
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="/buku/create" class="btn btn-sm btn-primary">
                        Arsipkan Surat..
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('script')
    <script src="{{ url('/assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ url('/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function() {
            var table = $('#example1').DataTable({
                lengthMenu: [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, "All"]
                ],
            });
        });
    </script>
    @endpush
    @push('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.0/datatables.min.css" />
    @endpushs