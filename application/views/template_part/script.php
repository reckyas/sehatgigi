<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('resources/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('resources/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('resources/') ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('resources/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('resources/') ?>dist/js/demo.js"></script>
<script src="<?php echo base_url('resources/js/script.js') ?>"></script>
<script src="<?php echo base_url('resources/') ?>plugins/iCheck/icheck.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('resources/') ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('resources/') ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Sweet Alert -->
<script src="<?php echo base_url('resources/') ?>bower_components/PACE/pace.min.js"></script>
<script src="<?php echo base_url('resources/plugins/sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>
<script src="<?php echo base_url('resources/plugins/Buttons-1.5.2/js/buttons.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('resources/plugins/Buttons-1.5.2/js/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('resources/plugins/Buttons-1.5.2/js/buttons.colVis.min.js') ?>"></script>
<script src="<?php echo base_url('resources/plugins/Buttons-1.5.2/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('resources/plugins/JSZip-2.5.0/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('resources/plugins/pdfmake-0.1.36/pdfmake.min.js') ?>"></script>
<script src="<?php echo base_url('resources/plugins/pdfmake-0.1.36/vfs_fonts.js') ?>"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
	  window.onload = function(){
	    var hash = (window.location.hash).replace('#', '');
	    switch (hash) {
	    	case 'pasien':
	    		$('#main').load('<?php echo base_url('pasien/index') ?>')
	    		break;
	    	case 'antrian':
	    		$('#main').load('<?php echo base_url('app/antrian') ?>')
	    		break;
	    	case 'dokter':
	    		$('#main').load('<?php echo base_url('dokter/index') ?>')
	    		break;
	    	case 'kondisi_gigi':
	    		$('#main').load('<?php echo base_url('gigi/index') ?>')
	    	case 'user':
	    		$('#main').load('<?= base_url('user/index') ?>');
	    	default:
	    		// statements_def
	    		break;
	    }
	}
  })
  $(document).ajaxStart(function () {
    Pace.restart();
    update_csrf();
  })
  function update_csrf () {
  	var csrf_name = "<?=$this->security->get_csrf_token_name();?>";
  	var csrf_token = "<?=$this->security->get_csrf_hash();?>";
  	$('input[name='+csrf_name+']').val(csrf_token);
  	console.log(csrf_name);
  	console.log(csrf_token);
  }
</script>
</body>
</html>
