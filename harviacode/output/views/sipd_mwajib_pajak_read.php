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
        <h2 style="margin-top:0px">Sipd_mwajib_pajak Read</h2>
        <table class="table">
	    <tr><td>Nm BadanUsaha</td><td><?php echo $Nm_BadanUsaha; ?></td></tr>
	    <tr><td>Alamat Usaha</td><td><?php echo $Alamat_Usaha; ?></td></tr>
	    <tr><td>Alamat No Usaha</td><td><?php echo $Alamat_No_Usaha; ?></td></tr>
	    <tr><td>Rt Usaha</td><td><?php echo $Rt_Usaha; ?></td></tr>
	    <tr><td>Rw Usaha</td><td><?php echo $Rw_Usaha; ?></td></tr>
	    <tr><td>Rk Usaha</td><td><?php echo $Rk_Usaha; ?></td></tr>
	    <tr><td>Kd Wil Usaha</td><td><?php echo $Kd_Wil_Usaha; ?></td></tr>
	    <tr><td>Telp Usaha</td><td><?php echo $Telp_Usaha; ?></td></tr>
	    <tr><td>Kotak Pos</td><td><?php echo $Kotak_Pos; ?></td></tr>
	    <tr><td>Kode Usaha</td><td><?php echo $Kode_Usaha; ?></td></tr>
	    <tr><td>Modal Kerja</td><td><?php echo $Modal_Kerja; ?></td></tr>
	    <tr><td>Nm Pemilik</td><td><?php echo $Nm_Pemilik; ?></td></tr>
	    <tr><td>Jabatan</td><td><?php echo $Jabatan; ?></td></tr>
	    <tr><td>Alamat Pemilik</td><td><?php echo $Alamat_Pemilik; ?></td></tr>
	    <tr><td>Alamat No Pemilik</td><td><?php echo $Alamat_No_Pemilik; ?></td></tr>
	    <tr><td>Rt Pemilik</td><td><?php echo $Rt_Pemilik; ?></td></tr>
	    <tr><td>Rw Pemilik</td><td><?php echo $Rw_Pemilik; ?></td></tr>
	    <tr><td>Rk Pemilik</td><td><?php echo $Rk_Pemilik; ?></td></tr>
	    <tr><td>Kd Wil Pemilik</td><td><?php echo $Kd_Wil_Pemilik; ?></td></tr>
	    <tr><td>Telp Usaha Pemilik</td><td><?php echo $Telp_Usaha_Pemilik; ?></td></tr>
	    <tr><td>Kotak Pos Pemilik</td><td><?php echo $Kotak_Pos_Pemilik; ?></td></tr>
	    <tr><td>Jml Izin</td><td><?php echo $Jml_Izin; ?></td></tr>
	    <tr><td>LAktif</td><td><?php echo $lAktif; ?></td></tr>
	    <tr><td>Keterangan</td><td><?php echo $Keterangan; ?></td></tr>
	    <tr><td>TglNonAktif</td><td><?php echo $TglNonAktif; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('sipd_mwajib_pajak') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>