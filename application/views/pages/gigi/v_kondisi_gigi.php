<!-- Main content -->
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gigi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gigi</a></li>
        <li class="active">Kondisi gigi</li>
      </ol>
    </section>
    <section class="content">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Kondisi gigi</h3>
          <button class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#modal-tambah">Tambah</button>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama kondisi</th>
              <th>Kode warna</th>
              <th>Tindakan</th>
            </tr>
            </thead>
            <tbody id="kondisi">
              
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
        <form action="<?php echo base_url('gigi/tambah_kondisi'); ?>" method="post" id="form" modal="#modal-tambah" fn="data_kondisi">
          <input type="text" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" hidden>
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah kondisi</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="nama_kondisi">Nama kondisi</label>
                <input type="text" class="form-control" name="nama_kondisi" required>
              </div>
              <div class="form-group">
                <label for="kw">Kode warna</label>
                <!-- <input type="text" class="form-control my-colorpicker1" name="kode_warna" required> -->
                <div class="input-group my-colorpicker1">
                  <input type="text" name="kw" class="form-control">
                  <div class="input-group-addon">
                    <i></i>
                    <i class="fa fa-hand-pointer-o"></i>
                  </div>
                </div>
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
        <form action="<?php echo base_url('gigi/edit'); ?>" method="post" id="form" modal="#modal-edit" fn="data_kondisi">
          <input type="text" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" hidden>
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit kondisi</h4>
          </div>
          <div class="modal-body">
              <input type="text" id="id" name="id" hidden>
              <div class="form-group">
                <label for="nama_kondisi">Nama kondisi</label>
                <input type="text" class="form-control" name="nama_kondisi" id="nk" required>
              </div>
              <div class="form-group">
                <label for="kw">Kode warna</label>
                <!-- <input type="text" class="form-control my-colorpicker1" name="kode_warna" required> -->
                <div class="input-group my-colorpicker1">
                  <div class="input-group-addon">
                    <span style="padding: 5px;width: 15px;height: 15px;display: inline-block;" id="wr"></span>
                  </div>
                  <input type="text" name="kode_warna" id="kw" class="form-control">
                  <div class="input-group-addon">
                    <i></i>
                    <i class="fa fa-hand-pointer-o"></i>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="$('#wr').css('background','#fff');">Batal</button>
            <button type="submit" class="btn btn-primary pull-right" onclick="$('#wr').css('background','#fff');">Simpan</button>
          </div>
        </div>
        </form>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url('resources/') ?>bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script>
      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      function data_kondisi () {
        $.ajax({
          url : '<?php echo base_url('gigi/data_kondisi') ?>',
          dataType: 'json',
          success: function (x) {
            var baris = '';
            var j = 1;
            for (var i = 0;  i < x.length ; i++) {
              baris += '<tr><td>'+j+++'</td><td>'+x[i].nama_kondisi+'</td><td><label class="label" style="background:'+x[i].kode_warna+';">'+x[i].kode_warna+'</label></td><td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit" onclick="edit('+x[i].id_kg+')"><i class="fa fa-edit"></i></button>&nbsp;<button class="btn btn-danger btn-sm" onclick="hapus('+x[i].id_kg+')"><i class="fa fa-trash"></i></button></td></td></tr>' 
            }
            $('tbody#kondisi').html(baris);
          }
        })

      }
      $(document).ready(function () {
        data_kondisi();
      })
      function edit (id) {
        $.ajax({
          url: '<?php echo base_url('gigi/data_edit') ?>',
          type : 'get',
          data : 'id='+id,
          dataType : 'json',
          success : function (x) {
            $('#id').val(x.id_kg);
            $('#nk').val(x.nama_kondisi);
            $('#kw').val(x.kode_warna);
            $('#wr').css('background',x.kode_warna);
          }
        })
      }
      function hapus (id) {
        swal({
          title: 'Apakah anda yakin',
          text: 'data akan terhapus permanen',
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
              url: '<?php echo base_url('gigi/hapus') ?>',
              type: 'get',
              data: 'id='+id,
              success: function () {
                data_kondisi();
              }
            })
          }
        })
      }
    </script>