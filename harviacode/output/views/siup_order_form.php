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
        <h2 style="margin-top:0px">Siup_order <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="datetime">Date <?php echo form_error('date') ?></label>
            <input type="text" class="form-control" name="date" id="date" placeholder="Date" value="<?php echo $date; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Id Unit <?php echo form_error('id_unit') ?></label>
            <input type="text" class="form-control" name="id_unit" id="id_unit" placeholder="Id Unit" value="<?php echo $id_unit; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Product <?php echo form_error('id_product') ?></label>
            <input type="text" class="form-control" name="id_product" id="id_product" placeholder="Id Product" value="<?php echo $id_product; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">Stver <?php echo form_error('stver') ?></label>
            <input type="text" class="form-control" name="stver" id="stver" placeholder="Stver" value="<?php echo $stver; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">Stacc <?php echo form_error('stacc') ?></label>
            <input type="text" class="form-control" name="stacc" id="stacc" placeholder="Stacc" value="<?php echo $stacc; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">Stpch <?php echo form_error('stpch') ?></label>
            <input type="text" class="form-control" name="stpch" id="stpch" placeholder="Stpch" value="<?php echo $stpch; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">Stord <?php echo form_error('stord') ?></label>
            <input type="text" class="form-control" name="stord" id="stord" placeholder="Stord" value="<?php echo $stord; ?>" />
        </div>
	    <div class="form-group">
            <label for="ket">Ket <?php echo form_error('ket') ?></label>
            <textarea class="form-control" rows="3" name="ket" id="ket" placeholder="Ket"><?php echo $ket; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="datetime">Tgl Ver <?php echo form_error('tgl_ver') ?></label>
            <input type="text" class="form-control" name="tgl_ver" id="tgl_ver" placeholder="Tgl Ver" value="<?php echo $tgl_ver; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Tgl Acc <?php echo form_error('tgl_acc') ?></label>
            <input type="text" class="form-control" name="tgl_acc" id="tgl_acc" placeholder="Tgl Acc" value="<?php echo $tgl_acc; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Tgl Pch <?php echo form_error('tgl_pch') ?></label>
            <input type="text" class="form-control" name="tgl_pch" id="tgl_pch" placeholder="Tgl Pch" value="<?php echo $tgl_pch; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Tgl Terima <?php echo form_error('tgl_terima') ?></label>
            <input type="text" class="form-control" name="tgl_terima" id="tgl_terima" placeholder="Tgl Terima" value="<?php echo $tgl_terima; ?>" />
        </div>
	    <input type="hidden" name="id_order" value="<?php echo $id_order; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('siup_order') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>