<form id="formm" method="post" action="" >
	<h1>Billing Info</h1>
		<table border="0" cellpadding="7px" cellspacing="0" width="100%"  class="cart_table">
			<tr class="thead"><td>Order Total:</td><td style="text-align:right" id="utot"><strong>£<?php echo number_format($this->cart->total(), 2); ?></strong></td></tr>
			<tr><td>Your Name:</td><td><input id="uname" type="text"  required=""/></td></tr>
			<tr><td>Address:</td><td><input id="uadd" type="text"  required="" /></td></tr>
			<tr><td>Email:</td><td><input id="umail" type="text"  required="" /></td></tr>
			<tr><td>Phone:</td><td><input id="upho" type="text"  required="" /></td></tr>
			<tr><td><input id="udate" type="hidden"  required="" value="<?php echo date("Y/m/d"); ?>" /></td></tr>
			<tr><td><input id="utime" type="hidden"  required="" value="<?php echo date('H:i:s', time()); ?>" /></td></tr>
			<tr><td></td><td><input id="place_it" class ='fg-button teal' type="submit" value="Place it"/></td></tr>
		</table>
</form>
