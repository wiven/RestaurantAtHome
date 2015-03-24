<?php
/**
 *  
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
         * MARK: This page is set as the main controller!
	 */
	public function index()
	{
            
                $this->load->view('/common_admin/header_admin');
                $this->load->view('/common_admin/top_menu_admin');
		$this->load->view('admin');
                $this->load->view('/common_admin/footer_admin');
	}
}

/* EOF */