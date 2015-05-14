<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShopCart extends CI_Controller {

	function ShopCart(){
		 parent:: __construct();
		 $this->load->model('cartModel');
		 $this->load->library('cart');
		 $this->load->library('javascript');
	}

	function index(){
		$data = array();
		$data['products'] = $this->cartModel->retrieve();
		$data['content'] = 'products';
		$this->load->view('display', $data);
	}

	function checkout(){
		$data = array();
		$data['products'] = $this->cartModel->retrieve();
		$data['content'] = 'products';
		$this->load->view('checkout', $data);
	}

	function response(){
		$data = array();
		$data['products'] = $this->cartModel->retrieve();
		$data['content'] = 'products';
		$this->load->view('response', $data);		

	}

	function add_item(){
		$id = $this->input->post('product_id');
		$qt = $this->input->post('quantity');
		if($this->cartModel->add_item($id,$qt) == TRUE){
			redirect('ShopCart');	
		}else{
			return FALSE;
		}
	}

	function update_cart(){
		$total = $this->cart->total_items();
		$item = array();
		$qty = array();
   		$item = $this->input->post('rowid');
    	$qty = $this->input->post('qty');
    	if($this->cartModel->update_cart($total, $item, $qty) == TRUE){	
    		redirect('ShopCart');
    	}else{
    		return FALSE;
    	}	
	}
	
	function empty_cart(){
    	$this->cart->destroy(); 
    	redirect('ShopCart');
	}

	function add_cust(){
		$data = array(
			'name' 	 => $this->input->post('name'),
			'adress' => $this->input->post('address'),
			'email'  => $this->input->post('email'),
			'phone'  => $this->input->post('phone'),
			'amount' => $this->cart->total()
		);
		if($this->cartModel->add_cust($data) == TRUE){
			$this->cart->destroy();
			redirect('ShopCart/response');
		}
	}		
}
