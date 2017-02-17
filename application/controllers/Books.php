<?php

	class Books extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
			$this->load->model('BookModel');
		}
		
		public function novel(){
			
			$config['base_url'] = site_url('Books/novel');
			$this->load->view('header');
			$this->data['novel'] = $this->BookModel->innerJoinBooks();
			$this->load->view('books_view',$this->data);
			$this->load->view('footer');
		}
		
		public function novel2(){
			
			$config['base_url'] = site_url('Books/novel2');
			$this->load->view('header');
			$this->data['novel'] = $this->BookModel->innerJoinCBooks();
			$this->load->view('books_view2',$this->data);
			$this->load->view('footer');
		}
		
		public function novel3(){
			
			$config['base_url'] = site_url('Books/novel3');
			$this->load->view('header');
			$this->data['novel'] = $this->BookModel->multiJoinBooks();
			$this->load->view('books_view3',$this->data);
			$this->load->view('footer');
		}
		
		public function novel4(){
			
			$config['base_url'] = site_url('Books/novel4');
			$this->load->view('header');
			$this->data['novel'] = $this->BookModel->leftJoinBooks();
			$this->load->view('books_view4',$this->data);
			$this->load->view('footer');
		}
		
		public function novel5(){
			
			$config['base_url'] = site_url('Books/novel5');
			$this->load->view('header');
			$this->data['novel'] = $this->BookModel->rightJoinBooks();
			$this->load->view('books_view5',$this->data);
			$this->load->view('footer');
		}
		
		public function novel6(){
			
			$config['base_url'] = site_url('Books/novel6');
			$this->load->view('header');
			$this->data['novel'] = $this->BookModel->outerJoinBooks();
			$this->load->view('books_view6',$this->data);
			$this->load->view('footer');
		}
	}
?>