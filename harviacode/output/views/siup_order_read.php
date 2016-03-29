<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Siup_order Read</h2>
        <table class="table">
	    <tr><td>Date</td><td><?php echo $date; ?></td></tr>
	    <tr><td>Id Unit</td><td><?php echo $id_unit; ?></td></tr>
	    <tr><td>Id Product</td><td><?php echo $id_product; ?></td></tr>
	    <tr><td>Stver</td><td><?php echo $stver; ?></td></tr>
	    <tr><td>Stacc</td><td><?php echo $stacc; ?></td></tr>
	    <tr><td>Stpch</td><td><?php echo $stpch; ?></td></tr>
	    <tr><td>Stord</td><td><?php echo $stord; ?></td></tr>
	    <tr><td>Ket</td><td><?php echo $ket; ?></td></tr>
	    <tr><td>Tgl Ver</td><td><?php echo $tgl_ver; ?></td></tr>
	    <tr><td>Tgl Acc</td><td><?php echo $tgl_acc; ?></td></tr>
	    <tr><td>Tgl Pch</td><td><?php echo $tgl_pch; ?></td></tr>
	    <tr><td>Tgl Terima</td><td><?php echo $tgl_terima; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('siup_order') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>