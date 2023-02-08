<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('login');
	}

	public function redi(){
		$this->load->view('mesobjets');
	}	


	public function login(){
		$this->load->model('infologin');

		$email=$_POST['email'];
		$mdp=$_POST['mdp'];

		if($this->infologin->verify($email,$mdp)){
			$query = $this->db->get('objet');
			$data['records'] = $query->result();
			$this->load->view('mesobjets', $data);
		}

		else if($this->infologin->admin($email,$mdp)){
			$query = $this->db->get('objet');
			$data['records'] = $query->result();
			$this->load->view('admin', $data);
		}
		else {
			redirect('Welcome/');
		}
	}




	public function inscription(){
		$this->load->view('inscription');
	}




	public function inscriptionFini(){
		$this->load->model('infologin');
		$this->infologin->insert();
		redirect('Welcome/');
	}



	public function add()
	{
		$this->load->view('ajoutobjet');
	}
	
	public function updateObjet()
	{
		$this->load->view('modification');
	}


	public function enregistre()
	{
		$this->load->model('infoobjet');
		$this->infoobjet->modifier($idObjet);
		$this->load->view('mesobjets');
	}

	public function supprime()
	{
		$this->load->model('infoobjet');
		$idObjet=$_GET['id'];
		$this->infoobjet->delete($idObjet);
		redirect('Welcome/redi');
	}

	
	public function ajout()
	{
		$id=$this->session->userdata('idUser');
		$this->load->model('infoobjet');
		$this->infoobjet->ajouter($id);
		$this->load->view('mesobjets');
	}


	public function categories()
	{
		$query = $this->db->get('categorie');
		$data['categorie'] = $query->result();
		$this->load->view('categorie', $data);
	}

	public function proposition()
	{
		$this->load->view('mesproposition');
	}


}
