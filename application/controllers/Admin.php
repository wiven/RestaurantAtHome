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
        //something here
        $this->load->view('/common_admin/footer_admin');
    }
    
    
	public function myrecipes()
	{
        $this->load->view('/common_admin/header_admin');
        $this->load->view('/common_admin/top_menu_admin');
		$this->load->view('admin_my_recipes');
        $this->load->view('/common_admin/footer_admin');
	}
        
    public function slotedit(){
        $this->load->view('/common_admin/header_admin');
        $this->load->view('/common_admin/top_menu_admin');
        $this->load->view('admin_edit_slot');
        $this->load->view('/common_admin/footer_admin');
    }
}

/* EOF */