<?php /** * Restaurant At Home * * Homepage - also the landing page. * * @package RestoAtHome * @author A collaboration of: Wiven Web Solutions - VDW Web - KolorFlux * @copyright Copyright (c) 2014 - 2015 * @copyright * @license * * @link http://restaurantathome.be * @since Version 1.0.0 */ defined( 'BASEPATH') OR exit( 'No direct script access allowed'); ?>


<div class="homepageback">
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
					<button type="button" id="main_search_button" class="btn btn-primary btn-lg searchbtn" tabindex="3"><i class="fa fa-search"></i> Zoeken!
					</button>
				</div>
				<div class="col-lg-1"></div>
			</form>
		</div>
	</div>

	<div class="row">
		<h2 class="col-lg-12">Restaurants in de kijker</h2>
		<br>
		<a href="#" class="top_resto">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img src="public/img/restaurant-thumbail-preview.jpg">
					<div class="caption">
						<h3 id="thumbnail-label">Restaurant 1</h3>
					</div>
				</div>
			</div>
		</a>
		<a href="#" class="top_resto">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img src="public/img/restaurant-thumbail-preview.jpg">
					<div class="caption">
						<h3 id="thumbnail-label">Restaurant 2</h3>
					</div>
				</div>
			</div>
		</a>
		<a href="#" class="top_resto">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img src="public/img/restaurant-thumbail-preview.jpg">
					<div class="caption">
						<h3 id="thumbnail-label">Restaurant 3</h3>
					</div>
				</div>
			</div>
		</a>
		<a href="#" class="top_resto">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img src="public/img/restaurant-thumbail-preview.jpg">
					<div class="caption">
						<h3 id="thumbnail-label">Restaurant 4</h3>
					</div>
				</div>
			</div>
		</a>
	</div>

	<div class="row clearfix hidden-xs">
		<h2 class="col-lg-12">Onze partners</h2>
		<br>
		<div class="col-sm-6 col-md-4 col-lg-2">
			<img src="public/img/sodexo.jpg">
		</div>
		<div class="col-sm-6 col-md-4 col-lg-2">
			<img src="public/img/unizo.jpg">
		</div>
		<div class="col-sm-6 col-md-4 col-lg-2">
			<img src="public/img/stad-kortrijk.jpg">
		</div>
		<div class="col-sm-6 col-md-4 col-lg-2">
			<img src="public/img/moonen-packaging.jpg">
		</div>
		<div class="col-sm-6 col-md-4 col-lg-2">
			<img src="public/img/vinddevis.jpg">
		</div>
		<div class="col-sm-6 col-md-4 col-lg-2">
			<img src="public/img/wiven.jpg">
		</div>
	</div>
</div>



<?php //EOF - 'It all ends here'- ?>
