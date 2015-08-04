<?php /** * Restaurant At Home * * Register page * * @package RestoAtHome * @author A collaboration of: WiVen Web Solutions - VDW Web - KolorFlux * @copyright Copyright (c) 2014 - 2015 * @copyright * @license * * @link http://restaurantathome.be * @since Version 1.0.0 */ defined( 'BASEPATH') OR exit( 'No direct script access allowed'); ?>

<div class="container">
	<h2 class="page-header">Registreer u nu!</h2>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
			<p>
				Hebt u een vraag voor ons, of vindt u dat er nog iets ontbreekt om dit project nog beter te maken? Aarzel dan niet en contacteer ons! Bent u een bestellende klant, of restauranthouder met interesse in RestaurantAtHome maar toch nog niet volledig overtuigd? Laat het ons weten, en we reageren zo snel mogelijk op je vraag.
			</p>
		</div>

		<div class="col-lg-12">

			<form class="form-horizontal">
				<div class="form-group has-feedback">
					<label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Ik ben</label>
					<div class="col-sm-10">
						<div class="radio">
							<label class="col-xs-6">
								<input type="radio" name="optionsUserType" value="consumer"checked="checked" required="required"> Ik ben een consument
							</label>
							<label class="col-xs-6">
								<input type="radio" name="optionsUserType" value="resto" required="required"> Ik heb een restaurant
							</label>
						</div>
					</div>
				</div>

				<div class="form-group has-feedback">
					<label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Voornaam</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" red placeholder="Voornaam">
						<span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true"></span>
						<span id="inputSuccess2Status" class="sr-only">(success)</span>
					</div>
				</div>

				<div class="form-group has-feedback">
					<label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Naam</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Naam">
						<span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true"></span>
						<span id="inputSuccess2Status" class="sr-only">(success)</span>
					</div>
				</div>

				<div class="form-group has-feedback">
					<label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">E-mailadres</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="E-mailadres">
						<span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true"></span>
						<span id="inputSuccess2Status" class="sr-only">(success)</span>
					</div>
				</div>

				<div class="form-group has-feedback">
					<label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Paswoord</label>
					<div class="col-sm-10">
						<input type="password" required class="form-control" />
						<span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true"></span>
						<span id="inputSuccess2Status" class="sr-only">(success)</span>
					</div>
				</div>

				<div class="form-group has-feedback">
					<label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Herhaal paswoord</label>
					<div class="col-sm-10">
						<input type="password" required class="form-control" />
						<span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true"></span>
						<span id="inputSuccess2Status" class="sr-only">(success)</span>
					</div>
				</div>

				<div class="form-group has-feedback">
					<div class="col-sm-10 col-sm-offset-2">
						<div class="radio">
							<label>
								<input type="checkbox" name="optionsUserType" value="consumer"> Ik heb de <a href="/generalconditions" target="_blank">algemene gebruiksvoorwaarden</a> gelezen en aanvaard ze.
							</label>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<p class="help-block"><span>&ast;</span> Verplicht in te vullen</p>
						<!--<button type="cancel" class="btn btn-default">Annuleren</button>-->
						<button type="submit" class="btn btn-primary">Maak gebruik van RestaurantAtHome</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php //EOF - 'It all ends here'- ?>
