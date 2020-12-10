<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Artikel extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("artikel_model");
		$this->load->library('form_validation');
		$this->load->model("Model");
	}

	public function index(){
		$username = $_SESSION['username'];
		if ($username == "admin") {
			$data["artikel"] = $this->artikel_model->getAll();
			$this->load->view("admin/index", $data);	
		}else{
			$data["artikel"] = $this->artikel_model->getByUsername($username);
			$this->load->view("user/index", $data);
		}
		// $this->load->view("admin/index", $data);
	}

	public function add(){
		$artikel = $this->artikel_model;
		$validation = $this->form_validation;
		$validation->set_rules($artikel->rules());

		if ($validation->run()) {
			$artikel->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$this->load->view("user/new_form");
	}

	public function edit($id = null){
		if(!isset($id)) redirect('artikel');

		$artikel = $this->artikel_model;
		$validation = $this->form_validation;
		$validation->set_rules($artikel->rules());

		if ($validation->run()) {
			$artikel->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["artikel"] = $artikel->getById($id);
		if (!$data["artikel"]) show_404();

		$this->load->view("user/edit_form", $data);
	}

	public function delete($id=null){
		if (!isset($id)) show_404();

		if ($this->artikel_model->delete($id)) {
			redirect(site_url('artikel'));
		}
	}
}
 ?>