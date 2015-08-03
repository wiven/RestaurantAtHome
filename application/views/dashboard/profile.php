<?php
/**
 * Restaurant At Home
 *
 * Contact page for restaurants
 *
 * @package	RestoAtHome
 * @author	A collaboration of: WiVen Web Solutions - IneTh - Shout!
 * @copyright	Copyright (c) 2014 - 2015
 * @copyright
 * @license	*
 * @link	http://restaurantathome.be
 * @since	Version 1.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo (isset($pretty_page_title) ? $pretty_page_title : '') ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">



        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul class="list-group clearfix">
                <li class="list-group-item clearfix" id="info_resto">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center">
                        <img id="logo_resto" src="http://www.restaurantfleurdelin.be/img/1.png">
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right" id="important_info_resto">
                        <a href="#" title="Routebeschrijving" data-toggle="modal" data-target="#mapsModal" data-backdrop="static"><span class="fa fa-map-marker fa-fw"></span>IJzerfrontlaan 13, 8500 Kortrijk</a>
                        <br /> +32 2 123 45 67
                        <br />
                        <a href="mailto:info@restaurantathome.be">info@restaurantathome.be</a>
                        <br />
                        <a href="http://restaurantathome.be" target="_blank">http://restaurantathome.be</a>
                        <br />
						<span class="hidden_info_mobile">
							Specialiteit: Ribbetjes<br />
							Keuken: Belgisch<br /><br />
							<span class="socials">
							   <a href="#" target="_blank"><span class="fa fa-facebook-square fa-2x pull-right"></span>
                               </a>
						<a href="#" target="_blank"><span class="fa fa-twitter-square fa-2x pull-right"></span></a>
						<a href="#" target="_blank"><span class="fa fa-instagram fa-2x pull-right"></span></a>
						<a href="#" target="_blank"><span class="fa fa-picture-o fa-2x pull-right"></span></a>
						</span>
						</span>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs text-center">
                        <img id="logo_resto" src="http://www.restaurantfleurdelin.be/img/1.png">
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden_info_mobile">
                        <p>
                            Ma: 15:00 - 23:00
                            <br /> Di: 15:00 - 23:00
                            <br /> Wo: Gesloten
                            <br /> Do: 15:00 - 23:00
                            <br />
                            <strong>Vr: 15:00 - 00:00</strong>
                            <br /> Za: 12:00 - 00:00
                            <br /> Zo: 12:00 - 00:00
                            <br />
                            <br />
                            <span class="fa fa-credit-card fa-2x" title="Bancontact/Mister Cash/Maestro"></span>
                            <span class="fa fa-cc-visa fa-2x" title="VISA/MasterCard"></span>
                            <span class="fa fa-bitcoin fa-2x" title="Bitcoin"></span>
                            <span class="fa fa-money fa-2x" title="Cash"></span>
                        </p>
                    </div>

                    <a href="#" class="btn_more_resto_info btn btn-primary hidden-lg hidden-md hidden-sm col-xs-8 col-xs-offset-2" style="margin-top: 10px;"><span class="fa fa-chevron-circle-down"></span> Meer info</a>
                    <a href="#" class="btn_more_resto_info btn btn-primary hidden-lg hidden-md hidden-sm col-xs-8 col-xs-offset-2" style="margin-top: 10px; display: none;"><span class="fa fa-chevron-circle-up"></span> Minder info</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<!-- Modal new action -->
<div class="modal fade" id="newActionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Nieuwe actie aanmaken</h4>
            </div>
            <div class="modal-body text-justify">
                <div class="col-lg-12">
                    <form class="form-horizontal">
                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Naam actie</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Naam actie">
                                <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Lijkt op</label>
                            <div class="col-sm-10">
                                <select class="form-control">
                                    <option value=""></option>
                                    <option value="">Voorgerechten</option>
                                    <option value="">Hoofdgerechten</option>
                                    <option value="">Desserts</option>
                                    <option value="">Dranken</option>
                                    <option value="">Extra's</option>
                                </select>
                                <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Datum geldig</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Datum geldig">
                                <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Type korting</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Type korting">
                                <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">
                                # stempels
                                <a href="#">?</a>
                            </label>
                            <div class="col-sm-10">
                                <input type="number" min="0" step="1" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" placeholder="Aantal stempels">
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Beschrijving</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5"></textarea>
                                <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Foto's</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Foto's">
                                <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Actieproducten</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Actieproducten">
                                <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                <a href="#" class="btn btn-primary btn-sm">Producten selecteren</a>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Capaciteit</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Capaciteit">
                                <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="test"></div>
            <div class="test"></div>
            <div class="test"></div>
            <div class="test"></div>
            <div class="test"></div>

            <div class="modal-footer">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <p class="help-block"><span style="color: #a94442; font-weight: bold;">&ast;</span> Verplicht in te vullen</p>
                        <button type="cancel" class="btn btn-default" data-dismiss="modal">Annuleren</button>
                        <button type="submit" class="btn btn-primary btn-lg">Actie cre&euml;eren</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>