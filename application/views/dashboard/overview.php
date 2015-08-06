<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo (isset($pretty_page_title) ? $pretty_page_title : '') ?></h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading pending-orders">
					<h4>U heeft <span class="order-number">3</span> nieuwe bestellingen</h4>
				</div>
			</div>
		</div>
		<!-- /.row -->
		<div class="row clearfix">
            <!-- LOPENDE ACTIES -->
			<div class="col-lg-6">
				<div class="panel panel-default" id="panel_lopende_acties_overview">
					<div class="panel-heading">
						<i class="fa fa-fire fa-fw"></i> Lopende acties
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
									<td><span class="hidden-xs">T.e.m. </span>31/12/2015</td>
									<td>
										31
                                        <a href="#" data-toggle="modal" data-title="Actie wijzigen" data-target="#newActionModal" data-backdrop="static" title="Actie wijzigen"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
									</td>
								</tr>
								<tr>
									<td>Weg is pech</td>
									<td><span class="hidden-xs">T.e.m. </span>30/09/2015</td>
									<td>
										23
                                        <a href="#" data-toggle="modal" data-title="Actie wijzigen" data-target="#newActionModal" data-backdrop="static" title="Actie wijzigen"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
									</td>
								</tr>
								<tr>
									<td>Suggestie van de chef</td>
									<td><span class="hidden-xs">T.e.m. </span>15/10/2015</td>
									<td>
										7
                                        <a href="#" data-toggle="modal" data-title="Actie wijzigen" data-target="#newActionModal" data-backdrop="static" title="Actie wijzigen"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
									</td>
								</tr>
                                <tr>
                                    <td>Weg is pech</td>
                                    <td><span class="hidden-xs">T.e.m. </span>30/09/2015</td>
                                    <td>
                                        23
                                        <a href="#" data-toggle="modal" data-title="Actie wijzigen" data-target="#newActionModal" data-backdrop="static" title="Actie wijzigen"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Suggestie van de chef</td>
                                    <td><span class="hidden-xs">T.e.m. </span>15/10/2015</td>
                                    <td>
                                        7
                                        <a href="#" data-toggle="modal" data-title="Actie wijzigen" data-target="#newActionModal" data-backdrop="static" title="Actie wijzigen"><span class="fa fa-edit pull-right edit-action-icon"></span></a>
                                    </td>
                                </tr>
								</tbody>
							</table>
						</div>
						<div class="text-center">
							<a href="/dashboard/actions" class="btn btn-default btn-block">
								<span class="fa fa-plus-square"></span> Meer acties weergeven ...
							</a>
						</div>
						<!-- /.table-responsive -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- BESTELLINGEN VANDAAG -->
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-tasks fa-fw"></i> Bestellingen vandaag
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="list-group">
							<a href="#" class="list-group-item">
								<i class="fa fa-comment fa-fw"></i> New Comment
								<span class="pull-right text-muted small"><em>4 minutes ago</em>
									</span>
							</a>
							<a href="#" class="list-group-item">
								<i class="fa fa-twitter fa-fw"></i> 3 New Followers
								<span class="pull-right text-muted small"><em>12 minutes ago</em>
									</span>
							</a>
							<a href="#" class="list-group-item">
								<i class="fa fa-envelope fa-fw"></i> Message Sent
								<span class="pull-right text-muted small"><em>27 minutes ago</em>
									</span>
							</a>
							<a href="#" class="list-group-item">
								<i class="fa fa-tasks fa-fw"></i> New Task
								<span class="pull-right text-muted small"><em>43 minutes ago</em>
									</span>
							</a>
							<a href="#" class="list-group-item">
								<i class="fa fa-upload fa-fw"></i> Server Rebooted
								<span class="pull-right text-muted small"><em>11:32 AM</em>
									</span>
							</a>
							<a href="#" class="list-group-item">
								<i class="fa fa-bolt fa-fw"></i> Server Crashed!
								<span class="pull-right text-muted small"><em>11:13 AM</em>
									</span>
							</a>
							<a href="#" class="list-group-item">
								<i class="fa fa-warning fa-fw"></i> Server Not Responding
								<span class="pull-right text-muted small"><em>10:57 AM</em>
									</span>
							</a>
							<a href="#" class="list-group-item">
								<i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
								<span class="pull-right text-muted small"><em>9:49 AM</em>
									</span>
							</a>
							<a href="#" class="list-group-item">
								<i class="fa fa-money fa-fw"></i> Payment Received
								<span class="pull-right text-muted small"><em>Yesterday</em>
									</span>
							</a>
						</div>
						<!-- /.list-group -->
						<a href="#" class="btn btn-default btn-block">View All Alerts</a>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-4 -->
			<!-- Partners -->
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-link fa-fw"></i> Onze partners
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<?php
						for($i = 0; $i < 4; $i++) {
							echo '<a href="#" class="top_resto">
			<div class="col-sm-6 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img src="http://localhost:1500/overview-of-the-restaurant.jpg">
					<div class="caption">
						<h3 id="thumbnail-label">Kaai 17</h3>
					</div>
				</div>
			</div>
		</a>';
						}
						?>
						<div class="col-lg-12">
							<a href="/dashboard/partners" class="btn btn-default btn-block">Bekijk alle partners</a>
						</div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- Partners -->
		</div>
		<!-- /.row -->
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
                        <button type="submit" class="btn btn-primary btn-lg">Wijzigingen opslaan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>