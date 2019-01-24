<!-- Main content -->
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pasien
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Pasien</a></li>
        <li><a href="#"><?php echo $this->uri->segment(3); ?></a></li>
        <li class="active">list tanggal kedatangan</li>
      </ol>
    </section>
    <section class="content">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Tanggal kedangan</h3>
        </div>
        <div class="box-body">
          <ul class="list-group">
            <?php foreach ($pasien as $p): ?>
              <li class="list-group-item">
                <a href="<?php echo base_url('pasien/detail/').$this->uri->segment(3).'/'.$p->waktu_berobat ?>">
                  <?php echo date('d M Y h:i:s', strtotime($p->waktu_berobat)); ?>
                </a>
                <span class="badge badge-pill" style="background: blue;"><i class="fa fa-eye"></i></span>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="#pasien" class="btn btn-warning" onclick="$('#main').load('<?php echo base_url('pasien/index') ?>')"><i class="fa  fa-arrow-circle-left"></i>&nbsp;Kembali</a>
        </div>
      </div>
    </div>
    </section>
    <!-- /.content -->

    <script>
      
    </script>