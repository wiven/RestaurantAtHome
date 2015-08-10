<?php

/**
 * Created by PhpStorm.
 * User: wiven
 * Date: 10/08/15
 * Time: 01:39
 */
class Login extends CI_Controller {
    public function index() {
        @session_start();

        /*if(!is_writable(session_save_path())) {
            die('Session path'.session_save_path().'is not writable in PHP');
        }*/

        if(!isset($_SESSION['useremail'])) {
            $_SESSION['useremail'] = $_GET['useremail'];
            setcookie('useremail', $_GET['useremail']);
        }

        if(!isset($_SESSION['userhash'])) {
            $_SESSION['userhash'] = $_GET['userhash'];
            setcookie('userhash', $_GET['userhash']);
        }

        echo true;
    }
}