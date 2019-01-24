<!-- Main content -->
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengguna
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pengguna</a></li>
        <li class="active">list pengguna</li>
      </ol>
    </section>
    <section class="content">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">List Pengguna</a></li>
        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Pengguna Aktif</a></li>
        <li class="pull-right"><button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-user-plus"></i>&nbsp;Tambah</button></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
          <table id="table1" class="table table-bordered table-striped" style="width: 100%;">
            <thead>
              <tr>
                <th>No</th>
                <th>Photo</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Gender</th>
                <th>Level</th>
                <th>Tindakan</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
          <table id="table2" class="table table-bordered table-striped" style="width: 100%;">
            <thead>
              <tr>
                <th>No</th>
                <th>Photo</th>
                <th>Username</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    </section>
    <!-- /.content -->
    <div class="modal fade" id="modal-tambah">
      <div class="modal-dialog">
        <form action="<?php echo base_url('user/tambah'); ?>" method="post" id="form1" modal="#modal-tambah" fn="data_dokter" pass="#p1" passw="#p2">
          <input type="text" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" hidden>
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah User</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for="username_t">Username</label>
                <input type="text" name="username_t" class="form-control">
              </div>
              <div class="form-group">
                <label for="password_t">Password</label>
                <input type="password" name="password_t" id="p1" class="form-control">
              </div>
              <div class="form-group">
                <label for="repassword">Ulangi Password</label>
                <input type="password" name="repassword" id="p2" class="form-control">
              </div>
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="nama" name="nama" class="form-control">
              </div>
              <div class="form-group">
                <label for="gender" >Gender</label>
                <select name="gender" class="form-control">
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="perm">Level</label>
                <select name="perm" class="form-control">
                  <?php foreach ($perm as $p): ?>
                    <option value="<?= $p->perm_id ?>"><?= $p->perm_desc ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="photo">Photo profil</label>
                <input type="file" name="photo" class="form-control"> 
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
        <form action="<?php echo base_url('user/edit'); ?>" method="post" id="form2" modal="#modal-edit" fn="getDataForTable" pass="#p1-e" passw="#p2-e">
          <input type="text" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" hidden>
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit user</h4>
          </div>
          <div class="modal-body">
              <input type="text" name="id" id="id" hidden>
              <div class="form-group">
                <label for="username_t">Username</label>
                <input type="text" name="username_t" id="username" class="form-control">
              </div>
              <div class="form-group">
                <label for="password_t">Password</label>
                <input type="password" name="password_t" id="p1-e" class="form-control">
              </div>
              <div class="form-group">
                <label for="repassword">Ulangi Password</label>
                <input type="password" name="repassword" id="p2-e" class="form-control">
              </div>
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="nama" name="nama" id="nama" class="form-control">
              </div>
              <div class="form-group">
                <label for="gender" >Gender</label>
                <select name="gender" class="form-control" id="gender">
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="perm">Level</label>
                <select name="perm" id="permisionss" class="form-control">
                  <?php foreach ($perm as $p): ?>
                    <option value="<?= $p->perm_id ?>"><?= $p->perm_desc ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="photo">Photo profil</label>
                <input type="file" name="photo" class="form-control"> 
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
      var table;
    // $(document).ready(function() {
      getDataForTable();
      getDataForTable2();
        
    // });
    function getDataForTable() {
      var table = $('#table1').DataTable({ 

            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo site_url('user/get_data_users')?>",
                "type": "POST",
            },

             
            "columnDefs": [
            { 
                "targets": [ 0,1,6 ], 
                "orderable": false, 
            },
            ],
            destroy: true
        });
      return table;
    }
    function getDataForTable2 () {
       var table2 = $('#table2').DataTable({ 

            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo site_url('user/get_data_users_on')?>",
                "type": "POST",
            },

             
            "columnDefs": [
            { 
                "targets": [ 0,1 ], 
                "orderable": false, 
            },
            ],
            destroy: true,
        }); 
       return table2;
    }
    function hapus (id) {
        swal({
          title: 'Apakah anda yakin',
          text: 'data pengguna akan terhapus permanen',
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
              url: '<?php echo base_url('user/hapus') ?>',
              type: 'get',
              data: 'id_user='+id,
              success: function () {
                getDataForTable().ajax.reload();
                getDataForTable2().ajax.reload();
              }
            })
          }
        })
      }
      function user_edit (id) {
        $.ajax({
          url: '<?php echo base_url('user/data_edit') ?>',
          type: 'get',
          dataType: 'json',
          data: 'id_user='+id,
          success: function (rs) {
            $('#id').val(rs.id_user);
            $('#username').val(rs.username);
            $('#nama').val(rs.fullname);
            $('#gender').val(rs.gender);
            $('#permisionss').val(rs.level);
          }
        })
      }
    </script>