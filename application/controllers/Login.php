<?php

/**
 * Created by PhpStorm.
 * User: wiven
 * Date: 10/08/15
 * Time: 01:39
 */
class Login extends CI_Controller {
    public function index() {
        die($_GET['useremail']);
        $_SESSION['useremail'] = $_GET['useremail'];
        $_SESSION['userhash'] = $_GET['userhash'];
        setcookie('userhash', $_GET['userhash']);
        echo true;
    }
}