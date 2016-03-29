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
        <h2 style="margin-top:0px">Siup_order List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('siup_order/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('siup_order/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('siup_order'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Date</th>
		<th>Id Unit</th>
		<th>Id Product</th>
		<th>Stver</th>
		<th>Stacc</th>
		<th>Stpch</th>
		<th>Stord</th>
		<th>Ket</th>
		<th>Tgl Ver</th>
		<th>Tgl Acc</th>
		<th>Tgl Pch</th>
		<th>Tgl Terima</th>
		<th>Action</th>
            </tr><?php
            foreach ($siup_order_data as $siup_order)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $siup_order->date ?></td>
			<td><?php echo $siup_order->id_unit ?></td>
			<td><?php echo $siup_order->id_product ?></td>
			<td><?php echo $siup_order->stver ?></td>
			<td><?php echo $siup_order->stacc ?></td>
			<td><?php echo $siup_order->stpch ?></td>
			<td><?php echo $siup_order->stord ?></td>
			<td><?php echo $siup_order->ket ?></td>
			<td><?php echo $siup_order->tgl_ver ?></td>
			<td><?php echo $siup_order->tgl_acc ?></td>
			<td><?php echo $siup_order->tgl_pch ?></td>
			<td><?php echo $siup_order->tgl_terima ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('siup_order/read/'.$siup_order->id_order),'Read'); 
				echo ' | '; 
				echo anchor(site_url('siup_order/update/'.$siup_order->id_order),'Update'); 
				echo ' | '; 
				echo anchor(site_url('siup_order/delete/'.$siup_order->id_order),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>