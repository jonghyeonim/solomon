<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();

		$this->load->database();
		$this->load->model('BoardModel');
	}

	function index() {
		$topics = $this->BoardModel->getAll();
		/*
		foreach($topics as $entry) {
			var_dump($entry);
		}*/
		$this->load->view('BoardHeader');
		$this->load->view('BoardNavi');
		$this->load->view('BoardHeadLine');
		$this->load->view('BoardList', array('topics'=>$topics));
		$this->load->view('BoardMain');
		$this->load->view('Footer');
    }

    function get($id) {
    	$boardLists = $this->BoardModel->getAll();
		$boardData = $this->BoardModel->getOnId($id);

    	$this->load->view('BoardHeader');
    	$this->load->view('BoardNavi');
    	$this->load->view('BoardHeadLine');
    	$this->load->view('BoardData', array('topic'=>$boardData));
    	$this->load->view('BoardList', array('topics'=>$boardLists));
    	$this->load->view('BoardMain');
    	$this->load->view('Footer');
    }
}