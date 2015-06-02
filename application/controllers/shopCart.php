<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShopCart extends CI_Controller {

	function ShopCart(){
		parent:: __construct();
		$this->load->model('cartModel');
		$this->load->library('cart');
		$this->load->library('javascript');
        $this->load->library('form_validation');
        $this->load->library('table');
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
		$this->form_validation->set_rules('name','Name','trim|xss_clean|required');
		$this->form_validation->set_rules('address','Address','trim|xss_clean|required');
		$this->form_validation->set_rules('phone','Phone','trim|xss_clean|numeric|required');
		$this->form_validation->set_rules('email','Email','trim|xss_clean|valid_email');

		if($this->form_validation->run() == FALSE){
			redirect('shopCart');
		}else{
			$data = $this->input->post();
			if(isset($data) && !empty($data)){
				$this->cartModel->add_cust($data); 
			}
		}
		
    }	
		
}
