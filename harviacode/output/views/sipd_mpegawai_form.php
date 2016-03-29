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
        <h2 style="margin-top:0px">Sipd_mpegawai <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Pegawai <?php echo form_error('Nama_Pegawai') ?></label>
            <input type="text" class="form-control" name="Nama_Pegawai" id="Nama_Pegawai" placeholder="Nama Pegawai" value="<?php echo $Nama_Pegawai; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jabatan <?php echo form_error('Jabatan') ?></label>
            <input type="text" class="form-control" name="Jabatan" id="Jabatan" placeholder="Jabatan" value="<?php echo $Jabatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('Alamat') ?></label>
            <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" value="<?php echo $Alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kota <?php echo form_error('Kota') ?></label>
            <input type="text" class="form-control" name="Kota" id="Kota" placeholder="Kota" value="<?php echo $Kota; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NoTelp <?php echo form_error('NoTelp') ?></label>
            <input type="text" class="form-control" name="NoTelp" id="NoTelp" placeholder="NoTelp" value="<?php echo $NoTelp; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">KC <?php echo form_error('KC') ?></label>
            <input type="text" class="form-control" name="KC" id="KC" placeholder="KC" value="<?php echo $KC; ?>" />
        </div>
	    <input type="hidden" name="NIP" value="<?php echo $NIP; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('sipd_mpegawai') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>