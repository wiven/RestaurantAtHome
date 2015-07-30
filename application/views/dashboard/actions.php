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
        <div class="col-xs-12 text-right" id="col_new_action">
            <a href="#" class="btn btn-primary btn-lg" id="btn_new_action">
                <span class="fa fa-plus"></span>
                Nieuwe actie
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default panel-green">
                <div class="panel-heading">
                    Lopende acties
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Naam actie</th>
                                <th>Looptijd</th>
                                <th># gebruikt</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>OP = OP</td>
                                <td>T.e.m. 31/12/2015</td>
                                <td>
                                    31
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Weg is pech</td>
                                <td>T.e.m. 30/09/2015</td>
                                <td>
                                    23
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Suggestie van de chef</td>
                                <td>T.e.m. 15/10/2015</td>
                                <td>
                                    7
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        <div class="col-lg-6">
            <div class="panel panel-default panel-yellow">
                <div class="panel-heading">
                    Aankomende acties
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Naam actie</th>
                                <th>Looptijd</th>
                                <th># gebruikt</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>OP = OP</td>
                                <td>Start 31/10/2015</td>
                                <td>
                                    31
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Weg is pech</td>
                                <td>Start 30/09/2015</td>
                                <td>
                                    23
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Suggestie van de chef</td>
                                <td>Start 15/10/2015</td>
                                <td>
                                    7
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default panel-red">
                <div class="panel-heading">
                    Verlopen acties
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Naam actie</th>
                                <th>Looptijd</th>
                                <th># gebruikt</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>OP = OP</td>
                                <td>T.e.m. 31/12/2014</td>
                                <td>
                                    31
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Weg is pech</td>
                                <td>T.e.m. 30/06/2015</td>
                                <td>
                                    23
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Suggestie van de chef</td>
                                <td>T.e.m. 15/02/2015</td>
                                <td>
                                    7
                                    <a href="" title="Actie bewerken"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->