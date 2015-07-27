<?php /** * Restaurant At Home * * Homepage - also the landing page. * * @package RestoAtHome * @author A collaboration of: Wiven Web Solutions - VDW Web - KolorFlux * @copyright Copyright (c) 2014 - 2015 * @copyright * @license * * @link http://restaurantathome.be * @since Version 1.0.0 */ defined( 'BASEPATH') OR exit( 'No direct script access allowed'); ?>


<div class="homepageback">
	<!-- here will appear the background images -->
</div>

<div class="container homepage">
	<div class="panel panel-default">
		<div class="panel-heading">Zoek meteen naar je favoriete restaurant:</div>
		<div class="panel-body">
			<form class="form-inline">
				<div class="col-lg-1"></div>
				<div class="form-group col-xs-12 col-sm-6 col-md-5 col-lg-4">
					<label for="addressTop" class="labelStyle">
						Waar wil je eten?
					</label>
					<input type="text" placeholder="Straat, Nummer, Stad of Postcode" id="addressTop" class="form-control" tabindex="1" />
				</div>

				<div class="form-group col-xs-12 col-sm-6 col-md-5 col-lg-4">
					<label for="itemTop" class="labelStyle">
						Wat wil je eten?
					</label>
					<input type="text" placeholder="Sushi, 'Het steakhuis', Aardbei-Sabayon " id="itemTop" class="form-control" tabindex="2" />
				</div>

				<div class="form-group col-xs-12 col-md-2 col-lg-2 col-sm-2">
					<!--onclick="window.location.href='./search'"-->
					<button type="submit" id="main_search_button" class="btn btn-primary btn-lg searchbtn" onclick="window.location.href='./search'" tabindex="3"><i class="fa fa-search"></i> Zoeken
					</button>
				</div>
				<div class="col-lg-1"></div>
			</form>
		</div>
	</div>

	<div class="row">
		<h2 class="col-lg-12">Restaurants in de kijker</h2>

		<a href="#" class="top_resto">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img data-src="holder.js/100%x200" alt="100%x200" src="<?php echo public_url(); ?>img/restaurant-thumbail-preview.jpg" data-holder-rendered="true">
					<div class="caption">
						<h3 id="thumbnail-label">Restaurant 1</h3>
					</div>
				</div>
			</div>
		</a>

		<a href="#" class="top_resto">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img data-src="holder.js/100%x200" alt="100%x200" src="<?php echo public_url(); ?>img/restaurant-thumbail-preview.jpg" data-holder-rendered="true">
					<div class="caption">
						<h3 id="thumbnail-label">Restaurant 2</h3>
					</div>
				</div>
			</div>
		</a>

		<a href="#" class="top_resto">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img data-src="holder.js/100%x200" alt="100%x200" src="<?php echo public_url(); ?>img/restaurant-thumbail-preview.jpg" data-holder-rendered="true">
					<div class="caption">
						<h3 id="thumbnail-label">Restaurant 3</h3>
					</div>
				</div>
			</div>
		</a>

		<a href="#" class="top_resto">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img data-src="holder.js/100%x200" alt="100%x200" src="<?php echo public_url(); ?>img/restaurant-thumbail-preview.jpg" data-holder-rendered="true">
					<div class="caption">
						<h3 id="thumbnail-label">Restaurant 4</h3>
					</div>
				</div>
			</div>
		</a>
	</div>

	<div class="row clearfix">
		<h2 class="col-lg-12">Onze partners</h2>

		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
			<img data-src="holder.js/100%x200" alt="100%x200" src="<?php echo public_url(); ?>img/logos-footer/sodexo.jpg" data-holder-rendered="true">
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
			<img data-src="holder.js/100%x200" alt="100%x200" src="<?php echo public_url(); ?>img/logos-footer/unizo.jpg" data-holder-rendered="true">
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
			<img data-src="holder.js/100%x200" alt="100%x200" src="<?php echo public_url(); ?>img/logos-footer/stad-kortrijk.jpg" data-holder-rendered="true">
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
			<img data-src="holder.js/100%x200" alt="100%x200" src="<?php echo public_url(); ?>img/logos-footer/moonen-packaging.jpg" data-holder-rendered="true">
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
			<img data-src="holder.js/100%x200" alt="100%x200" src="<?php echo public_url(); ?>img/logos-footer/vinddevis.jpg" data-holder-rendered="true">
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
			<img data-src="holder.js/100%x200" alt="100%x200" src="<?php echo public_url(); ?>img/logos-footer/wiven.jpg" data-holder-rendered="true">
		</div>
	</div>
</div>



<?php //EOF - 'It all ends here'- ?>
