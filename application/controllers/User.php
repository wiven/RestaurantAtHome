<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function index() {
        $data_header = array(
            'page_title' => ' - Gebruikersinfo'
            //'language_test' => lang('hello')
        );

        $this->load->view('/common/header', $data_header);
        $this->load->view('/common/top_menu_clients');
        $this->load->view('user');
        $this->load->view('/common/footer_clients');
    }

    public function profile() {
        $data_header = array(
            'page_title' => ' - Profiel'
        );

        $this->load->view('/common/header', $data_header);
        $this->load->view('/common/top_menu_clients');
        $this->load->view('user_profile');
        $this->load->view('/common/footer_clients');
    }

    public function passwordrecovery() {
        $data_header = array(
            'page_title' => ' - Paswoordherstel'
        );

        $this->load->view('/common/header', $data_header);
        $this->load->view('/common/top_menu_clients');
        $this->load->view('passwordrecovery');
        $this->load->view('/common/footer_clients');
    }
}