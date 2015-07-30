<?php /** * Restaurant At Home * * This file contains: * - The top menu * * @package RestoAtHome * @author A collaboration of: WiVen Web Solutions - VDW Web - KolorFlux * @copyright Copyright (c) 2014 - 2015 * @copyright * @license * * @link http://restaurantathome.be * @since Version 1.0.0 */ defined( 'BASEPATH') OR exit( 'No direct script access allowed'); ?>

<div class="container-fluid">

	<!-- Header desktop -->

	<div class="container">
		<header>

			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<a class="navbar-brand" id="home_logo" href="<?php echo base_url(); ?>"><img src="<?php echo public_url(); ?>img/logo_big.png" alt="Restaurant At Home" width="250px" /></a>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-left center-steps hidden-sm hidden-xs">
						<li><i class="fa fa-tag fa-2x fa-rotate-90"></i>Gratis Bestellen</li>
						<li><i class="fa fa-check fa-2x"></i>Afhalen</li>
						<li><i class="fa fa-child fa-2x"></i>Smullen!</li>
					</ul>
					<ul class="nav navbar-nav navbar-right center-login">
						<li><a href="#" data-toggle="modal" data-target=".login-modal" data-backdrop="static">Login / registreer</a>
						</li>
						<li>
							<a href="#"><img src="<?php echo public_url(); ?>img/small_be_flag.png" alt="Nederlands - België">
							</a>
						</li>
					</ul>
				</div>
			</nav>

		</header>
	</div>

	<div class="clearfix"></div>

	<?php //EOF - 'It all ends here'- ?>
