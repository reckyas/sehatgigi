<!-- Main content -->
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pasien
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pasien</a></li>
        <li class="active">list pasien</li>
      </ol>
    </section>
    <section class="content">
      <div id="wrap-katpas">
        
      </div>
      <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Semua</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="true">Laporan</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <table id="table1" class="table table-bordered table-striped" style="width: 100%;">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Index</th>
                      <th>Nama pasien</th>
                      <th>Alamat</th>
                      <th>Tindakan</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="row">
                  <form action="#" method="post">
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label for="awal">Tanggal awal</label>
                        <input type="date" name="awal" class="form-control" id="awal">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label for="akhir">Tanggal akhir</label>
                        <input type="date" name="akhir" class="form-control" id="akhir">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <button type="button" class="btn btn-primary" style="margin-top: 25px;" onclick="tampilkan()">Tampilkan</button>
                    </div>
                  </form>
                </div>
                <div class="row">
                  <div class="col-sm-12" id="pasien">
                    
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
    </div>
    </section>
    <!-- /.content -->

    <script>
      var table;
    function getDataForTable () {
        //datatables
        var table;  
        table = $('#table1').DataTable({ 
 
            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo site_url('pasien/get_data_pasien')?>",
                "type": "POST",
            },

             
            "columnDefs": [
            { 
                "targets": [ 0,4 ], 
                "orderable": false, 
            },
            ],
            destroy: true
        });
      }
      getDataForTable();
    // });
      function hapus (id) {
        swal({
          title: 'Apakah anda yakin',
          text: 'data pasien akan terhapus permanen',
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
              url: '<?php echo base_url('pasien/hapus') ?>',
              data: 'id='+id,
              type: 'get',
              success: function () {
                getDataForTable().ajax.reload();
              }
            })
          }
        })
      }
      function tampilkan () {
        $.ajax({
          url: '<?php echo base_url('pasien/data_pasien_waktu'); ?>',
          data : 'awal='+$('#awal').val()+'&akhir='+$('#akhir').val(),
          type: 'get',
          dataType: 'html',
          success: function (response) {
            $('#pasien').html(response);
          }
        })
      }
    </script>