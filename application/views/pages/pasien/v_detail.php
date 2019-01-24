<!-- Main content -->
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pasien
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Pasien</a></li>
        <li><a href="#"><?php echo $this->uri->segment(3); ?></a></li>
        <li class="active"><?php echo $pasien['waktu_berobat']; ?></li>
      </ol>
    </section>
    <section class="content">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Informasi</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-sm-6">
              <h3 style="border-bottom: 2px solid blue;"><i class="fa fa-user"></i>&nbsp;Data pribadi</h3>
              <div class="wrap-info" style="padding: 0 25px;">
                <table class="table">
                  <tr>
                    <td style="width: 40%;"><h5>No index</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['id'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>Nama</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['nama'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>TTL</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['ttl'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>Gender</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['jenis_kelamin'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>NIK</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['nik'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>Pekerjaan</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['pekerjaan'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>Nama ibu kandung</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['ibu_kandung'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>Alamat</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['alamat'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>No telepon</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['tlp'] ?></h5></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="col-sm-6">
              <h3 style="border-bottom: 2px solid blue;"><i class="fa  fa-medkit"></i>&nbsp;Data medik</h3>
              <div class="wrap-info" style="padding: 0 25px;">
                <table class="table">
                  <tr>
                    <td style="width: 40%;"><h5>Golongan darah</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['golongan_darah'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>Tekanan darah</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['tekanan_darah'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>Penyakit jantung</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['penyakit_jantung'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>Diabetes</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['diabetes'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>Heemopilia</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['heemopilia'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>Hepatitis</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['hepatitis'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>Gastritis</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['gastritis'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>Penyakit lainya</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['penyakit_lainya'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>Alergi obat</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['alergi_terhadap_obat'] ?></h5></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><h5>Alergi makanan</h5></td>
                    <td> <h5>:</h5> </td>
                    <td><h5><?php echo $pasien['alergi_terhadap_makanan'] ?></h5></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <div class="box box-success">
        <div class="box-header with-border">
          <div class="box-title"><i class="fa fa-stethoscope"></i>&nbsp;Data diagnosa</div>
        </div>
        <div class="box-body">
          <table class="table">
            <tr>
              <td style="width: 10%;"><h5>Anamnesa</h5></td>
              <td style="width: 5%;"> <h5>:</h5> </td>
              <td><h5><?php echo $pasien['anamnesa'] ?></h5></td>
            </tr>
            <tr>
              <td style="width: 10%;"><h5>Pemeriksaan</h5></td>
              <td style="width: 5%;"> <h5>:</h5> </td>
              <td><h5><?php echo $pasien['pemeriksaan'] ?></h5></td>
            </tr>
            <tr>
              <td style="width: 10%;"><h5>Diagnosis</h5></td>
              <td style="width: 5%;"> <h5>:</h5> </td>
              <td><h5><?php echo $pasien['diagnosis'] ?></h5></td>
            </tr>
            <tr>
              <td style="width: 10%;"><h5>Obat</h5></td>
              <td style="width: 5%;"> <h5>:</h5> </td>
              <td><h5><?php echo $pasien['obat'] ?></h5></td>
            </tr>
            <tr>
              <td style="width: 10%;"><h5>Tindakan</h5></td>
              <td style="width: 5%;"> <h5>:</h5> </td>
              <td><h5><?php echo $pasien['tindakan'] ?></h5></td>
            </tr>
            <tr>
              <td style="width: 10%;"><h5>Biaya</h5></td>
              <td style="width: 5%;"> <h5>:</h5> </td>
              <td><h5><?php echo $pasien['biaya'] ?></h5></td>
            </tr>
            <tr>
              <td style="width: 10%;"><h5>Catatan</h5></td>
              <td style="width: 5%;"> <h5>:</h5> </td>
              <td><h5><?php echo $pasien['catatan'] ?></h5></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="box box-danger collapsed-box btn-sm">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-qrcode">&nbsp;</i>Tabel odontogram</h3>
          <button class="btn btn-info pull-right" onclick="$('#wo').load('<?php echo base_url('gigi/odonto_pelayanan/').$pasien['id']; ?>')" data-widget="collapse">Tampilkan</button>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-9">
              <div id="wo" style="width: 100%;background: #eaeaea;padding: 10px;position: relative;">
                
              </div>
            </div>
            <div class="col-md-3">
              <div>
                <h4>Posisi gigi :</h4>
                <span id="psg"></span>
              </div>
                <h4>Kondisi :</h4>
              <div id="plist">
                <?php foreach ($odonto_kondisi as $ok): ?>
                  <div style="width: 100%;padding: 5px;color: #fff;background: <?php echo $ok->kode_warna; ?>;text-shadow: 1px 1px 1px #999;border-radius: 4px;" class="list-kondisi" id="<?php echo 'K'.$ok->id_kg; ?>" cdata="<?php echo $ok->nama_kondisi; ?>"><?php echo $ok->nama_kondisi; ?></div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- /.content -->

    <script>
      var w = document.getElementById('wo');
      w.addEventListener('click', function (e) {
        if (e.target.classList.contains('st0')) {
          $('#psg').html(e.target.getAttribute('id'));
          var list = document.getElementsByClassName('list-kondisi');
          var cdata = '';
          var kondisi = document.getElementById(e.target.getAttribute('chose').replace('#', ''));
          plist = document.getElementById('plist');
          var clist = document.getElementById('plist').childNodes;
          for (var i = 0; i < clist.length; i++) {
            plist.insertBefore(kondisi, clist[0]);
          }
          for (var i = 0; i < list.length; i++) {
            list[i].classList.remove('terpilih');
          }
          $('#kondisi').html(cdata);
          $(e.target.getAttribute('chose')).addClass('terpilih');
          // $('#ps').val(e.target.getAttribute('pdata'));

          // pilih_dg(e.target.getAttribute('id'));
        }
      })
    </script>