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
        <h2 style="margin-top:0px">Sipd_mwilayah Read</h2>
        <table class="table">
	    <tr><td>Nama</td><td><?php echo $Nama; ?></td></tr>
	    <tr><td>Stat </td><td><?php echo $Stat_; ?></td></tr>
	    <tr><td>NamaKabupaten</td><td><?php echo $NamaKabupaten; ?></td></tr>
	    <tr><td>NamaKecamatan</td><td><?php echo $NamaKecamatan; ?></td></tr>
	    <tr><td>KodeKabupaten</td><td><?php echo $KodeKabupaten; ?></td></tr>
	    <tr><td>KodeKecamatan</td><td><?php echo $KodeKecamatan; ?></td></tr>
	    <tr><td>Changed By</td><td><?php echo $changed_by; ?></td></tr>
	    <tr><td>Last Modified</td><td><?php echo $Last_Modified; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('sipd_mwilayah') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>