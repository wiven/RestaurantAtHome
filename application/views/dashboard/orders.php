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
        <!-- START nieuwe bestellingen -->
        <div class="col-lg-12">
            <div class="panel panel-default panel-red">
                <div class="panel-heading">
                    Nieuwe bestellingen
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Afhaaltijdstip</th>
                                <th>Naam klant</th>
                                <th># items</th>
                                <th># slots</th>
                                <th>Prijs</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                for($i = 0; $i < 5; $i++) {
                                    echo '<tr class="order_detail_tr">
                                <td>17/0'.($i+1).'/2015 '.($i+10).'u00</td>
                                <td>Wim Vandevenne</td>
                                <td>4</td>
                                <td>31</td>
                                <td>&euro; 24,85</td>
                            </tr>';
                                }

                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="/dashboard/orders/new" class="btn btn-default btn-block">
                            <span class="fa fa-plus-square"></span> Meer bestellingen weergeven ...
                        </a><!--
                        <a href="#" class="btn btn-default load_more_actions_btn">
                            <span class="fa fa-plus-square"></span>
                            Meer bestellingen weergeven ...
                        </a>-->
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- END nieuwe bestellingen -->
    </div>

    <div class="row">
        <!-- START  bestellingen in verwerking -->
        <div class="col-lg-6">
            <div class="panel panel-default panel-yellow">
                <div class="panel-heading">
                    Bestellingen in verwerking
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Naam bestelling</th>
                                <th>Looptijd</th>
                                <th># gebruikt</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>OP = OP</td>
                                <td><span class="hidden-xs">Start </span>31/10/2015</td>
                                <td>
                                    31
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Weg is pech</td>
                                <td><span class="hidden-xs">Start </span>30/09/2015</td>
                                <td>
                                    23
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Suggestie van de chef</td>
                                <td><span class="hidden-xs">Start </span>15/10/2015</td>
                                <td>
                                    7
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="/dashboard/orders/busy" class="btn btn-default btn-block">
                            <span class="fa fa-plus-square"></span> Meer bestellingen weergeven ...
                        </a>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- END  bestellingen in verwerking -->

        <!-- START afgeronde bestellingen -->
        <div class="col-lg-6">
            <div class="panel panel-default panel-green">
                <div class="panel-heading">
                    Afgeronde bestellingen
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Naam bestelling</th>
                                <th>Looptijd</th>
                                <th># gebruikt</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>OP = OP</td>
                                <td><span class="hidden-xs">T.e.m. </span>31/12/2015</td>
                                <td>
                                    31
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Weg is pech</td>
                                <td><span class="hidden-xs">T.e.m. </span>30/09/2015</td>
                                <td>
                                    23
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Suggestie van de chef</td>
                                <td><span class="hidden-xs">T.e.m. </span>15/10/2015</td>
                                <td>
                                    7
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="/dashboard/orders/completed" class="btn btn-default btn-block">
                            <span class="fa fa-plus-square"></span> Meer bestellingen weergeven ...
                        </a>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- END afgeronde bestellingen -->
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
                <h4 class="modal-title" id="myModalLabel">Nieuwe bestelling aanmaken</h4>
            </div>
            <div class="modal-body text-justify">
                <div class="col-lg-12">
                    <form class="form-horizontal">
                        <div class="form-group has-feedback">
                            <label class="col-sm-2 control-label" style="text-align: left;" for="inputSuccess2">Naam bestelling</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Naam bestelling">
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
                                <input  type="text" placeholder="click to show datepicker"  id="example1">

                                <input type="date" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" required="required" placeholder="Datum geldig">
                                <span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true" style="color: #a94442;"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                            </div>
                        </div>

                        <!--<div class="input-group date">
                            <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>-->

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