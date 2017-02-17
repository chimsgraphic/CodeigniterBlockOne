<?php
	class Products extends CI_Controller{
		
		function __Construct(){
			parent::__Construct();
			$this->load->database();
			$this->load->model('ProductsModel');
		}
		
		public function index(){
			$this->data['products'] = $this->ProductsModel->getProducts();
			$this->load->view('products_view',$this->data);
		}
	}
?>