<?php

/**
 * Created by PhpStorm.
 * User: wiven
 * Date: 22/07/15
 * Time: 17:37
 */
class Dashboard extends CI_Controller {

    /**
     * executed when '/dashboard' is loaded
     */
    public function index() {
        //TODO: session_start();

        $data_header = array(
            'page_title' => ' - Dashboard overzicht',
            'additional_styles' => ''
        );

        $data_content = array(
            'pretty_page_title' => 'Dashboard overzicht'
        );

        $data_footer = array(
            'additional_scripts' => ''
        );

        $this->load->view('/dashboard/common/header', $data_header);
        $this->load->view('/dashboard/common/top_menu');
        $this->load->view('/dashboard/overview', $data_content);
        $this->load->view('/dashboard/common/footer', $data_footer);
    }

    /**
     * executed when '/dashboard/overview' is loaded
     */
    public function overview() {
        $this->index();
    }

    /**
     * executed when '/dashboard/profile' is loaded
     */
    public function profile() {
        $data_header = array(
            'page_title' => ' - Profiel',
            'additional_styles' => ''
        );

        $data_content = array(
            'pretty_page_title' => 'Profiel beheren'
        );

        $data_footer = array(
            'additional_scripts' => ''
        );

        $this->load->view('/dashboard/common/header', $data_header);
        $this->load->view('/dashboard/common/top_menu');
        $this->load->view('/dashboard/profile', $data_content);
        $this->load->view('/dashboard/common/footer', $data_footer);
    }

    /**
     * executed when '/dashboard/products' is loaded
     */
    public function products() {
        $data_header = array(
            'page_title' => ' - Producten',
            'additional_styles' => ''
        );

        $data_content = array(
            'pretty_page_title' => 'Producten beheren'
        );

        $data_footer = array(
            'additional_scripts' => ''
        );

        $this->load->view('/dashboard/common/header', $data_header);
        $this->load->view('/dashboard/common/top_menu');
        $this->load->view('/dashboard/products', $data_content);
        $this->load->view('/dashboard/common/footer', $data_footer);
    }

    /**
     * executed when '/dashboard/orders' is loaded
     */
    public function orders() {
        $data_header = array(
            'page_title' => ' - Bestellingen',
            'additional_styles' => ''
        );

        $data_content = array(
            'pretty_page_title' => 'Bestellingen beheren'
        );

        $data_footer = array(
            'additional_scripts' => ''
        );

        $this->load->view('/dashboard/common/header', $data_header);
        $this->load->view('/dashboard/common/top_menu');
        $this->load->view('/dashboard/orders', $data_content);
        $this->load->view('/dashboard/common/footer', $data_footer);
    }

    /**
     * executed when '/dashboard/slots' is loaded
     */
    public function slots() {
        $data_header = array(
            'page_title' => ' - Slots',
            'additional_styles' => ''
        );

        $data_content = array(
            'pretty_page_title' => 'Slots beheren'
        );

        $data_footer = array(
            'additional_scripts' => ''
        );

        $this->load->view('/dashboard/common/header', $data_header);
        $this->load->view('/dashboard/common/top_menu');
        $this->load->view('/dashboard/slots', $data_content);
        $this->load->view('/dashboard/common/footer', $data_footer);
    }

    /**
     * executed when '/dashboard/actions' is loaded
     */
    public function actions() {
        $data_header = array(
            'page_title' => ' - Acties',
            'additional_styles' => ''
        );

        $data_content = array(
            'pretty_page_title' => 'Acties beheren'
        );

        $data_footer = array(
            'additional_scripts' => ''
        );

        $this->load->view('/dashboard/common/header', $data_header);
        $this->load->view('/dashboard/common/top_menu');
        $this->load->view('/dashboard/actions', $data_content);
        $this->load->view('/dashboard/common/footer', $data_footer);
    }

    /**
     * executed when '/dashboard/partners' is loaded
     */
    public function partners() {
        $data_header = array(
            'page_title' => ' - Partners',
            'additional_styles' => ''
        );

        $data_content = array(
            'pretty_page_title' => 'Onze partners'
        );

        $data_footer = array(
            'additional_scripts' => ''
        );

        $this->load->view('/dashboard/common/header', $data_header);
        $this->load->view('/dashboard/common/top_menu');
        $this->load->view('/dashboard/partners', $data_content);
        $this->load->view('/dashboard/common/footer', $data_footer);
    }

    /**
     * executed when '/dashboard/contact' is loaded
     */
    public function contact() {
        $data_header = array(
            'page_title' => ' - Contact',
            'additional_styles' => ''
        );

        $data_content = array(
            'pretty_page_title' => 'Contacteer ons'
        );

        $data_footer = array(
            'additional_scripts' => ''
        );

        $this->load->view('/dashboard/common/header', $data_header);
        $this->load->view('/dashboard/common/top_menu');
        $this->load->view('/dashboard/contact', $data_content);
        $this->load->view('/dashboard/common/footer', $data_footer);
    }

    /**
     * executed when '/dashboard/bugreport' is loaded
     */
    public function bugreport() {
        $data_header = array(
            'page_title' => ' - Bug melden',
            'additional_styles' => ''
        );

        $data_content = array(
            'pretty_page_title' => 'Bug melden'
        );

        $data_footer = array(
            'additional_scripts' => ''
        );

        $this->load->view('/dashboard/common/header', $data_header);
        $this->load->view('/dashboard/common/top_menu');
        $this->load->view('/dashboard/bugreport', $data_content);
        $this->load->view('/dashboard/common/footer', $data_footer);
    }

    /**
     * executed when '/logout' is loaded
     */
    public function logout() {
        //TODO: session destroy + redirect to public homepage
    }
}