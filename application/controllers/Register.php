<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function index() {
        $data_header = array(
            'page_title' => ' - Registreren'
            //'language_test' => lang('hello')
        );

        $this->load->view('/common/header', $data_header);
        $this->load->view('/common/top_menu_clients');
        $this->load->view('register');
        $this->load->view('/common/footer_clients');
    }
}