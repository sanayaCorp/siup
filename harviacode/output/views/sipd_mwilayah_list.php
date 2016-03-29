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
        <h2 style="margin-top:0px">Sipd_mwilayah List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('sipd_mwilayah/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('sipd_mwilayah/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('sipd_mwilayah'); ?>" class="btn btn-default">Reset</a>
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
		<th>Nama</th>
		<th>Stat </th>
		<th>NamaKabupaten</th>
		<th>NamaKecamatan</th>
		<th>KodeKabupaten</th>
		<th>KodeKecamatan</th>
		<th>Changed By</th>
		<th>Last Modified</th>
		<th>Action</th>
            </tr><?php
            foreach ($sipd_mwilayah_data as $sipd_mwilayah)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $sipd_mwilayah->Nama ?></td>
			<td><?php echo $sipd_mwilayah->Stat_ ?></td>
			<td><?php echo $sipd_mwilayah->NamaKabupaten ?></td>
			<td><?php echo $sipd_mwilayah->NamaKecamatan ?></td>
			<td><?php echo $sipd_mwilayah->KodeKabupaten ?></td>
			<td><?php echo $sipd_mwilayah->KodeKecamatan ?></td>
			<td><?php echo $sipd_mwilayah->changed_by ?></td>
			<td><?php echo $sipd_mwilayah->Last_Modified ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('sipd_mwilayah/read/'.$sipd_mwilayah->WilayahID),'Read'); 
				echo ' | '; 
				echo anchor(site_url('sipd_mwilayah/update/'.$sipd_mwilayah->WilayahID),'Update'); 
				echo ' | '; 
				echo anchor(site_url('sipd_mwilayah/delete/'.$sipd_mwilayah->WilayahID),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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