<table id="table2" class="table table-bordered table-striped" style="width: 100%;">
  <thead>
    <tr>
      <th>No</th>
      <th>No Index</th>
      <th>Nama pasien</th>
      <th>Alamat</th>
    </tr>
  </thead>
  <tbody id="pasien">
    <?php $i=1;foreach ($pasien as $p): ?>
	  <tr>
	    <td><?php echo $i++; ?></td>
	    <td><?php echo $p->id; ?></td>
	    <td><?php echo $p->nama; ?></td>
	    <td><?php echo $p->alamat; ?></td>
	  </tr>
	<?php endforeach ?>
  </tbody>
</table>
<script>
	$('#table2').DataTable({
         "pageLength": 100000000,
          dom: 'Bftrip',
            buttons : [
              {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [0,1,2,3]
                }
              },
              {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [0,1,2,3]
                }
              },
              {
                extend: 'csvHtml5',
                exportOptions: {
                    columns: [0,1,2,3]
                }
              },
              {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [0,1,2,3]
                }
              },
            ],
        })
</script>
