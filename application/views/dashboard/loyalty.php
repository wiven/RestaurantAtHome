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
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="col-lg-12">
            <form class="form-horizontal">
                <div class="form-group has-feedback">
                    <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Datum geldig</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" red="" placeholder="Naam">
                        <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                    </div>
                </div>

                <div class="form-group has-feedback">
                    <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Stempels</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Stempels volle kaart">
                        <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                    </div>
                </div>

                <div class="form-group has-feedback">
                    <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Cadeau</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5" placeholder="Volle klantenkaart geeft de klant recht op..."></textarea>
                        <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <p class="help-block pull-right"><span style="color: #a94442; font-weight: bold;">*</span> Verplicht in te vullen</p>
                        <button type="submit" class="btn btn-primary">Opslaan</button>
                    </div>
                </div>
            </form>
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
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Geldig van</label>


                            <div class="col-sm-4">
                                <div class="form-group has-feedback clearfix">
                                    <span class="glyphicon glyphicon-calendar form-control-feedback" aria-hidden="true"></span>
                                    <input type="text" id="action_start_date" type="text" class="form-control datepicker">
                                </div>
                            </div>

                            <div class="col-sm-2 text-center">
                                <label class="control-label"><strong>tot</strong></label>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group has-feedback clearfix">
                                    <span class="glyphicon glyphicon-calendar form-control-feedback" aria-hidden="true"></span>
                                    <input type="text" id="action_end_date" type="text" class="form-control datepicker">
                                </div>
                            </div>
                        </div>

                        <!--<div class="input-group date">
                            <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>-->

                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Type korting</label>

                            <div class="col-sm-5 form-group has-feedback">
                                <div class="col-sm-12">
                                    <div class="radio">
                                        <label class="col-xs-6">
                                            <input type="radio" name="reductionType" value="percentage" checked="checked" required="required"> %
                                        </label>
                                        <label class="col-xs-6">
                                            <input type="radio" name="reductionType" value="euro" required="required"> €
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Hoeveelheid</label>

                            <div class="col-sm-3 form-group has-feedback">
                                <input type="number" min="0" step="1" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" placeholder="Hoeveelheid">
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
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Foto</label>
                            <div class="col-sm-10">
                                <span class="btn btn-success fileinput-button">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    <span>Foto kiezen</span>
                                    <input type="file" name="files[]">
                                </span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Actieproducten</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Actieproducten">
                                <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                            <a href="#" class="btn btn-primary btn-sm col-sm-3">Producten selecteren</a>
                        </div>

                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Capaciteit</label>
                            <div class="col-sm-10">


                                <div class="col-sm-6 form-group has-feedback">
                                    <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Ma</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Capaciteit">
                                        <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                </div>

                                <div class="col-sm-6 form-group has-feedback">
                                    <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Vr</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Capaciteit">
                                        <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                </div>

                                <div class="col-sm-6 form-group has-feedback">
                                    <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Di</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Capaciteit">
                                        <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                </div>

                                <div class="col-sm-6 form-group has-feedback">
                                    <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Za</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Capaciteit">
                                        <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                </div>

                                <div class="col-sm-6 form-group has-feedback">
                                    <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Wo</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Capaciteit">
                                        <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                </div>

                                <div class="col-sm-6 form-group has-feedback">
                                    <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Zo</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Capaciteit">
                                        <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                </div>

                                <div class="col-sm-6 form-group has-feedback">
                                    <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Do</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Capaciteit">
                                        <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                    </div>
                                </div>




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
                        <button type="submit" class="btn btn-primary btn-lg">Actie cre&euml;eren</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>