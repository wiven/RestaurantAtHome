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
        <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12 row-grid">
            <a href="#" class="btn btn-primary form-control" data-toggle="modal" data-target="#editContactModal" data-backdrop="static" title="Bewerk contactgegevens">
                <span class="fa fa-edit fa-fw"></span>
                Bewerk contactgegevens</a>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12 row-grid">
            <a href="#" class="btn btn-primary form-control" data-toggle="modal" data-target="#editCoverModal" data-backdrop="static" title="Bewerk coverfoto">
                <span class="fa fa-edit fa-fw"></span>
                Bewerk coverfoto</a>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12 row-grid">
            <a href="#" class="btn btn-primary form-control" data-toggle="modal" data-target="#editOpeningHoursModal" data-backdrop="static" title="Bewerk openingsuren">
                <span class="fa fa-edit fa-fw"></span>
                Bewerk openingsuren</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
            <a href="#" class="btn btn-primary form-control" data-toggle="modal" id="edit_social_media" data-target="#editSocialModal" data-backdrop="static" title="Bewerk social media">
                <span class="fa fa-edit fa-fw"></span>
                Bewerk social media</a>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
            <a href="#" class="btn btn-primary form-control">
                <span class="fa fa-edit fa-fw"></span>
                Bewerk sfeerfoto's</a>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
            <a href="#" class="btn btn-primary form-control" data-toggle="modal" data-target="#editPaymentsModal" data-backdrop="static" title="Bewerk betaalmogelijkheden">
                <span class="fa fa-edit fa-fw"></span>
                Bewerk betaalmogelijkheden</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h3>Preview voor de klanten</h3>

            <ul class="list-group clearfix">
                <li class="list-group-item clearfix" id="info_resto">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center">
                        <img id="logo_resto" class="img-responsive" src="http://www.restaurantfleurdelin.be/img/1.png">
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right" id="important_info_resto">
                        <span class="fa fa-map-marker fa-fw"></span>IJzerfrontlaan 13, 8500 Kortrijk
                        <br /> +32 2 123 45 67
                        <br />
                        info@restaurantathome.be
                        <br />
                        http://restaurantathome.be
                        <br />
						<span class="hidden_info_mobile">
							Specialiteit: Ribbetjes<br />
							Keuken: Belgisch<br /><br />
							<span class="socials visible-lg-block">
							   <span class="fa fa-facebook-square fa-2x pull-right"></span>
                                <span class="fa fa-twitter-square fa-2x pull-right"></span>
                                <span class="fa fa-instagram fa-2x pull-right"></span>
                                <span class="fa fa-picture-o fa-2x pull-right"></span>
						    </span>
						</span>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs text-center">
                        <img id="logo_resto" class="img-responsive vcenter" src="http://www.restaurantfleurdelin.be/img/1.png">
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

<!-- Modal edit cover modal -->
<div class="modal fade" id="editCoverModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Betaalmogelijkheden bewerken</h4>
            </div>
            <div class="modal-body text-justify">
                <div class="col-lg-12">
                    <form class="form-horizontal">
                        <div class="form-group has-feedback">
                            <div class="text-center">
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1"> Cash
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option2"> BanContact
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" value="option3"> VISA/MasterCard
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" value="option3"> BitCoin
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="cancel" class="btn btn-default" data-dismiss="modal">Annuleren</button>
                        <button type="submit" class="btn btn-primary btn-lg">Gegevens opslaan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal edit payments info -->
<div class="modal fade" id="editPaymentsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Betaalmogelijkheden bewerken</h4>
            </div>
            <div class="modal-body text-justify">
                <div class="col-lg-12">
                    <form class="form-horizontal">
                        <div class="form-group has-feedback">
                            <div class="text-center">
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1"> Cash
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option2"> BanContact
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" value="option3"> VISA/MasterCard
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" value="option3"> BitCoin
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="cancel" class="btn btn-default" data-dismiss="modal">Annuleren</button>
                        <button type="submit" class="btn btn-primary btn-lg">Gegevens opslaan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal edit social info -->
