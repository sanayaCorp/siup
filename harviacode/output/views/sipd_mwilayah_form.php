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
        <h2 style="margin-top:0px">Sipd_mwilayah <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('Nama') ?></label>
            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">Stat  <?php echo form_error('Stat_') ?></label>
            <input type="text" class="form-control" name="Stat_" id="Stat_" placeholder="Stat " value="<?php echo $Stat_; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NamaKabupaten <?php echo form_error('NamaKabupaten') ?></label>
            <input type="text" class="form-control" name="NamaKabupaten" id="NamaKabupaten" placeholder="NamaKabupaten" value="<?php echo $NamaKabupaten; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NamaKecamatan <?php echo form_error('NamaKecamatan') ?></label>
            <input type="text" class="form-control" name="NamaKecamatan" id="NamaKecamatan" placeholder="NamaKecamatan" value="<?php echo $NamaKecamatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">KodeKabupaten <?php echo form_error('KodeKabupaten') ?></label>
            <input type="text" class="form-control" name="KodeKabupaten" id="KodeKabupaten" placeholder="KodeKabupaten" value="<?php echo $KodeKabupaten; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">KodeKecamatan <?php echo form_error('KodeKecamatan') ?></label>
            <input type="text" class="form-control" name="KodeKecamatan" id="KodeKecamatan" placeholder="KodeKecamatan" value="<?php echo $KodeKecamatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Changed By <?php echo form_error('changed_by') ?></label>
            <input type="text" class="form-control" name="changed_by" id="changed_by" placeholder="Changed By" value="<?php echo $changed_by; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Last Modified <?php echo form_error('Last_Modified') ?></label>
            <input type="text" class="form-control" name="Last_Modified" id="Last_Modified" placeholder="Last Modified" value="<?php echo $Last_Modified; ?>" />
        </div>
	    <input type="hidden" name="WilayahID" value="<?php echo $WilayahID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('sipd_mwilayah') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>