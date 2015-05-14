<ul class="products">
	<?php foreach($products as $product): ?>
		<li>
			<h3><?php echo $product->name; ?></h3>
			<img src="<?php echo base_url(); ?>assets/img/<?php echo $product->image; ?>" alt="" />
			<small>&pound;<?php echo $product->price; ?></small>
			<?php echo form_open('shopCart/add_item'); ?>
				<fieldset>
					<label>Quantity</label>
					<?php echo form_hidden('product_id',$product->id); ?>
					<?php echo form_input('quantity','1','maxlength="2"'); ?>
					<?php echo form_submit('add','Add','class= "add-button grey"') ?>
				</fieldset>
			<?php echo form_close(); ?>	
		</li>
	<?php endforeach; ?>
</ul>