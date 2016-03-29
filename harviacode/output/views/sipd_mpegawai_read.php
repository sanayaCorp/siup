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
        <h2 style="margin-top:0px">Sipd_mpegawai Read</h2>
        <table class="table">
	    <tr><td>Nama Pegawai</td><td><?php echo $Nama_Pegawai; ?></td></tr>
	    <tr><td>Jabatan</td><td><?php echo $Jabatan; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $Alamat; ?></td></tr>
	    <tr><td>Kota</td><td><?php echo $Kota; ?></td></tr>
	    <tr><td>NoTelp</td><td><?php echo $NoTelp; ?></td></tr>
	    <tr><td>KC</td><td><?php echo $KC; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('sipd_mpegawai') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>