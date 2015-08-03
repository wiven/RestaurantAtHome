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
			<div class="col-lg-6">
				<div class="panel panel-default panel-green">
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
							<a href="#" class="btn btn-default btn-block">
								<span class="fa fa-plus-square"></span> Meer acties weergeven ...
							</a>
						</div>
						<!-- /.table-responsive -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-8 -->
			<div class="col-lg-6">
				<div class="panel panel-default panel-green">
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
