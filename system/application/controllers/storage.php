<?php

class Storage extends Controller {

	function Storage()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('body');
                $this->load->view('footer');
	}
	function node()
	{
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('node');
                $this->load->view('footer');
	}
	function disk()
	{
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('disk');
                $this->load->view('footer');
	}
	function about()
	{
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('about');
                $this->load->view('footer');
	}
}

