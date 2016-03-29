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
        <h2 style="margin-top:0px">Siup_kemasan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Desc <?php echo form_error('desc') ?></label>
            <input type="text" class="form-control" name="desc" id="desc" placeholder="Desc" value="<?php echo $desc; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Added By <?php echo form_error('added_by') ?></label>
            <input type="text" class="form-control" name="added_by" id="added_by" placeholder="Added By" value="<?php echo $added_by; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Changed By <?php echo form_error('changed_by') ?></label>
            <input type="text" class="form-control" name="changed_by" id="changed_by" placeholder="Changed By" value="<?php echo $changed_by; ?>" />
        </div>
	    <div class="form-group">
            <label for="timestamp">Last Modified <?php echo form_error('last_modified') ?></label>
            <input type="text" class="form-control" name="last_modified" id="last_modified" placeholder="Last Modified" value="<?php echo $last_modified; ?>" />
        </div>
	    <input type="hidden" name="id_kemasan" value="<?php echo $id_kemasan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('siup_kemasan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>