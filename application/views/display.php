<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Shop</title>
	<link href="<?php echo base_url(); ?>assets/css/style.css" media="screen" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
</head>
<body>

	<div id="content">
		<div class="products_list">
			<?php $this->view($content); ?>
		</div>	
		<div id='response'>
			<h1>za order was processed</h1>
			<p>-- Thx! --</p>	
			<h2><?php echo anchor('shopCart/empty_cart', 'New order','class="fg-button teal"'); ?></h2>
		</div>		
		<div class="cart_list">
		  	<h3>Za shopping cart</h3>
		  	<div id="cart_content">
		  		<?php echo $this->view('cart'); ?>
		  	</div>
		</div>
		<div id="bill">
			<?php $this->view('bill'); ?>
		</div>			
	</div>
<script type="text/javascript">
	$(function(){
		$('#order').on('click',function(){
				$('#bill').slideDown(3000);
		});



		$("#place_it").on('click',function(){
			event.preventDefault();
			var name  = $("input#uname").val();
			var add   = $("input#uadd").val();
			var email = $("input#umail").val();
			var pho   = $("input#upho").val();
			var date  = $("input#udate").val();
			var time  = $("input#utime").val();
			$.ajax({
				type : 'POST',
				cache: 'FALSE',
				url  : "<?php echo site_url('shopCart/add_cust'); ?>",
				data :{'name':name,'address':add,'email':email,'phone':pho,'date':date,'time':time},
				success:function(){
							$(".cart_list").fadeOut(3000);
							$('#bill').slideUp(3000);	
							$("#response").delay(4000).fadeIn(3000);
				}
			});

			return false; 
		});

	});
</script>
	
</body>
</html>

