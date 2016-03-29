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
        <h2 style="margin-top:0px">Siup_unit <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Desc <?php echo form_error('desc') ?></label>
            <input type="text" class="form-control" name="desc" id="desc" placeholder="Desc" value="<?php echo $desc; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Location <?php echo form_error('location') ?></label>
            <input type="text" class="form-control" name="location" id="location" placeholder="Location" value="<?php echo $location; ?>" />
        </div>
	    <input type="hidden" name="id_unit" value="<?php echo $id_unit; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('siup_unit') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>