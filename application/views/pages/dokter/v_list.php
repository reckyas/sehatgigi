<!-- Main content -->
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Dokter
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dokter</a></li>
        <li class="active">list</li>
      </ol>
    </section>
    <section class="content">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Dokter</h3>
          <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-tambah">Tambah</button>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Gender</th>
              <th>Tempat lahir</th>
              <th>Tanggal lahir</th>
              <th>NIK</th>
              <th>Alamat</th>
              <th>Dokter</th>
              <th>Gelar</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody id="dokter">
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
    </section>
    <!-- /.content -->

    <div class="modal fade" id="modal-tambah">
      <div class="modal-dialog">
        <form action="<?php echo base_url('dokter/tambah_dokter'); ?>" method="post" id="form" modal="#modal-tambah" fn="data_dokter">
          <input type="text" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" hidden>
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah dokter</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" required>
              </div>
              <div class="form-group">
                <label class="col-form-label">Jenis kelamin:</label>
                <span><input type="radio" name="gender" value="Laki-laki">Laki-laki</span>
                <span><input type="radio" name="gender" value="Perempuan"> Perempuan</span>
              </div>
              <div class="form-group">
                <label for="temla">Tempat lahir</label>
                <input type="text" class="form-control" name="temla" required>
              </div>
              <div class="form-group">
                <label for="tl">Tanggal lahir</label>
                <input type="date" class="form-control" name="tl" required>
              </div>
              <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="nik" required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="kategori_dokter">Kategori dokter</label>
                <select name="kategori_dokter" id="" class="form-control" required>
                  <option value="">Pilih kategori</option>
                  <?php foreach ($kategori_dokter as $kd): ?>
                    <option value="<?php echo $kd->id_katdok ?>"><?php echo $kd->nama_kategori; ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="nama_gelar">Nama gelar</label>
                <input type="text" name="nama_gelar" class="form-control" required>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
          </div>
        </div>
        </form>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="modal-edit">
      <div class="modal-dialog">
        <form action="<?php echo base_url('dokter/edit_dokter'); ?>" method="post" id="form" modal="#modal-edit" fn="data_dokter">
          <input type="text" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" hidden>
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit dokter</h4>
          </div>
          <div class="modal-body">
              <input type="text" name="id" id="id" hidden>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" required>
              </div>
              <div class="form-group">
                <label class="col-form-label">Jenis kelamin:</label>
                <span><input type="radio" name="gender" id="gender1" value="Laki-laki">Laki-laki</span>
                <span><input type="radio" name="gender" id="gender2" value="Perempuan"> Perempuan</span>
              </div>
              <div class="form-group">
                <label for="temla">Tempat lahir</label>
                <input type="text" class="form-control" name="temla" id="temla" required>
              </div>
              <div class="form-group">
                <label for="tl">Tanggal lahir</label>
                <input type="date" class="form-control" name="tl" id="tl" required>
              </div>
              <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" required>
              </div>
              <div class="form-group">
                <label for="kategori_dokter">Kategori dokter</label>
                <select name="kategori_dokter" id="kategori_dokter" class="form-control" required>
                  <option value="">Pilih kategori</option>
                  <?php foreach ($kategori_dokter as $kd): ?>
                    <option value="<?php echo $kd->id_katdok ?>"><?php echo $kd->nama_kategori; ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="nama_gelar">Nama gelar</label>
                <input type="text" name="nama_gelar" class="form-control" id="nama_gelar" required>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
          </div>
        </div>
        </form>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <script>
      $(function () {
        $('#example1').DataTable({
          'paging'      : true,
          'lengthChange': true,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : true
        })
      });

      function data_dokter () {
        $.ajax({
          url : '<?php echo base_url('dokter/data_dokter') ?>',
          dataType: 'json',
          success: function (x) {
            var baris = '';
            for (var i = 0;  i < x.length ; i++) {
              baris += '<tr><td>'+x[i].nama+'</td><td>'+x[i].jenis_kelamin+'</td><td>'+x[i].tempat_lahir+'</td><td>'+x[i].tanggal_lahir+'</td><td>'+x[i].nik+'</td><td>'+x[i].alamat+'</td><td>'+x[i].nama_kategori+'</td><td>'+x[i].nama_dengan_gelar+'</td><td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit" onclick=dokter_edit('+x[i].id_dokter+')><i class="fa fa-edit"></i></button>&nbsp;<button class="btn btn-danger btn-sm"><i class="fa fa-trash" onclick=hapus('+x[i].id_dokter+')></i></button></td></tr>' 
            }
            $('tbody#dokter').html(baris);
          }
        })

      }
      $(document).ready(function () {
        data_dokter();
      })
      function dokter_edit (id) {
        $.ajax({
          url: '<?php echo base_url('dokter/data_edit') ?>',
          type: 'get',
          dataType: 'json',
          data: 'id_dokter='+id,
          success: function (rs) {
            $('#id').val(rs.id_dokter);
            $('#nama').val(rs.nama);
            if (rs.jenis_kelamin=='Laki-laki') {
              $('#gender1').attr('checked','');
            } else if (rs.jenis_kelamin=='Perempuan') {
              $('#gender2').attr('checked',''); 
            }
            $('#temla').val(rs.tempat_lahir);
            $('#nik').val(rs.nik);
            $('#tl').val(rs.tanggal_lahir);
            $('#alamat').val(rs.alamat);
            $('#kategori_dokter').val(rs.id_katdok);
            $('#nama_gelar').val(rs.nama_dengan_gelar);
          }
        })
      }
      function hapus (id) {
        swal({
          title: 'Apakah anda yakin',
          text: 'data dokter akan terhapus permanen',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Hapus'
        }).then((result) => {
          if (result.value) {
            swal(
              'Terhapus',
              'Data berhasil di hapus',
              'success'
            )
            $.ajax({
              url: '<?php echo base_url('dokter/hapus') ?>',
              type: 'get',
              data: 'id_dokter='+id,
              success: function () {
                data_dokter();
              }
            })
          }
        })
      }
    </script>