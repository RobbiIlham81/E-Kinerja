@extends('admin.layouts.base')

@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Kinerja</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="mt-1">
                <button class="btn btn-primary" data-toggle="modal" data-target="#tambah_peg">Tambah Kinerja</button>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Daftar Kinerja</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pegawai</th>
                                    <th>Uraian Kegiatan</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Selesai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                                @foreach ($kinerja as $pg)
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td>{{ $pg->nama_pegawai }}</td>
                                    <td>{{ $pg->uraian_kegiatan }}</td>
                                    <td>{{ $pg->waktu_mulai }}</td>
                                    <td>{{ $pg->waktu_selesai }}</td>
                                    <td>
                                        <button class="btn btn-success" data-toggle="modal" data-target="#edit_peg"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger"  data-toggle="modal" data-target="#hapus_peg"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

</div><!-- /#right-panel -->

<!-- Modal -->
<div class="modal fade" id="tambah_peg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kinerja</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Pegawai</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="" class="form-control"><small class="form-text text-muted">mohon masukkan nama pegawai</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Uraian Kegiatan</label></div>
                    <div class="col-12 col-md-9"><textarea class="form-control" name="" id="" cols="30" rows="10"></textarea><small class="form-text text-muted">mohon masukkan uraian kegiatan</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Waktu Mulai</label></div>
                    <div class="col-12 col-md-9"><input type="time" id="text-input" name="text-input" placeholder="" class="form-control"><small class="form-text text-muted">masukkan waktu mulai</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Waktu Selesai</label></div>
                    <div class="col-12 col-md-9"><input type="time" id="text-input" name="text-input" placeholder="" class="form-control"><small class="form-text text-muted">masukkan waktu selesai</small></div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Tambah</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="edit_peg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Kinerja</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Pegawai</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="" class="form-control"><small class="form-text text-muted">mohon masukkan nama pegawai</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Uraian Kegiatan</label></div>
                    <div class="col-12 col-md-9"><textarea class="form-control" name="" id="" cols="30" rows="10"></textarea><small class="form-text text-muted">mohon masukkan uraian kegiatan</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Waktu Mulai</label></div>
                    <div class="col-12 col-md-9"><input type="time" id="text-input" name="text-input" placeholder="" class="form-control"><small class="form-text text-muted">masukkan waktu mulai</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Waktu Selesai</label></div>
                    <div class="col-12 col-md-9"><input type="time" id="text-input" name="text-input" placeholder="" class="form-control"><small class="form-text text-muted">masukkan waktu selesai</small></div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-success">Sinpan</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="hapus_peg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Hapus Kinerja</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h6 class="text-danger">Anda Yakin ingin menghapus kinerja ini ?</h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('extra_script')
<script src="{{ asset('asset/sufee-admin') }}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('asset/sufee-admin') }}/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('asset/sufee-admin') }}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('asset/sufee-admin') }}/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('asset/sufee-admin') }}/vendors/jszip/dist/jszip.min.js"></script>
<script src="{{ asset('asset/sufee-admin') }}/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="{{ asset('asset/sufee-admin') }}/vendors/pdfmake/build/vfs_fonts.js"></script>
<script src="{{ asset('asset/sufee-admin') }}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('asset/sufee-admin') }}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('asset/sufee-admin') }}/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="{{ asset('asset/sufee-admin') }}/assets/js/init-scripts/data-table/datatables-init.js"></script>
@endsection