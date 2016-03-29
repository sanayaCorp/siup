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
        <h2 style="margin-top:0px">Sipd_mwajib_pajak <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nm BadanUsaha <?php echo form_error('Nm_BadanUsaha') ?></label>
            <input type="text" class="form-control" name="Nm_BadanUsaha" id="Nm_BadanUsaha" placeholder="Nm BadanUsaha" value="<?php echo $Nm_BadanUsaha; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat Usaha <?php echo form_error('Alamat_Usaha') ?></label>
            <input type="text" class="form-control" name="Alamat_Usaha" id="Alamat_Usaha" placeholder="Alamat Usaha" value="<?php echo $Alamat_Usaha; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat No Usaha <?php echo form_error('Alamat_No_Usaha') ?></label>
            <input type="text" class="form-control" name="Alamat_No_Usaha" id="Alamat_No_Usaha" placeholder="Alamat No Usaha" value="<?php echo $Alamat_No_Usaha; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Rt Usaha <?php echo form_error('Rt_Usaha') ?></label>
            <input type="text" class="form-control" name="Rt_Usaha" id="Rt_Usaha" placeholder="Rt Usaha" value="<?php echo $Rt_Usaha; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Rw Usaha <?php echo form_error('Rw_Usaha') ?></label>
            <input type="text" class="form-control" name="Rw_Usaha" id="Rw_Usaha" placeholder="Rw Usaha" value="<?php echo $Rw_Usaha; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Rk Usaha <?php echo form_error('Rk_Usaha') ?></label>
            <input type="text" class="form-control" name="Rk_Usaha" id="Rk_Usaha" placeholder="Rk Usaha" value="<?php echo $Rk_Usaha; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Kd Wil Usaha <?php echo form_error('Kd_Wil_Usaha') ?></label>
            <input type="text" class="form-control" name="Kd_Wil_Usaha" id="Kd_Wil_Usaha" placeholder="Kd Wil Usaha" value="<?php echo $Kd_Wil_Usaha; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Telp Usaha <?php echo form_error('Telp_Usaha') ?></label>
            <input type="text" class="form-control" name="Telp_Usaha" id="Telp_Usaha" placeholder="Telp Usaha" value="<?php echo $Telp_Usaha; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Kotak Pos <?php echo form_error('Kotak_Pos') ?></label>
            <input type="text" class="form-control" name="Kotak_Pos" id="Kotak_Pos" placeholder="Kotak Pos" value="<?php echo $Kotak_Pos; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">Kode Usaha <?php echo form_error('Kode_Usaha') ?></label>
            <input type="text" class="form-control" name="Kode_Usaha" id="Kode_Usaha" placeholder="Kode Usaha" value="<?php echo $Kode_Usaha; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Modal Kerja <?php echo form_error('Modal_Kerja') ?></label>
            <input type="text" class="form-control" name="Modal_Kerja" id="Modal_Kerja" placeholder="Modal Kerja" value="<?php echo $Modal_Kerja; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Pemilik <?php echo form_error('Nm_Pemilik') ?></label>
            <input type="text" class="form-control" name="Nm_Pemilik" id="Nm_Pemilik" placeholder="Nm Pemilik" value="<?php echo $Nm_Pemilik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jabatan <?php echo form_error('Jabatan') ?></label>
            <input type="text" class="form-control" name="Jabatan" id="Jabatan" placeholder="Jabatan" value="<?php echo $Jabatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat Pemilik <?php echo form_error('Alamat_Pemilik') ?></label>
            <input type="text" class="form-control" name="Alamat_Pemilik" id="Alamat_Pemilik" placeholder="Alamat Pemilik" value="<?php echo $Alamat_Pemilik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat No Pemilik <?php echo form_error('Alamat_No_Pemilik') ?></label>
            <input type="text" class="form-control" name="Alamat_No_Pemilik" id="Alamat_No_Pemilik" placeholder="Alamat No Pemilik" value="<?php echo $Alamat_No_Pemilik; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Rt Pemilik <?php echo form_error('Rt_Pemilik') ?></label>
            <input type="text" class="form-control" name="Rt_Pemilik" id="Rt_Pemilik" placeholder="Rt Pemilik" value="<?php echo $Rt_Pemilik; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Rw Pemilik <?php echo form_error('Rw_Pemilik') ?></label>
            <input type="text" class="form-control" name="Rw_Pemilik" id="Rw_Pemilik" placeholder="Rw Pemilik" value="<?php echo $Rw_Pemilik; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Rk Pemilik <?php echo form_error('Rk_Pemilik') ?></label>
            <input type="text" class="form-control" name="Rk_Pemilik" id="Rk_Pemilik" placeholder="Rk Pemilik" value="<?php echo $Rk_Pemilik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kd Wil Pemilik <?php echo form_error('Kd_Wil_Pemilik') ?></label>
            <input type="text" class="form-control" name="Kd_Wil_Pemilik" id="Kd_Wil_Pemilik" placeholder="Kd Wil Pemilik" value="<?php echo $Kd_Wil_Pemilik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Telp Usaha Pemilik <?php echo form_error('Telp_Usaha_Pemilik') ?></label>
            <input type="text" class="form-control" name="Telp_Usaha_Pemilik" id="Telp_Usaha_Pemilik" placeholder="Telp Usaha Pemilik" value="<?php echo $Telp_Usaha_Pemilik; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Kotak Pos Pemilik <?php echo form_error('Kotak_Pos_Pemilik') ?></label>
            <input type="text" class="form-control" name="Kotak_Pos_Pemilik" id="Kotak_Pos_Pemilik" placeholder="Kotak Pos Pemilik" value="<?php echo $Kotak_Pos_Pemilik; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">Jml Izin <?php echo form_error('Jml_Izin') ?></label>
            <input type="text" class="form-control" name="Jml_Izin" id="Jml_Izin" placeholder="Jml Izin" value="<?php echo $Jml_Izin; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">LAktif <?php echo form_error('lAktif') ?></label>
            <input type="text" class="form-control" name="lAktif" id="lAktif" placeholder="LAktif" value="<?php echo $lAktif; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Keterangan <?php echo form_error('Keterangan') ?></label>
            <input type="text" class="form-control" name="Keterangan" id="Keterangan" placeholder="Keterangan" value="<?php echo $Keterangan; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">TglNonAktif <?php echo form_error('TglNonAktif') ?></label>
            <input type="text" class="form-control" name="TglNonAktif" id="TglNonAktif" placeholder="TglNonAktif" value="<?php echo $TglNonAktif; ?>" />
        </div>
	    <input type="hidden" name="NPWPD" value="<?php echo $NPWPD; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('sipd_mwajib_pajak') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>