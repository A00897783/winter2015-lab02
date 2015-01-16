<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application {

	/**
         * Index page for this controller
         */
	public function index()
	{
		//$this->load->view('about');
                $this->data['pagebody'] = 'about';
                $this->render();
	}
}
