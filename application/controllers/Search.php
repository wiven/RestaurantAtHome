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
        $data_header = array(
            'page_title' => ' - Zoeken'
        );


        $this->load->view('/common/header', $data_header);
        $this->load->view('/common/top_menu_clients');
		$this->load->view('search');
        $this->load->view('/common/footer_clients');
	}

    public function restaurantdetail() {
        $data_header = array(
            'page_title' => ' - Restaurant'
        );

        $this->load->view('/common/header', $data_header);
        $this->load->view('/common/top_menu_clients');
        $this->load->view('restaurantdetail');
        $this->load->view('/common/footer_clients');
    }
}

/* EOF */
