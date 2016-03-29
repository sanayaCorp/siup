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
        <h2 style="margin-top:0px">Sipd_mwajib_pajak List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('sipd_mwajib_pajak/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('sipd_mwajib_pajak/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('sipd_mwajib_pajak'); ?>" class="btn btn-default">Reset</a>
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
		<th>Nm BadanUsaha</th>
		<th>Alamat Usaha</th>
		<th>Alamat No Usaha</th>
		<th>Rt Usaha</th>
		<th>Rw Usaha</th>
		<th>Rk Usaha</th>
		<th>Kd Wil Usaha</th>
		<th>Telp Usaha</th>
		<th>Kotak Pos</th>
		<th>Kode Usaha</th>
		<th>Modal Kerja</th>
		<th>Nm Pemilik</th>
		<th>Jabatan</th>
		<th>Alamat Pemilik</th>
		<th>Alamat No Pemilik</th>
		<th>Rt Pemilik</th>
		<th>Rw Pemilik</th>
		<th>Rk Pemilik</th>
		<th>Kd Wil Pemilik</th>
		<th>Telp Usaha Pemilik</th>
		<th>Kotak Pos Pemilik</th>
		<th>Jml Izin</th>
		<th>LAktif</th>
		<th>Keterangan</th>
		<th>TglNonAktif</th>
		<th>Action</th>
            </tr><?php
            foreach ($sipd_mwajib_pajak_data as $sipd_mwajib_pajak)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $sipd_mwajib_pajak->Nm_BadanUsaha ?></td>
			<td><?php echo $sipd_mwajib_pajak->Alamat_Usaha ?></td>
			<td><?php echo $sipd_mwajib_pajak->Alamat_No_Usaha ?></td>
			<td><?php echo $sipd_mwajib_pajak->Rt_Usaha ?></td>
			<td><?php echo $sipd_mwajib_pajak->Rw_Usaha ?></td>
			<td><?php echo $sipd_mwajib_pajak->Rk_Usaha ?></td>
			<td><?php echo $sipd_mwajib_pajak->Kd_Wil_Usaha ?></td>
			<td><?php echo $sipd_mwajib_pajak->Telp_Usaha ?></td>
			<td><?php echo $sipd_mwajib_pajak->Kotak_Pos ?></td>
			<td><?php echo $sipd_mwajib_pajak->Kode_Usaha ?></td>
			<td><?php echo $sipd_mwajib_pajak->Modal_Kerja ?></td>
			<td><?php echo $sipd_mwajib_pajak->Nm_Pemilik ?></td>
			<td><?php echo $sipd_mwajib_pajak->Jabatan ?></td>
			<td><?php echo $sipd_mwajib_pajak->Alamat_Pemilik ?></td>
			<td><?php echo $sipd_mwajib_pajak->Alamat_No_Pemilik ?></td>
			<td><?php echo $sipd_mwajib_pajak->Rt_Pemilik ?></td>
			<td><?php echo $sipd_mwajib_pajak->Rw_Pemilik ?></td>
			<td><?php echo $sipd_mwajib_pajak->Rk_Pemilik ?></td>
			<td><?php echo $sipd_mwajib_pajak->Kd_Wil_Pemilik ?></td>
			<td><?php echo $sipd_mwajib_pajak->Telp_Usaha_Pemilik ?></td>
			<td><?php echo $sipd_mwajib_pajak->Kotak_Pos_Pemilik ?></td>
			<td><?php echo $sipd_mwajib_pajak->Jml_Izin ?></td>
			<td><?php echo $sipd_mwajib_pajak->lAktif ?></td>
			<td><?php echo $sipd_mwajib_pajak->Keterangan ?></td>
			<td><?php echo $sipd_mwajib_pajak->TglNonAktif ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('sipd_mwajib_pajak/read/'.$sipd_mwajib_pajak->NPWPD),'Read'); 
				echo ' | '; 
				echo anchor(site_url('sipd_mwajib_pajak/update/'.$sipd_mwajib_pajak->NPWPD),'Update'); 
				echo ' | '; 
				echo anchor(site_url('sipd_mwajib_pajak/delete/'.$sipd_mwajib_pajak->NPWPD),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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