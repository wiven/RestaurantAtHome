<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function index() {
        $data_header = array(
            'page_title' => ' - Registreren',
            'additional_styles' => ''
            //'language_test' => lang('hello')
        );

        $data_footer = array(
            'additional_scripts' => "<script src='".public_url()."js/register.js'></script>",
            'current_url' => @explode('.', (@$_SERVER['HTTP_HOST'].@$_SERVER['PATH_INFO']))[1]
        );

        $this->load->view('/common/header', $data_header);
        $this->load->view('/common/top_menu');
        $this->load->view('register');
        $this->load->view('/common/footer', $data_footer);
    }
}