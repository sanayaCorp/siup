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
        <h2 style="margin-top:0px">Siup_product Read</h2>
        <table class="table">
	    <tr><td>Desc</td><td><?php echo $desc; ?></td></tr>
	    <tr><td>Id Kemasan</td><td><?php echo $id_kemasan; ?></td></tr>
	    <tr><td>Changed By</td><td><?php echo $changed_by; ?></td></tr>
	    <tr><td>Added By</td><td><?php echo $added_by; ?></td></tr>
	    <tr><td>Last Modified</td><td><?php echo $last_modified; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('siup_product') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>