<?php

/**
 * Created by PhpStorm.
 * User: wiven
 * Date: 22/07/15
 * Time: 17:37
 */
class Dashboard extends CI_Controller {
    public function index() {
        $data_header = array(
            'page_title' => ' - Dashboard',
            'additional_styles' => ''
        );

        $data_footer = array(
            'additional_scripts' => ''
        );

        $this->load->view('/dashboard/common/header', $data_header);
        $this->load->view('/dashboard/common/top_menu');
        $this->load->view('/dashboard/overview');
        $this->load->view('/dashboard/common/footer');
    }
}