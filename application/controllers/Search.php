<?php
/**
 *  
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	/**
	 * Index Page for this controller.
         * MARK: This page is set as the main controller!
	 */
	public function index() {
        $this->load->view('/common/header');
        $this->load->view('/common/top_menu');
		$this->load->view('search');
        $this->load->view('/common/footer');
	}

    public function restaurantdetail() {
        $this->load->view('/common/header');
        $this->load->view('/common/top_menu_clients');
        $this->load->view('restaurantdetail');
        $this->load->view('/common/footer');
    }
}

/* EOF */
