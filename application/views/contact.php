<?php
/**
 * Restaurant At Home
 *
 * Contact page
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

<div class="container">
    <h2 class="page-header">Contacteer ons</h2>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
            <p>
                Hebt u een vraag voor ons, of vindt u dat er nog iets ontbreekt om dit project nog beter te maken? Aarzel dan niet en contacteer ons!
                Bent u een bestellende klant, of restauranthouder met interesse in RestaurantAtHome maar toch nog niet volledig overtuigd?
                Laat het ons weten, en we reageren zo snel mogelijk op je vraag.
            </p>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 20px 0;" id="contact_type_btns">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 15px;"><a class="btn btn-primary btn-block" href="#consument">Ik ben een consument</a></div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 15px;"><a class="btn btn-primary btn-block" href="#restaurant">Ik heb een restaurant</a></div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 15px;"><a class="btn btn-primary btn-block" href="#pers">Ik ben van de pers</a></div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 15px;"><a class="btn btn-primary btn-block" href="#marketing">Ik heb een marketingvoorstel</a></div>
        </div>

        <div class="col-lg-8">
            <form class="form-horizontal">
                <div class="form-group has-feedback">
                    <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Naam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" red placeholder="Naam">
                        <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                    </div>
                </div>

                <div class="form-group has-feedback">
                    <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="E-mailadres">
                        <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                    </div>
                </div>

                <div class="form-group has-feedback">
                    <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Bericht</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5"></textarea>
                        <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <p class="help-block"><span style="color: #a94442; font-weight: bold;">&ast;</span> Verplicht in te vullen</p>
                        <button type="submit" class="btn btn-primary">Verstuur</button>
                        <button type="cancel" class="btn btn-default">Annuleren</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-4">
            <p><a href="mailto:info@restaurantathome.be">info@restaurantathome.be</a></p>
        </div>
    </div>
</div>



<?php //EOF  -'It all ends here'-   ?>
    
