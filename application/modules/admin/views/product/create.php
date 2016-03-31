<?php echo $form->messages();?>
<div class="row">

	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Product Info</h3>
			</div>
			<div class="box-body">
				<?php echo $form->open(); ?>

					<?php echo $form->bs3_text('ID Product', 'id_product'); ?>
					<?php echo $form->bs3_text('Description', 'desc'); ?>					
					
					<?php if ( !empty($kemasan) ): ?>
					<div class="form-group">
						<label for="groups">Kemasan</label>						
							 <div id="combox"> <!-- sebagai indentitas combo box -->
							  <select name="kemasan" id="kemasan" class="form-control">
							   <option></option>
							   <?php foreach($kemasan as $group){?>
							   <option value="<?=$group->id_kemasan?>"><?=$group->desc?></option>
							   <?php }?>
							  </select>
							  </div>							
						<div>
						<!--<?php foreach ($kemasan as $group): ?>
							<label class="checkbox-inline">
								<input type="checkbox" name="groups[]" value="<?php echo $group->id_kemasan; ?>"> <?php echo $group->desc; ?>
							</label>
						<?php endforeach; ?>-->
						</div>
					</div>
					<?php endif; ?>

					<?php echo $form->bs3_submit(); ?>
					
				<?php echo $form->close(); ?>
			</div>
		</div>
	</div>
	
</div>