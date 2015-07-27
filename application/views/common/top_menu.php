<?php /** * Restaurant At Home * * This file contains: * - The top menu * * @package RestoAtHome * @author A collaboration of: WiVen Web Solutions - VDW Web - KolorFlux * @copyright Copyright (c) 2014 - 2015 * @copyright * @license * * @link http://restaurantathome.be * @since Version 1.0.0 */ defined( 'BASEPATH') OR exit( 'No direct script access allowed'); ?>

<div class="container-fluid" style="padding:0px">
	<div class="container">
		<header>
			<nav class="navbar">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">

						<a class="navbar-brand" id="home_logo" href="<?php echo base_url(); ?>"><img src="<?php echo public_url(); ?>img/logo_big.png" alt="Restaurant At Home" width="250px" /></a>

						<button type="button" class="navbar-toggle navbar-right right pull-right collapsed navbar-link glyphicon glyphicon-user  drop-shadow" data-toggle="collapse" data-target="#collapse-user-menu" style="margin: 31px 0;">
						</button>
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


	<?php //EOF - 'It all ends here'- ?>
