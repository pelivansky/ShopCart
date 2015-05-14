<?php if(!$this->cart->contents()):
	echo '<p class="small">Add za items!</p>';
else:	
 ?>
 <?php 
 	echo form_open('shopCart/update_cart');
 ?>
 <table width="100%" cellpadding="7px" cellspacing="0" class="cart_table" border="0">
 	<thead class="thead">
 		<tr>
 			<td>Qty</td>
 			<td>Item Desc</td>
 			<td>Item Price</td>
 			<td style="text-align:right">Sub-total</td>
 		</tr>
 	</thead>
 	<tbody>
        <?php foreach($this->cart->contents() as $items): ?>     
        <?php echo form_hidden('rowid[]', $items['rowid']); ?>
        <tr>
            <td><?php echo form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '1')); ?></td>       
            <td><?php echo $items['name']; ?></td>
            <td>&pound;<?php echo $this->cart->format_number($items['price']); ?></td>
            <td style="text-align:right">&pound;<?php echo $this->cart->format_number($items['subtotal']); ?></td>
        </tr>
        <?php endforeach; ?>
        <tr class="ttotal">
            <td></td>
            <td></td>
            <td><strong>Total</strong></td>
            <td style="text-align:right">&pound;<?php echo $this->cart->format_number($this->cart->total()); ?></td>
        </tr>
    </tbody>
</table>
 
<p>
    <?php echo form_submit('', 'Update za Cart','class="fg-button teal"');
        echo "&nbsp&nbsp&nbsp"; 
        echo anchor('shopCart/empty_cart', 'Empty za Cart','class="fg-button teal"');
        echo "&nbsp&nbsp&nbsp"; 
        $atributes = array(
            'class'     => 'fg-button teal'
            );
        echo anchor('ShopCart/checkout', 'Place za Order', $atributes);
    ?>
</p>
<p class="small">
    <small>If the quantity is set to zero, the item will be removed from the cart.</small>
</p>
<?php 
echo form_close(); 
endif;
?>