<?php
class PendudukController extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('penduduk');
	}
 
	public function index()
	{
		$data['graph'] = $this->penduduk->graph();
		$this->load->view('chart', $data);
	}
 
}