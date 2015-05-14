<form method="post" action="<?php echo base_url() . 'shopCart/add_cust' ?>" >
	<h1>Billing Info</h1>
		<table border="0" cellpadding="7px" cellspacing="0" width="100%"  class="cart_table">
			<tr class="thead"><td>Order Total:</td><td style="text-align:right"><strong>£<?php echo number_format($this->cart->total(), 2); ?></strong></td></tr>
			<tr><td>Your Name:</td><td><input type="text" name="name" required=""/></td></tr>
			<tr><td>Address:</td><td><input type="text" name="address" required="" /></td></tr>
			<tr><td>Email:</td><td><input type="text" name="email" required="" /></td></tr>
			<tr><td>Phone:</td><td><input type="text" name="phone" required="" /></td></tr>
			<tr><td></td></tr>
			<tr><td></td><td><input class ='fg-button teal' type="submit" value="Place it"/></td></tr>
		</table>
</form>
