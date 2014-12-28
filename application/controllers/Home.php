<?php
/**
 *  
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
         * MARK: This page is set as the main controller!
	 */
	public function index()
	{
            
                $this->load->view('/common/header');
                $this->load->view('/common/top_menu');
		$this->load->view('home');
                $this->load->view('/common/footer');
	}
}

/* EOF */
