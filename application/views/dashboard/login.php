<?php
/**
 * Restaurant At Home
 *
 * Contact page for restaurants
 *
 * @package	RestoAtHome
 * @author	A collaboration of: WiVen Web Solutions - IneTh - Shout!
 * @copyright	Copyright (c) 2014 - 2015
 * @copyright
 * @license	*
 * @link	http://restaurantathome.be
 * @since	Version 1.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inloggen aub</h3>
                    </div>
                    <div class="panel-body">
                        <div class="social-buttons clearfix">
                            <a href="#" id="fb_login_btn" class="btn btn-fb btn-block" onclick="fb_login();"><i class="fa fa-facebook"></i> Facebook</a>
                            <!--<fb:login-button scope="public_profile,email" onlogin="checkLoginState();" id="real_fb_btn">
                            </fb:login-button>

                            <fb:logout-button>
                            </fb:logout-button>-->
                        </div>
                        <span style="margin: 15px 0 15px;display: block;">OF</span>
                        <form class="form" role="form" method="post" action="/dashboard/login" accept-charset="UTF-8" id="dashboard_login" data-fv-framework="bootstrap" data-fv-message="Deze waarde is ongeldig" data-fv-icon-valid="fa fa-check" data-fv-icon-invalid="fa fa-remove" data-fv-icon-validating="fa fa-refresh" data-fv-live="enabled">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">E-mail</label>
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Paswoord</label>
                                <input class="form-control" placeholder="Paswoord" name="password" type="password" value=""><div class="progress"><div class="progress-bar"><span class="password-verdict"></span></div></div>
                                <div class="help-block text-right"><a href="<?php echo base_url(); ?>user/passwordrecovery">Paswoord vergeten?</a>
                                </div>
                            </div>
                            <div class="form-group hidden" id="login_danger">
                                <div class="alert alert-danger text-center" role="alert">Ongeldige email of ongeldig paswoord</div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Log in" />
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Hou me ingelogd
                                </label>
                            </div>
                        </form>

                        <div class="bottom text-center">
                            Nieuw hier? <a href="<?php echo base_url(); ?>register"><b>Registreer nu</b></a>
                        </div>
                        <div id="fb-root"></div>




                        <!--<form role="form" action="/dashboard/login" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Paswoord" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Onthoud mij
                                    </label>
                                </div>
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Log in" />
                                <!--<a href="index.html" class="btn btn-lg btn-success btn-block">Log in</a>--
                            </fieldset>
                        </form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>