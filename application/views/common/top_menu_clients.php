<?php /** * Restaurant At Home * * This file contains: * - The top menu * * @package RestoAtHome * @author A collaboration of: WiVen Web Solutions - VDW Web - KolorFlux * @copyright Copyright (c) 2014 - 2015 * @copyright * @license * * @link http://restaurantathome.be * @since Version 1.0.0 */ defined( 'BASEPATH') OR exit( 'No direct script access allowed'); ?>

<div class="container-fluid">

	<!-- Header desktop -->

	<div class="container-fluid">
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
				<div id="searchbox-detail" class="form-group has-feedback col-lg-4 col-md-3 col-sm-6 clearfix">
						<span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
						<input type="search" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" placeholder="Zoeken ...">
						<span id="inputSuccess2Status" class="sr-only">(search)</span>
					</div>
				<div class="navbar-collapse collapse">
					<!--<ul class="nav navbar-nav navbar-right center-login">
						<li><a href="#" data-toggle="modal" data-target=".login-modal" data-backdrop="static">Login / registreer</a>
						</li>
						<li>
							<a href="#"><img src="http://test.restaurantathome.be/public/img/small_be_flag.png" alt="Nederlands - België">
							</a>
						</li>
					</ul>-->
				</div>
			</nav>

		</header>
	</div>

	<div class="clearfix"></div>

	<?php //EOF - 'It all ends here'- ?>
