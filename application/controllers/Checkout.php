<?php

/**
 * Created by PhpStorm.
 * User: wiven
 * Date: 22/07/15
 * Time: 17:37
 */
class Checkout extends CI_Controller {
    public function index() {
        if(!empty(explode('.', (@$_SERVER['HTTP_HOST'].@$_SERVER['PATH_INFO']))[1])) {
            $cur_url = explode('.', (@$_SERVER['HTTP_HOST'].@$_SERVER['PATH_INFO']))[1];
        } else {
            $cur_url = explode('.', (@$_SERVER['HTTP_HOST'].@$_SERVER['PATH_INFO']))[0];
        }

        $data_header = array(
            'page_title' => ' - Checkout',
            'additional_styles' => ''
        );

        $data_footer = array(
            'current_url' => $cur_url,
            'additional_scripts' => '<script type="text/javascript" src="'.public_url().'js/bootstrap-timepicker.js"></script>
            <script type="text/javascript" src="'.public_url().'js/bootstrap-datepicker.min.js"></script>
            <script src="'.public_url().'js/checkout.js"></script>'
        );

        $this->load->view('/common/header', $data_header);
        $this->load->view('/common/top_menu');
        $this->load->view('checkout');
        $this->load->view('/common/footer', $data_footer);
    }
}