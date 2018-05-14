<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home01 extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	
	{
		//$this->load->view('index');
	
	}
	
	public function main()
	
	{
	    $this->load->view('Head');
	    $this->load->view('content');
	    $this->load->view('foot');
	}
	
	public function form()
	
	{
	    $this->load->view('Head');
	    $this->load->view('statistic/form');
	    $this->load->view('foot');
	}
	
	public function chartstatistic()
	
	{
	    $this->load->model('insertmodel');
	    $res = $this->insertmodel->get_chart();
	    $data2['insert_res'] = $res;
	    
	    $this->load->view('Head');
	    $this->load->view('statistic/chartstatistic', $data2);
	    $this->load->view('foot');
	}
	
	public function chartcause()
	
	{
	    $this->load->model('insertmodel');
	    $res = $this->insertmodel->get_last_ten_entries();
	    $data['insert_res'] = $res;
	    
	    $this->load->view('Head');
	    $this->load->view('statistic/chartcause', $data);
	    $this->load->view('foot');
	}
	
	public function showacc()
	
	{
	    $this->load->model('insertmodel');
	    $res = $this->insertmodel->get_last_ten_entries();
	    $data['insert_res'] = $res;
	    
	    $this->load->view('Head');
	    $this->load->view('statistic/show_acc', $data);
	    $this->load->view('foot');
	}
	

}