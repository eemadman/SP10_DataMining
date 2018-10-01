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
	    $this->load->view('Head');
	    $this->load->view('content');
	    $this->load->view('foot');
	}
	
	public function calender()
	
	{
	    $this->load->view('Head');
	    $this->load->view('statistic/Calendar');
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
	
	public function login()
	
	{
	    $this->load->view('Head');
	    $this->load->view('statistic/login');
	    $this->load->view('foot');
	}
	
	public function register()
	
	{
	    $this->load->view('Head');
	    $this->load->view('statistic/register');
	    $this->load->view('foot');
	}

	public function cuase()
	
	{
	    $this->load->view('Head');
	    $this->load->view('statistic/cuaseacc');
	    $this->load->view('foot');
	}
	
	public function chartstatistic2()
	
	{
	    $this->load->view('Head');
	    $this->load->view('statistic/chartstatistic2');
	    $this->load->view('foot');
	}
	
	public function chartstatistic3()
	
	{
	    $this->load->view('Head');
	    $this->load->view('statistic/chartstatistic3');
	    $this->load->view('foot');
	}
	
	public function chartstatistic4()
	
	{
	    $this->load->view('Head');
	    $this->load->view('statistic/chartstatistic4');
	    $this->load->view('foot');
	}
	
	public function chartstatistic5()
	
	{
	    $this->load->view('Head');
	    $this->load->view('statistic/chartstatistic5');
	    $this->load->view('foot');
	}
	
	public function chartstatistic6()
	
	{
	    $this->load->view('Head');
	    $this->load->view('statistic/chartstatistic6');
	    $this->load->view('foot');
	}
	
	public function chartstatistic7()
	
	{
	    $this->load->view('Head');
	    $this->load->view('statistic/chartstatistic7');
	    $this->load->view('foot');
	}
	
	public function chartcause2()
	
	{
	    $this->load->view('Head');
	    $this->load->view('statistic/chartcause2');
	    $this->load->view('foot');
	}
	
	public function table()
	
	{
	    $this->load->view('Head');
	    $this->load->view('statistic/tables');
	    $this->load->view('foot');
	}
	public function card()
	
	{
	    $this->load->view('Head');
	    $this->load->view('statistic/card');
	    $this->load->view('foot');
	}
	
}