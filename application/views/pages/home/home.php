<!-- Main content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Antrian
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Antrian</a></li>
        <li class="active">list antrian</li>
      </ol>
    </section>
    <section class="content">
        <!-- Default box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title judul">Pasien baru</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-sm-6">
              <button type="button" class="tombol tambah biru" data-toggle="modal" data-target="#modal-default">Tambah Pasien Baru <br><p class="kecil">Jika pasien belum pernah berkunjung dan baru berkunjung kali ini</p></button>
            </div>
            <div class="col-sm-6">
              <button class="tombol tambah hijau" data-toggle="modal" data-target="#modal-cari">Lihat Pasien Lama <br><p class="kecil">Jika pasien sudah pernah berkunjung sebelumnya dan data sudah ada</p></button>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      <!-- Default box -->
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title judul">Antrian</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-hover table-striped tabel_antrian">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody id="tbody">
              
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <form action="<?php echo base_url('app/tambah_pasien'); ?>" method="post" id="form" modal="#modal-default" fn="data_antrian">
          <input type="text" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" hidden>
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Pasien</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="nama" class="col-form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
              <div class="form-group">
                <label for="ttl" class="col-form-label">Tempat tanggal lahir:</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
              </div>
              <div class="form-group">
                <label for="tgl_lahir" class="col-form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
              </div>
              <div class="form-group">
                <label for="nik" class="col-form-label">NIK:</label>
                <input type="number" class="form-control" id="nik" name="nik">
              </div>
              <div class="form-group">
                <label class="col-form-label">Jenis kelamin:</label>
                <span><input type="radio" name="jk" value="Laki-laki">Laki-laki</span>
                <span><input type="radio" name="jk" value="Perempuan"> Perempuan</span>
              </div>
              <div class="form-group">
                <label for="pekerjaan" class="col-form-label">Pekerjaan:</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
              </div>
              <div class="form-group">
                <label for="ibu_kandung" class="col-form-label">Ibu kandung:</label>
                <input type="text" class="form-control" id="ibu_kandung" name="ibu_kandung">
              </div>
              <div class="form-group">
                <label for="alamat" class="col-form-label">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
              </div>
              <div class="form-group">
                <label for="tlp" class="col-form-label">Telephone:</label>
                <input type="text" class="form-control" id="tlp" name="tlp" max="12">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Baru</button>
          </div>
        </div>
        </form>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-cari">
      <div class="modal-dialog">
        <form action="<?php echo base_url('app/tambah_pasien'); ?>" method="post" id="form" modal="#modal-cari">
          <input type="text" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" hidden>
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Cari pasien</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <input type="search" class="form-control" id="cari" name="cari" placeholder="Masukan nama pasien" onkeyup="live_search()">
              </div>
              <h5>Data pencarian</h5>
              <div id="wrap-pencarian" style="padding: 0 10px;">
                <div class="accordion" id="accordionExample">

                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
          </div>
        </div>
        </form>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <script>
      function data_antrian() {
        var baris = '';
        $.ajax({
          url : '<?php echo base_url('app/data_antrian_pasien'); ?>',
          type : 'get',
          dataType : 'JSON',
          beforeSend: function () {
             
          },
          success: function (data) {
            j = 1;
            for (var i = 0; i < data.length; i++) {
              baris += '<tr><td>'+j+++'</td><td>'+data[i].nama+'</td><td>'+data[i].status_pelayanan+'</td><td><a href="<?php echo base_url('app/layani/') ?>'+data[i].id+'/'+data[i].nama+'" class="btn btn-info"><i class="fa fa-mail-forward"></i>&nbsp;Layani</a>&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-danger" data-dismiss="modal" onclick=batal("'+data[i].id_detail+'")><i class="fa fa-times"></i>&nbsp;Batal</button></td></tr>';
            }
            $('#tbody').html(baris);
          }
        });
      }
      data_antrian();

      function live_search() {
        var keyword = $('#cari').val();
        var hasil_pencarian = '';
        if (keyword !== '') {
          $.ajax({
            url: '<?php echo base_url('app/live_search') ?>',
            type: 'get',
            data: 'q='+keyword,
            dataType: 'JSON',
            success : function (hasil) {
              var j = 1;
              if (hasil[0].status == 1) {
                for (var i = 0; i < hasil.length; i++) {
                  hasil_pencarian += '<div class="card"><div class="card-header" id="headingOne" style="margin-bottom: 1em;"><div class="row"><div class="col-sm-9"><button type="button" class="btn btn-info btn-sm" data-toggle="collapse" data-target="#collapse'+j+'" aria-expanded="true"><i class="fa fa-eye"></i></button>'+hasil[i].nama+'</div><div class="col-sm-3"><button type="button" class="btn btn-primary btn-sm float-right" onclick=daftar_pasien_lama("'+hasil[i].id+'")><i class="fa fa-plus"></i></button></div></div></div><div id="collapse'+j+'" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample"><div class="card-body"><ul style="list-style: none;"><li>Ibu kandung : '+hasil[i].ibu_kandung+'</li><li>NIK : '+hasil[i].nik+'</li></ul></div></div></div>';
                  j++;
                }
                $('#accordionExample').html(hasil_pencarian);
              } else {
                $('.list').html(hasil.pesan);
              }
            }
          })
        }
      }

      function daftar_pasien_lama (id) {
        $.ajax({
          url : '<?php echo base_url('app/daftar_pasien_lama') ?>',
          type: 'GET',
          data: 'id_pasien='+id,
          success : function (rs) {
            $('#modal-cari').hide();
            $('.modal-backdrop').remove();
            $(document.body).removeClass('modal-open');
            data_antrian();
            swal({
              position: 'top-end',
              type: 'success',
              title: rs.pesan,
              showConfirmButton: false,
              timer: 1500
            });
          }
        })
      }
      function batal (id) {
        swal({
          title: 'Apakah anda yakin',
          text: 'data antrian untuk pasien dengan id '+id+' akan di batalkan',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Batalkan'
        }).then((result) => {
          if (result.value) {
            swal(
              'Dibatalkan',
              'Antrian dengan id '+id+' dibatalkan',
              'success'
            )
            $.ajax({
              url: '<?php echo base_url('app/batal') ?>',
              type: 'GET',
              data: 'id_pasien='+id,
              success: function () {
                data_antrian();

              }
            })
          }
        })
      }
    </script>