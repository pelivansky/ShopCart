<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CartModel extends CI_Model {
	function retrieve(){
		$q = $this->db->get('products');
		return $q->result();
	}

	function add_item($id,$qt){
		$this->db->where('id', $id);
		$q = $this->db->get('products',1);
		if($q->num_rows > 0){
			foreach($q->result() as $row){
				$data = array(
						'id'    => $id,
						'qty'   => $qt,
						'price' => $row->price,
						'name'  => $row->name
					);
				$this->cart->insert($data);
				return TRUE;
			}
		}else{
			return FALSE;
		}
	}
	function update_cart($total, $item, $qty){			
    	for($i=0; $i<$total; $i++){
    		$data = array(
    			'rowid' => $item[$i],
    			'qty'   => $qty[$i]
    		);
    		if($this->cart->update($data)){
    			return TRUE;
    		}else{
    			echo 'error updating cart!';
    		}	

    	}
	}

	function add_cust($data){
		$this->db->insert('customer',$data);
		return TRUE;
	}	
}	