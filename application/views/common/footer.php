<?php
/**
 * Restaurant At Home
 *
 * This file contains:
 * - The footer tags and main js
 * 
 * @package	RestoAtHome
 * @author	A collaboration of: WiVen Web Solutions - VDW Web - KolorFlux
 * @copyright	Copyright (c) 2014 - 2015
 * @copyright	
 * @license	*
 * @link	http://restaurantathome.be
 * @since	Version 1.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

?>
</div><!-- close container fluid --> 
</div><!-- end wrap -->

    <footer class="footer">
        <div class="container">
            <p class="text-muted" style="line-height: 60px; margin-bottom: 0;">
                &COPY; Restaurant At Home &mdash;
                <a href="<?php echo base_url(); ?>contact">Contact</a> &mdash;
                <a href="<?php echo base_url(); ?>privacy">Privacy Charter</a>
            </p>
        </div>
    </footer>

    <div class="modal fade login-modal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="border: 0; padding: 15px 15px 0 15px">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Login via</h4>
                </div>
                <div class="modal-body">
                    <div class="social-buttons clearfix">
                        <a href="#" class="btn btn-fb col-xs-5"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="#" class="btn btn-tw col-xs-5 col-xs-offset-2"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                    <span style="margin: 15px 0 15px;display: block;">OF</span>
                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">E-mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="E-mail" required>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Paswoord</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Paswoord" required>
                            <div class="help-block text-right"><a href="<?php echo base_url(); ?>user/passwordrecovery">Paswoord vergeten?</a></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Log in</button>
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
                </div>
            </div>
        </div>
    </div>

    <style>

        #login-dp{
            min-width: 250px;
            padding: 14px 14px 0;
            overflow:hidden;
            background-color:rgba(255,255,255,.8);
        }
        #login-dp .help-block{
            font-size:12px
        }
        #login-dp .bottom{
            background-color:rgba(255,255,255,.8);
            border-top:1px solid #ddd;
            clear:both;
            padding:14px;
        }
        #login-dp .social-buttons{
            margin:12px 0
        }
        #login-dp .social-buttons a{
            width: 49%;
        }
        #login-dp .form-group {
            margin-bottom: 10px;
        }
        .btn-fb{
            color: #fff;
            background-color:#3b5998;
        }
        .btn-fb:hover{
            color: #fff;
            background-color:#496ebc
        }
        .btn-tw{
            color: #fff;
            background-color:#55acee;
        }
        .btn-tw:hover{
            color: #fff;
            background-color:#59b5fa;
        }
        @media(max-width:768px){
            #login-dp{
                background-color: inherit;
                color: #fff;
            }
            #login-dp .bottom{
                background-color: inherit;
                border-top:0 none;
            }
        }
    </style>


    <!--<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>-->
    <script src="<?php echo public_url(); ?>js/jquery.min.js"></script>
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>-->
    <script src="<?php echo public_url(); ?>js/bootstrap.min.js"></script>
    <!-- Backstretch script http://srobbin.com/jquery-plugins/backstretch/ -->
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>-->
    <script src="<?php echo public_url(); ?>js/jquery.backstretch.min.js"></script>
    <script src="<?php echo public_url(); ?>js/script.js"></script>
<!--
	<script src="<?php echo public_url(); ?>js/instantclick.min.js" data-no-instant></script>
    <script data-no-instant>InstantClick.init('mousedown');</script>-->

    <?php echo (isset($additional_scripts) ? $additional_scripts : '') ?>
</body>

</html>

<?php //EOF  -'It all ends here'-   ?>