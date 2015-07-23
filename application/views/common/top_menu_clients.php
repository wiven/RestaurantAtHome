<?php /** * Restaurant At Home * * This file contains: * - The top menu * * @package RestoAtHome * @author A collaboration of: WiVen Web Solutions - VDW Web - KolorFlux * @copyright Copyright (c) 2014 - 2015 * @copyright * @license * * @link http://restaurantathome.be * @since Version 1.0.0 */ defined( 'BASEPATH') OR exit( 'No direct script access allowed'); ?>

<div class="container-fluid" style="padding:0px">
	<div class="container">
		<header>
			<nav class="navbar navbar-fixed-top" id="topnav" style="background-color: #fff; border-bottom: 1px solid #ddd;">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>-->
						<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo public_url(); ?>img/logo_big.png" alt="Restaurant At Home" width="150px"></a>

						<button type="button" class="navbar-toggle navbar-right right pull-right collapsed navbar-link glyphicon glyphicon-user  drop-shadow" data-toggle="collapse" data-target="#collapse-user-menu" style="margin-top: 18px;">
						</button>
					</div>


					<div class="form-group has-feedback col-lg-4 col-md-3 col-sm-6 clearfix" style="margin-top: 20px; padding: 0;">
						<span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
						<input type="search" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" placeholder="Zoeken ..." value="Kortrijk">
						<span id="inputSuccess2Status" class="sr-only">(search)</span>

						<!--<input type="button" class="btn btn-primary" value="Meer filters" />-->
					</div>





					<ul class="nav navbar-default navbar-nav navbar-right drop-shadow hidden-xs">
						<li><a href="#" data-toggle="modal" data-target=".login-modal" data-backdrop="static">Login / registreer</a>
						</li>
						<li><a href="#"><img src="<?php echo public_url(); ?>img/small_be_flag.png" alt="Nederlands - Belgi&euml;" ></a>
						</li>
					</ul>

					<div class="collapse navbar-collapse" id="collapse-user-menu">
						<ul class="nav navbar-default navbar-nav navbar-right drop-shadow hidden-sm hidden-md hidden-lg">
							<li><a href="#" data-toggle="modal" data-target=".login-modal" data-backdrop="static">Login / registreer</a>
							</li>
							<li><a href="#"><img src="<?php echo public_url(); ?>img/small_be_flag.png" alt="Nederlands - Belgi&euml;" ></a>
							</li>
						</ul>
					</div>

					<ul class="nav navbar-nav steps hidden-xs hidden-sm">
						<li><i class="fa fa-tag fa-2x fa-rotate-90"></i>Gratis Bestellen</li>
						<li><i class="fa fa-check fa-2x"></i>Afhalen</li>
						<li><i class="fa fa-child fa-2x"></i>Smullen!</li>
					</ul>

				</div>
				<!-- /.container-fluid -->
			</nav>
		</header>

	</div>

	<!--
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
							<div class="help-block text-right"><a href="">Paswoord vergeten?</a></div>
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
						Nieuw hier? <a href="#"><b>Registreer nu</b></a>
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
	-->

	<?php //EOF - 'It all ends here'- ?>
