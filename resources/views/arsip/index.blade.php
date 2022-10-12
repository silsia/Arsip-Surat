@extends('layouts.index')
@section('title', 'Lihat')
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
                                    &ensp;Arsip Surat
                                </h2>
                                <p>&ensp;&ensp;Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.<br> 
                                &ensp;&ensp;Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>
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
                                        <td>
                                            <a type="button" class="btn btn-danger"  id="myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="{{$item->id}}">
                                              Hapus
                                            </a>
                                            <a  href="/arsip/{{$item->file}}" download class="btn btn-warning">Unduh</a>
                                            <a href="/arsip/{{$item->id}}/lihat" class="btn btn-primary">Lihat >></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus arsip surat ini?
      </div>
      <div class="modal-footer">
        <form id="modal-ok" action="" method="POST">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger btn-sm my-1" value="Delete">
        </form>
      </div>
    </div>
  </div>
</div>
                <div class="col-auto">
                    <a href="/arsip/create" class="btn btn-sm btn-primary">
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
    <script type="text/javascript">
        $('#exampleModal').on('shown.bs.modal', function () {
  $('#myBtn').trigger('focus')
})

        $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  var refer = '/arsip/'+recipient+'/hapus'

  document.getElementById("modal-ok").action = refer;
  //document.getElementById("modal-ok").href=refer
})
    </script>
    @endpush
    @push('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.0/datatables.min.css" />
    @endpush