<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * model artikel untuk bisa mengakses dari database
 */
class Artikel_model extends CI_Model
{
	private $_table = "artikel";

	public $kode_artikel;
	public $isi;
	public $username;

	public function rules(){
		return [
			['field' => 'kode_artikel',
			'label' => 'Kode_artikel',
			'rules' => 'required'],

			['field' => 'isi',
			'label' => 'Isi',
			'rules' => 'required'],

			['field' => 'username',
			'label' => 'Username',
			'rules' => 'required'],
		];
	}

	public function getAll(){
		return $this->db->get($this->_table)->result();
	}

	public function getByUsername($username){
		return $this->db->get_where($this->_table, ["username" => $username])->result();
	}

	public function getById($id){
		return $this->db->get_where($this->_table, ["kode_artikel" => $id])->row();
	}

	public function save(){
		$post = $this->input->post();
		$this->kode_artikel = $post["kode_artikel"];
		$this->isi = $post["isi"];
		$this->username = $post["username"];
		return $this->db->insert($this->_table, $this);	
	}

	public function update(){
		$post = $this->input->post();
		$this->kode_artikel = $post["kode_artikel"];
		$this->isi = $post["isi"];
		$this->username = $post["username"];
		return $this ->db->update($this->_table, $this, array('kode_artikel' => $post['kode_artikel']));
	}
	public function delete($id){
		return $this->db->delete($this->_table, array("kode_artikel" => $id));
	}
}
 ?>