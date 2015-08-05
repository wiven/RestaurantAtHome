<?php /** * Restaurant At Home * * Homepage - also the landing page. * * @package RestoAtHome * @author A collaboration of: Wiven Web Solutions - IneTh - Shout! * @copyright Copyright (c) 2014 - 2015 * @copyright * @license * * @link http://restaurantathome.be * @since Version 1.0.0 */ defined( 'BASEPATH') OR exit( 'No direct script access allowed'); ?>

<div class="homepageback hidden-xs"></div>

<div class="container homepage search-party">

	<!-- Search party -->

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
					<button type="button" id="main_search_button" class="btn btn-primary btn-lg searchbtn" tabindex="3"><i class="fa fa-search"></i> Zoeken
					</button>
				</div>
				<div class="col-lg-1"></div>
			</form>
		</div>
	</div>

	<!-- Restaurants in de kijker -->

	<div class="row hidden-xs">
		<h2 class="col-lg-12">Restaurants in de kijker</h2>
		<a href="#" class="top_resto">
			<div class="col-sm-6 col-md-3 col-lg-3">
				<figure class="thumbnail">
					<img class="img-responsive" src="http://www.restaurantmartinwishart.co.uk/wp-content/themes/martin-wishart/images/gallery/overview-of-the-restaurant.jpg">
					<figcaption class="caption">
						<h3 id="thumbnail-label">Kaai 17</h3>
					</figcaption>
				</figure>
			</div>
		</a>
		<a href="#" class="top_resto">
			<div class="col-sm-6 col-md-3 col-lg-3">
				<figure class="thumbnail">
					<img class="img-responsive" src="http://www.restaurantmartinwishart.co.uk/wp-content/themes/martin-wishart/images/gallery/overview-of-the-restaurant.jpg">
					<figcaption class="caption">
						<h3 id="thumbnail-label">Kaai 17</h3>
					</figcaption>
				</figure>
			</div>
		</a>
		<a href="#" class="top_resto">
			<div class="col-sm-6 col-md-3 col-lg-3">
				<figure class="thumbnail">
					<img class="img-responsive" src="http://www.restaurantmartinwishart.co.uk/wp-content/themes/martin-wishart/images/gallery/overview-of-the-restaurant.jpg">
					<figcaption class="caption">
						<h3 id="thumbnail-label">Kaai 17</h3>
					</figcaption>
				</figure>
			</div>
		</a>
		<a href="#" class="top_resto">
			<div class="col-sm-6 col-md-3 col-lg-3">
				<figure class="thumbnail">
					<img class="img-responsive" src="http://www.restaurantmartinwishart.co.uk/wp-content/themes/martin-wishart/images/gallery/overview-of-the-restaurant.jpg">
					<figcaption class="caption">
						<h3 id="thumbnail-label">Kaai 17</h3>
					</figcaption>
				</figure>
			</div>
		</a>
	</div>

	<!-- Partners -->

	<div class="row clearfix hidden-xs hidden-sm">
		<h2 class="col-lg-12">Onze partners</h2>
		<br>
		<div class="col-md-4 col-lg-2">
			<figure>
				<img class="img-responsive" src="public/img/sodexo.jpg">
			</figure>
		</div>
		<div class="col-md-4 col-lg-2">
			<figure><img class="img-responsive" src="public/img/unizo.jpg">
			</figure>
		</div>
		<div class="col-md-4 col-lg-2">
			<figure><img class="img-responsive" src="public/img/stad-kortrijk.jpg">
			</figure>
		</div>
		<div class="col-md-4 col-lg-2">
			<figure><img class="img-responsive" src="public/img/moonen-packaging.jpg">
			</figure>
		</div>
		<div class="col-md-4 col-lg-2">
			<figure><img class="img-responsive" src="public/img/vinddevis.jpg">
			</figure>
		</div>
		<div class="col-md-4 col-lg-2">
			<figure><img class="img-responsive" src="public/img/wiven.jpg">
			</figure>
		</div>
	</div>
</div>

<?php //EOF - 'It all ends here'- ?>
