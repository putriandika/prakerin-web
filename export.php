<?php
    include('connection_tambah_bank.php');
    $query      = mysqli_query($connect, "SELECT * FROM tb_bank");
    $results    = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<html>
<head>
  <title>Sekolah Menengah Kejuruan Negeri 1 Pasuruan
                        Jalan Veteran 11 Pasuruan, Telp/Fax (0343) 421380
                        Website: www.smkn1-pasuruan.sch.id, Email: smkn1pasuruan@yahoo.com</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

    <style>
        .container{
            text-transform: uppercase;
        }
    </style>

<body>
<div class="container">
<table width="90%" height="100px">
                <tr>
                    <td style="margin-left: 30px;"><img src="oke.png" width="120px" height="130px"></td>
                    <td>
                        <center>Sekolah Menengah Kejuruan Negeri 1 Pasuruan
                        <p> Jalan Veteran 11 Pasuruan, Telp/Fax (0343) 421380</p>
                        <p> Website: www.smkn1-pasuruan.sch.id, Email: smkn1pasuruan@yahoo.com</p>
                        </center>
                    </td>
                </tr>
            </table>
			<h2 class="text-center mt-5 mb-5">data bank</h2>
				<div class="data-tables datatable-dark">
					
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mt-3" id="mauexport">
                        <thead class="table-info">
                            <tr>
                                <th class="col-xs-12 text-center" style="width: 50px;">No</th>
                                <th class="col-xs-12 text-center" style="width:200px;">nama bank</th>
                                <th class="col-xs-12 text-center" style="width:200px;">url</th>
                                <th class="col-xs-12 text-center" style="width:200px;">logo</th>
                                <th class="col-xs-12 text-center" style="width:200px;">status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $result) : ?>
                                <tr class="text-center table-light" style="font-weight: 500;">
                                    <td><?php echo $result['id']?></td>
                                    <td><?php echo $result['nama']?></td>
                                    <td style="text-transform: lowercase;"><?php echo $result['url']?></td>
                                    <td><?php echo $result['logo']?></td>
                                    <td><?php echo $result['status']?></td>
                                </tr>
                            <?php endforeach ?>               
                        </tbody>   
                    </table>
					
				</div>
</div>
	
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );

} );



</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>