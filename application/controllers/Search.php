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
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

        switch ($lang){
            case "nl":
                $data_header = array(
                    'page_title' => ' - Zoeken'
                );

                $this->load->view('/common/header', $data_header);
                $this->load->view('/common/top_menu_clients');
                $this->load->view('search');
                $this->load->view('/common/footer_clients');

                break;
            case "fr":
                $data_header = array(
                    'page_title' => ' - Chercher'
                );

                $this->load->view('/common/header', $data_header);
                $this->load->view('/common/top_menu_clients');
                $this->load->view('search');
                $this->load->view('/common/footer_clients');

                break;
            case "en":
                $data_header = array(
                    'page_title' => ' - Search'
                );

                $this->load->view('/common/header', $data_header);
                $this->load->view('/common/top_menu_clients');
                $this->load->view('search');
                $this->load->view('/common/footer_clients');

                break;
            default:
                $data_header = array(
                    'page_title' => ' - Search'
                );

                $this->load->view('/common/header', $data_header);
                $this->load->view('/common/top_menu_clients');
                $this->load->view('search');
                $this->load->view('/common/footer_clients');

                break;
        }

        /*
        $data_header = array(
            'page_title' => ' - Zoeken'
            //'language_test' => lang('hello')
        );

        $this->load->view('/common/header', $data_header);
        $this->load->view('/common/top_menu_clients');
		$this->load->view('search');
        $this->load->view('/common/footer_clients');
        */
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