<div class="modal fade" id="editSocialModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Social media bewerken</h4>
            </div>
            <div class="modal-body text-justify">
                <div class="col-lg-12">
                    <form class="form-horizontal">
                        <div class="form-group has-feedback">
                            <label class="col-sm-3 control-label" style="text-align: left;" for="inputSuccess2">Foto's</label>
                            <div class="col-sm-9">
                                <span class="btn btn-success fileinput-button">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    <span>Foto's kiezen</span>
                                    <input type="file" name="files[]" multiple="multiple">
                                </span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-3 control-label" style="text-align: left;" for="inputSuccess2">Instagram</label>
                            <div class="col-sm-9">
                                <input type="url" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Instagram">
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-3 control-label" style="text-align: left;" for="inputSuccess2">Twitter</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Twitter">
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-3 control-label" style="text-align: left;" for="inputSuccess2">Facebook</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Facebook">
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="cancel" class="btn btn-default" data-dismiss="modal">Annuleren</button>
                        <button type="submit" class="btn btn-primary btn-lg">Gegevens opslaan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal edit contact info -->
<div class="modal fade" id="editContactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Contactgegevens bewerken</h4>
            </div>
            <div class="modal-body text-justify">
                <div class="col-lg-12">
                    <form class="form-horizontal">
                        <div class="form-group has-feedback">
                            <label class="col-sm-3 control-label" style="text-align: left;" for="inputSuccess2">Adres</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Adres">
                                <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-3 control-label" style="text-align: left;" for="inputSuccess2">Telefoon</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Telefoon">
                                <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-3 control-label" style="text-align: left;" for="inputSuccess2">E-mail</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="E-mail">
                                <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-3 control-label" style="text-align: left;" for="inputSuccess2">Website</label>
                            <div class="col-sm-9">
                                <input type="url" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Website">
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-3 control-label" style="text-align: left;" for="inputSuccess2">Specialiteit</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Specialiteit">
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-3 control-label" style="text-align: left;" for="inputSuccess2">Type keuken</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Type keuken">
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <p class="help-block"><span style="color: #a94442; font-weight: bold;">&ast;</span> Verplicht in te vullen</p>
                        <button type="cancel" class="btn btn-default" data-dismiss="modal">Annuleren</button>
                        <button type="submit" class="btn btn-primary btn-lg">Gegevens opslaan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal edit opening hours -->
<div class="modal fade" id="editOpeningHoursModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Openingsuren bewerken</h4>
            </div>
            <div class="modal-body text-justify">
                <div>
                    <form class="form-horizontal">
                        <div class="form-group has-feedback col-lg-6">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Ma</label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="my-checkbox" class="day_openings">
                                <a href="#" class="edit_hours_link" title="Openingsuren maandag aanpassen"><span class="fa fa-edit fa-fw vcenter"></span></a>
                            </div>
                        </div>
                        <div class="form-group has-feedback col-lg-6 pull-right">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Vr</label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="my-checkbox" class="day_openings" checked>
                                <a href="#" class="edit_hours_link" title="Openingsuren vrijdag aanpassen"><span class="fa fa-edit fa-fw vcenter"></span></a>
                            </div>
                        </div>

                        <div class="form-group has-feedback col-lg-6">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Di</label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="my-checkbox" class="day_openings" checked>
                                <a href="#" class="edit_hours_link" title="Openingsuren dinsdag aanpassen"><span class="fa fa-edit fa-fw vcenter"></span></a>
                            </div>
                        </div>
                        <div class="form-group has-feedback col-lg-6 pull-right">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Za</label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="my-checkbox" class="day_openings" checked>
                                <a href="#" class="edit_hours_link" title="Openingsuren zaterdag aanpassen"><span class="fa fa-edit fa-fw vcenter"></span></a>
                            </div>
                        </div>

                        <div class="form-group has-feedback col-lg-6">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Wo</label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="my-checkbox" class="day_openings" checked>
                                <a href="#" class="edit_hours_link" title="Openingsuren woensdag aanpassen"><span class="fa fa-edit fa-fw vcenter"></span></a>
                            </div>
                        </div>
                        <div class="form-group has-feedback col-lg-6 pull-right">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Zo</label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="my-checkbox" class="day_openings" checked>
                                <a href="#" class="edit_hours_link" title="Openingsuren zondag aanpassen"><span class="fa fa-edit fa-fw vcenter"></span></a>
                            </div>
                        </div>

                        <div class="form-group has-feedback col-lg-6">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Do</label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="my-checkbox" class="day_openings" checked>
                                <a href="#" class="edit_hours_link" title="Openingsuren donderdag aanpassen"><span class="fa fa-edit fa-fw vcenter"></span></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal-footer">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="cancel" class="btn btn-default" data-dismiss="modal">Annuleren</button>
                        <button type="submit" class="btn btn-primary btn-lg">Gegevens opslaan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>