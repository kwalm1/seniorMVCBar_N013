<?php
class posts extends CI_Controller{
	public function index(){
		$data['title'] = 'Drink queue';

		$data['posts'] = $this->post_model->get_posts();
		$this->load->view('templates/header');
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');
	}

	public function create(){
		$data['title'] = 'Add Drink';

			$this->load->view('templates/header');
			$this->load->view('posts/create', $data);
			$this->load->view('templates/footer');

			if(isset($_POST['submit'])){
				$this->post_model->create_post();
				redirect('posts');
			}





	}
}
