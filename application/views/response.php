<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Shop</title>
<link href="<?php echo base_url(); ?>assets/css/style.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="content">
		<div class="products_list">
			<?php $this->view($content); ?>
		</div>	
		<div class="cart_list">
		  	<h3>Za shopping cart</h3>
		  	<div id="cart_content">
		  		<?php echo $this->view('cart'); ?>
		  	</div>
		</div>
		<div id='response'>
			<h1>za order was processed</h1>
			<p>-- Thx! --</p>	
			<h2><?php echo anchor('shopCart', 'New order','class="fg-button teal"'); ?></h2>
		</div>	
	</div>	
</body>
</html>



