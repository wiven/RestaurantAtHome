<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix" style="margin-top: 10px; line-height: 34px;">
	<h3 class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix" style="margin-top: 0px; padding: 0; line-height: 36px;">
				<span class="btn btn-default col-xs-12 col-sm-6 col-md-3 col-lg-3" onclick="window.history.back(-1);"><span class="fa fa-chevron-circle-left"></span> Terug</span>
			</h3>


	<button id="checkout_btn" class="btn btn-primary col-lg-2 col-md-2 col-sm-2 col-xs-12 pull-right" style="margin-left: 25px;">
		Afrekenen
	</button>

	<div class="form-group">
		<button id="basket_btn" class="btn btn-default col-lg-2 col-md-2 col-sm-2 col-xs-12 pull-right" data-toggle="modal" data-target="#basketModal" data-backdrop="static" style="margin-left: 25px;">
			<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" style="margin-right: 10px;"></span> &euro; 164,89
			<span class="badge basket_count_badge">11</span>
		</button>

	</div>
	<!--
			<div class="form-group">
				<button class="btn btn-primary glyphicon glyphicon-shopping-cart" type="submit">Toevoegen</button>
				<p class="badge red" style="color: #FFF; background: #3878C4; position: absolute; top: -8px; right: 122px; z-index: 500;">1</p>
			</div>-->

</div>
</nav>
</header>

<div class="container-fluid" style="margin-top: 0px;">
	<div class="row" id="content-container">
		<!-- TOP INFO BOX RESTAURANT -->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<ul class="list-group clearfix">
				<li class="list-group-item clearfix" id="info_resto">
					<div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center">
						<!--<img src="http://lorempixel.com/700/300/city" width="100%">-->
						<img id="logo_resto" src="http://www.restaurantfleurdelin.be/img/1.png">
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center" id="important_info_resto">
						<a href="#" title="Routebeschrijving" data-toggle="modal" data-target="#mapsModal" data-backdrop="static"><img style="margin-top: -3px;" src="https://cdn3.iconfinder.com/data/icons/internet-and-web-4/78/internt_web_technology-08-16.png" /> IJzerfrontlaan 13, 8500 Kortrijk</a>
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
						<!--<img src="http://lorempixel.com/700/300/city" width="100%">-->
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
							<!--
							<img src="http://www.dialogic-agency.eu/site/wp-content/uploads/Logo-BCMC3.jpg" height="32" title="Bancontact/Mister cash" />
							<img src="http://upload.wikimedia.org/wikipedia/en/thumb/f/fd/Maestro_logo.svg/1280px-Maestro_logo.svg.png" height="32" title="Maestro" />
							<img src="http://linuxplace.com.br/wp-content/uploads/2010/08/visa_mastercard_logo.gif" height="32" title="VISA/MasterCard" />
							<img src="https://bongous.com/wp-content/uploads/2014/01/Bitcoin-300x300.png" height="32" title="Bitcoin" />
							<img src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Euro-Coin-32.png" height="32" title="Cash" />
-->
						</p>
					</div>

					<a href="#" class="btn_more_resto_info btn btn-primary hidden-lg hidden-md hidden-sm col-xs-8 col-xs-offset-2" style="margin-top: 10px;"><span class="fa fa-chevron-circle-down"></span> Meer info</a>
					<a href="#" class="btn_more_resto_info btn btn-primary hidden-lg hidden-md hidden-sm col-xs-8 col-xs-offset-2" style="margin-top: 10px; display: none;"><span class="fa fa-chevron-circle-up"></span> Minder info</a>
				</li>
			</ul>
		</div>

		<div role="tabpanel" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<!-- PRODUCT TYPE CHOOSER -->
			<div id="product_type_chooser" class="clearfix" role="tablist" style="margin-bottom: 20px;">
				<a href="#acties" aria-controls="acties" role="tab" data-toggle="pill" class="col-lg-2 col-md-4 col-sm-4 col-xs-12 text-center active" style="line-height: 40px;"><h4>ACTIES</h4></a>
				<a href="#voorgerechten" aria-controls="voorgerechten" role="tab" data-toggle="pill" class="col-lg-2 col-md-4 col-sm-4 col-xs-12 text-center" style="line-height: 40px;"><h4>VOORGERECHTEN</h4></a>
				<a href="#hoofdgerechten" aria-controls="hoofdgerechten" role="tab" data-toggle="pill" class="col-lg-2 col-md-4 col-sm-4 col-xs-12 text-center" style="line-height: 40px;"><h4>HOOFDGERECHTEN</h4></a>
				<a href="#desserts" aria-controls="desserts" role="tab" data-toggle="pill" class="col-lg-2 col-md-4 col-sm-4 col-xs-12 text-center" style="line-height: 40px;"><h4>DESSERTS</h4></a>
				<a href="#dranken" aria-controls="dranken" role="tab" data-toggle="pill" class="col-lg-2 col-md-4 col-sm-4 col-xs-12 text-center" style="line-height: 40px;"><h4>DRANKEN</h4></a>
				<a href="#extras" aria-controls="extras" role="tab" data-toggle="pill" class="col-lg-2 col-md-4 col-sm-4 col-xs-12 text-center" style="line-height: 40px;"><h4>EXTRA'S</h4></a>
			</div>

			<!--
			<ul class="nav nav-pills nav-justified" role="tablist" style="margin-bottom: 20px;">
				<li role="presentation" class="active"><a href="#acties" aria-controls="acties" role="tab" data-toggle="pill"><h4>ACTIES</h4></a></li>
				<li role="presentation"><a href="#voorgerechten" aria-controls="voorgerechten" role="tab" data-toggle="pill"><h4>VOORGERECHTEN</h4></a></li>
				<li role="presentation"><a href="#hoofdgerechten" aria-controls="hoofdgerechten" role="tab" data-toggle="pill"><h4>HOOFDGERECHTEN</h4></a></li>
				<li role="presentation"><a href="#desserts" aria-controls="desserts" role="tab" data-toggle="pill"><h4>DESSERTS</h4></a></li>
				<li role="presentation"><a href="#dranken" aria-controls="dranken" role="tab" data-toggle="pill"><h4>DRANKEN</h4></a></li>
			</ul>-->

			<!-- PRODUCT TYPE CHOOSER CONTENT -->
			<div class="tab-content">
				<!-- ACTIES -->
				<div role="tabpanel" class="tab-pane active" id="acties">
					<!-- FIRST 3 RESULTS -->

					<div class="col-lg-6">
						<div class="item simpleCart_shelfItem" id="item-01">
							<div class="info">
								<div class="dots"></div>
								<span class="name item_name">1. TARO SHRIMP</span>
								<span class="price item_price">$ 8.50</span>
							</div>
							<div class="description">Shrimp wrapped in taro, deep fried and served with chili sauce</div>
							<div class="legend"><span>SPICY</span><a class="add item_add" href="javascript:;">ADD</a>
							</div>
							<input type="hidden" value="1" class="item_Quantity">
						</div>
					</div>





					<ul class="list-group col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
						<li class="list-group-item clearfix">
							<div class="col-lg-2 col-md-4 col-sm-2 col-xs-3" style="padding: 0;">
								<a href="#" data-toggle="modal" data-target="#addProductModal" data-backdrop="static"><img src="http://lorempixel.com/300/300/food" width="100%">
								</a>
							</div>
							<div class="col-lg-7 col-md-8 col-sm-2 col-xs-3">
								<a href="#" data-toggle="modal" data-target="#addProductModal" data-backdrop="static" class="product_info">
									<h3 style="margin: 0 0 20px 0;">
										Weg is pech <span class="label label-warning">Specialiteit</span>
									</h3>
									<p class="text-justify" style="line-height: 20px;">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
									<h4 style="margin: 15px 0 0 0;">
										&euro; 14,99
									</h4>
								</a>
							</div>
							<div class="col-lg-3 col-xs-12" style="padding: 0;">
								<div class="input-group">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[51]">
												<span class="glyphicon glyphicon-minus"></span>
									</button>
									</span>
									<input type="text" name="quant[51]" id="quant_51" class="form-control input-number text-center" value="1" min="1" max="10">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[51]">
												<span class="glyphicon glyphicon-plus"></span>
									</button>
									</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-primary add_product_btn" id="prod_id_51" style="width: 100%; margin-top: 26px;">Toevoegen</a>
									<p class="badge" style="color: #FFF; border: 2px solid white; background: #5cb85c; position: absolute; top: 49px; right: 5px; z-index: 500;">1</p>
								</div>
							</div>
						</li>

						<li class="list-group-item clearfix">
							<div class="col-lg-2 col-md-6 col-sm-2 col-xs-5" style="padding: 0;">
								<a href="#" data-toggle="modal" data-target="#addProductModal" data-backdrop="static"><img src="http://lorempixel.com/300/300/food" width="100%">
								</a>
							</div>

							<div class="col-lg-3 col-xs-7" style="padding-right: 0;">
								<div class="input-group">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[51]">
												<span class="glyphicon glyphicon-minus"></span>
									</button>
									</span>
									<input type="text" name="quant[51]" id="quant_51" class="form-control input-number text-center" value="1" min="1" max="10">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[51]">
												<span class="glyphicon glyphicon-plus"></span>
									</button>
									</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-primary add_product_btn" id="prod_id_51" style="width: 100%; margin-top: 26px;">Toevoegen</a>
									<p class="badge" style="color: #FFF; border: 2px solid white; background: #5cb85c; position: absolute; top: 49px; right: 5px; z-index: 500;">1</p>
								</div>
							</div>

							<div class="col-lg-7 col-md-8 col-sm-2 col-xs-12">
								<a href="#" data-toggle="modal" data-target="#addProductModal" data-backdrop="static" class="product_info">
									<h3 style="margin: 0 0 20px 0;">
										Weg is pech <span class="label label-warning">Specialiteit</span>
									</h3>
									<p class="text-justify" style="line-height: 20px;">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
									<h4 style="margin: 15px 0 0 0;">
										&euro; 14,99
									</h4>
								</a>
							</div>

						</li>

						<li class="list-group-item clearfix">
							<div class="col-lg-2 col-md-3 col-sm-2 col-xs-3" style="padding: 0;">
								<img src="http://lorempixel.com/300/300/food" width="100%">
							</div>
							<div class="col-lg-7">
								<h3 style="margin: 0 0 20px 0;">
									Weg is pech
								</h3>
								<p class="text-justify" style="line-height: 20px;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<h4 style="margin: 15px 0 0 0;">
									&euro; 14,99
								</h4>
							</div>
							<div class="col-lg-3 col-xs-12" style="padding: 0;">
								<div class="input-group">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[49]">
												<span class="glyphicon glyphicon-minus"></span>
									</button>
									</span>
									<input type="text" name="quant[49]" id="quant_49" class="form-control input-number text-center" value="1" min="1" max="10">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[49]">
												<span class="glyphicon glyphicon-plus"></span>
									</button>
									</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-primary add_product_btn" id="prod_id_49" style="width: 100%; margin-top: 26px;">Toevoegen</a>
									<p class="badge" style="display: none; color: #FFF; border: 2px solid white; background: #5cb85c; position: absolute; top: 49px; right: 5px; z-index: 500;">0</p>
								</div>
							</div>
						</li>
						<li class="list-group-item clearfix">
							<div class="col-lg-2" style="padding: 0;">
								<img src="http://lorempixel.com/300/300/food" width="100%">
							</div>
							<div class="col-lg-7">
								<h3 style="margin: 0 0 20px 0;">
									Weg is pech
								</h3>
								<p class="text-justify" style="line-height: 20px;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<h4 style="margin: 15px 0 0 0;">
									&euro; 14,99
								</h4>
							</div>
							<div class="col-lg-3 col-xs-12" style="padding: 0;">
								<div class="input-group">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
												<span class="glyphicon glyphicon-minus"></span>
									</button>
									</span>
									<input type="text" name="quant[3]" class="form-control input-number text-center" value="1" min="1" max="10">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[3]">
												<span class="glyphicon glyphicon-plus"></span>
									</button>
									</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-primary" style="width: 100%; margin-top: 26px;">Toevoegen</a>
									<!--<p class="badge" style="color: #FFF; border: 2px solid white; background: #5cb85c; position: absolute; top: 49px; right: 5px; z-index: 500;">1</p>-->
								</div>
							</div>
						</li>
					</ul>
					<!-- NEXT 3 RESULTS -->
					<ul class="list-group col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix" style="padding: 0 0 0 15px;">
						<li class="list-group-item clearfix">
							<div class="col-lg-2" style="padding: 0;">
								<img src="http://lorempixel.com/300/300/food" width="100%">
							</div>
							<div class="col-lg-7">
								<h3 style="margin: 0 0 20px 0;">
									Weg is pech
								</h3>
								<p class="text-justify" style="line-height: 20px;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<h4 style="margin: 15px 0 0 0;">
									&euro; 14,99
								</h4>
							</div>
							<div class="col-lg-3 col-xs-12" style="padding: 0;">
								<div class="input-group">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[4]">
												<span class="glyphicon glyphicon-minus"></span>
									</button>
									</span>
									<input type="text" name="quant[4]" class="form-control input-number text-center" value="1" min="1" max="10">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[4]">
												<span class="glyphicon glyphicon-plus"></span>
									</button>
									</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-primary" style="width: 100%; margin-top: 26px;">Toevoegen</a>
									<p class="badge" style="color: #FFF; border: 2px solid white; background: #5cb85c; position: absolute; top: 49px; right: 5px; z-index: 500;">10</p>
								</div>
							</div>
						</li>
						<li class="list-group-item clearfix">
							<div class="col-lg-2" style="padding: 0;">
								<img src="http://lorempixel.com/300/300/food" width="100%">
							</div>
							<div class="col-lg-7">
								<h3 style="margin: 0 0 20px 0;">
									Weg is pech
								</h3>
								<p class="text-justify" style="line-height: 20px;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<h4 style="margin: 15px 0 0 0;">
									&euro; 14,99
								</h4>
							</div>
							<div class="col-lg-3 col-xs-12" style="padding: 0;">
								<div class="input-group">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[5]">
												<span class="glyphicon glyphicon-minus"></span>
									</button>
									</span>
									<input type="text" name="quant[5]" class="form-control input-number text-center" value="1" min="1" max="10">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[5]">
												<span class="glyphicon glyphicon-plus"></span>
									</button>
									</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-primary" style="width: 100%; margin-top: 26px;">Toevoegen</a>
									<!--<p class="badge" style="color: #FFF; border: 2px solid white; background: #5cb85c; position: absolute; top: 49px; right: 5px; z-index: 500;">1</p>-->
								</div>
							</div>
						</li>
						<li class="list-group-item clearfix">
							<div class="col-lg-2" style="padding: 0;">
								<img src="http://lorempixel.com/300/300/food" width="100%">
							</div>
							<div class="col-lg-7">
								<h3 style="margin: 0 0 20px 0;">
									Weg is pech <span class="label label-warning">Nieuw</span>
								</h3>
								<p class="text-justify" style="line-height: 20px;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<h4 style="margin: 15px 0 0 0;">
									&euro; 14,99
								</h4>
							</div>
							<div class="col-lg-3 col-xs-12" style="padding: 0;">
								<div class="input-group">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[6]">
												<span class="glyphicon glyphicon-minus"></span>
									</button>
									</span>
									<input type="text" name="quant[6]" class="form-control input-number text-center" value="1" min="1" max="10">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[6]">
												<span class="glyphicon glyphicon-plus"></span>
									</button>
									</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-primary" style="width: 100%; margin-top: 26px;">Toevoegen</a>
									<!--<p class="badge" style="color: #FFF; border: 2px solid white; background: #5cb85c; position: absolute; top: 49px; right: 5px; z-index: 500;">1</p>-->
								</div>
							</div>
						</li>
					</ul>
					<!-- ADVERT -->
					<ul class="list-group col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix" style="padding-right: 0;">
						<li class="list-group-item clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">
								<img src="http://placehold.it/3000x250" width="100%">
							</div>
						</li>
					</ul>
				</div>
				<!-- VOORGERECHTEN -->
				<div role="tabpanel" class="tab-pane" id="voorgerechten">
					<!-- FIRST 3 RESULTS -->
					<ul class="list-group col-lg-6 col-md-2 col-sm-2 col-xs-12 clearfix">
						<li class="list-group-item clearfix">
							<div class="col-lg-2" style="padding: 0;">
								<img src="http://lorempixel.com/300/300/food" width="100%">
							</div>
							<div class="col-lg-7">
								<h3 style="margin: 0 0 20px 0;">
									Voorgerecht 1 <span class="label label-warning">Specialiteit</span>
								</h3>
								<p class="text-justify" style="line-height: 20px;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<h4 style="margin: 15px 0 0 0;">
									&euro; 14,99
								</h4>
							</div>
							<div class="col-lg-3 col-xs-12" style="padding: 0;">
								<div class="input-group">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
												<span class="glyphicon glyphicon-minus"></span>
									</button>
									</span>
									<input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
												<span class="glyphicon glyphicon-plus"></span>
									</button>
									</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-primary" style="width: 100%; margin-top: 26px;">Toevoegen</a>
									<p class="badge" style="color: #FFF; border: 2px solid white; background: #5cb85c; position: absolute; top: 49px; right: 5px; z-index: 500;">1</p>
								</div>
							</div>
						</li>
						<li class="list-group-item clearfix">
							<div class="col-lg-2" style="padding: 0;">
								<img src="http://lorempixel.com/300/300/food" width="100%">
							</div>
							<div class="col-lg-7">
								<h3 style="margin: 0 0 20px 0;">
									Voorgerecht 2
								</h3>
								<p class="text-justify" style="line-height: 20px;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<h4 style="margin: 15px 0 0 0;">
									&euro; 14,99
								</h4>
							</div>
							<div class="col-lg-3 col-xs-12" style="padding: 0;">
								<div class="input-group">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
												<span class="glyphicon glyphicon-minus"></span>
									</button>
									</span>
									<input type="text" name="quant[2]" class="form-control input-number text-center" value="1" min="1" max="10">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
												<span class="glyphicon glyphicon-plus"></span>
									</button>
									</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-primary" style="width: 100%; margin-top: 26px;">Toevoegen</a>
									<!--<p class="badge" style="color: #FFF; border: 2px solid white; background: #5cb85c; position: absolute; top: 49px; right: 5px; z-index: 500;">1</p>-->
								</div>
							</div>
						</li>
						<li class="list-group-item clearfix">
							<div class="col-lg-2" style="padding: 0;">
								<img src="http://lorempixel.com/300/300/food" width="100%">
							</div>
							<div class="col-lg-7">
								<h3 style="margin: 0 0 20px 0;">
									Voorgerecht 3
								</h3>
								<p class="text-justify" style="line-height: 20px;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<h4 style="margin: 15px 0 0 0;">
									&euro; 14,99
								</h4>
							</div>
							<div class="col-lg-3 col-xs-12" style="padding: 0;">
								<div class="input-group">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
												<span class="glyphicon glyphicon-minus"></span>
									</button>
									</span>
									<input type="text" name="quant[3]" class="form-control input-number text-center" value="1" min="1" max="10">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[3]">
												<span class="glyphicon glyphicon-plus"></span>
									</button>
									</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-primary" style="width: 100%; margin-top: 26px;">Toevoegen</a>
									<!--<p class="badge" style="color: #FFF; border: 2px solid white; background: #5cb85c; position: absolute; top: 49px; right: 5px; z-index: 500;">1</p>-->
								</div>
							</div>
						</li>
					</ul>
					<!-- NEXT 3 RESULTS -->
					<ul class="list-group col-lg-6 col-md-2 col-sm-2 col-xs-1 clearfix" style="padding: 0 0 0 15px;">
						<li class="list-group-item clearfix">
							<div class="col-lg-2" style="padding: 0;">
								<img src="http://lorempixel.com/300/300/food" width="100%">
							</div>
							<div class="col-lg-7">
								<h3 style="margin: 0 0 20px 0;">
									Voorgerecht 4
								</h3>
								<p class="text-justify" style="line-height: 20px;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<h4 style="margin: 15px 0 0 0;">
									&euro; 14,99
								</h4>
							</div>
							<div class="col-lg-3 col-xs-12" style="padding: 0;">
								<div class="input-group">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[4]">
												<span class="glyphicon glyphicon-minus"></span>
									</button>
									</span>
									<input type="text" name="quant[4]" class="form-control input-number text-center" value="1" min="1" max="10">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[4]">
												<span class="glyphicon glyphicon-plus"></span>
									</button>
									</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-primary" style="width: 100%; margin-top: 26px;">Toevoegen</a>
									<p class="badge" style="color: #FFF; border: 2px solid white; background: #5cb85c; position: absolute; top: 49px; right: 5px; z-index: 500;">10</p>
								</div>
							</div>
						</li>
						<li class="list-group-item clearfix">
							<div class="col-lg-2" style="padding: 0;">
								<img src="http://lorempixel.com/300/300/food" width="100%">
							</div>
							<div class="col-lg-7">
								<h3 style="margin: 0 0 20px 0;">
									Voorgerecht 5 <span class="label label-warning">Nieuw</span>
								</h3>
								<p class="text-justify" style="line-height: 20px;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<h4 style="margin: 15px 0 0 0;">
									&euro; 14,99
								</h4>
							</div>
							<div class="col-lg-3 col-xs-12" style="padding: 0;">
								<div class="input-group">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[5]">
												<span class="glyphicon glyphicon-minus"></span>
									</button>
									</span>
									<input type="text" name="quant[5]" class="form-control input-number text-center" value="1" min="1" max="10">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[5]">
												<span class="glyphicon glyphicon-plus"></span>
									</button>
									</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-primary" style="width: 100%; margin-top: 26px;">Toevoegen</a>
									<!--<p class="badge" style="color: #FFF; border: 2px solid white; background: #5cb85c; position: absolute; top: 49px; right: 5px; z-index: 500;">1</p>-->
								</div>
							</div>
						</li>
						<li class="list-group-item clearfix">
							<div class="col-lg-2" style="padding: 0;">
								<img src="http://lorempixel.com/300/300/food" width="100%">
							</div>
							<div class="col-lg-7">
								<h3 style="margin: 0 0 20px 0;">
									Voorgerecht 6
								</h3>
								<p class="text-justify" style="line-height: 20px;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<h4 style="margin: 15px 0 0 0;">
									&euro; 14,99
								</h4>
							</div>
							<div class="col-lg-3 col-xs-12" style="padding: 0;">
								<div class="input-group">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[6]">
												<span class="glyphicon glyphicon-minus"></span>
									</button>
									</span>
									<input type="text" name="quant[6]" class="form-control input-number text-center" value="1" min="1" max="10">
									<span class="input-group-btn">
											<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[6]">
												<span class="glyphicon glyphicon-plus"></span>
									</button>
									</span>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-primary" style="width: 100%; margin-top: 26px;">Toevoegen</a>
									<!--<p class="badge" style="color: #FFF; border: 2px solid white; background: #5cb85c; position: absolute; top: 49px; right: 5px; z-index: 500;">1</p>-->
								</div>
							</div>
						</li>
					</ul>
					<!-- ADVERT -->
					<ul class="list-group col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix" style="padding-right: 0;">
						<li class="list-group-item clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">
								<img src="http://placehold.it/3000x250" width="100%">
							</div>
						</li>
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane" id="hoofdgerechten">hoofdgerechten</div>
				<div role="tabpanel" class="tab-pane" id="desserts">desserts</div>
				<div role="tabpanel" class="tab-pane" id="dranken">dranken</div>
				<div role="tabpanel" class="tab-pane" id="extras">
					<ul class="list-group">
						<li class="list-group-item col-lg-4 col-xs-12"></li>
						<li class="list-group-item col-lg-4 col-xs-12"></li>
						<li class="list-group-item col-lg-4 col-xs-12"></li>
						<li class="list-group-item col-lg-4 col-xs-12"></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3" id="shopping_list" style="padding-right: 0;">
				<ul class="list-group">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
					<li class="list-group-item">Porta ac consectetur ac</li>
					<li class="list-group-item">Vestibulum at eros</li>
				</ul>

				<button class="btn btn-default">&euro; 164,89</button>
				<button class="btn btn-primary">Afrekenen</button>
			</div>
		</div>
	</div>
</div>
<!-- /.container -->

<!-- Basket Modal -->
<div class="modal fade" id="basketModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
				</button>
				<h3 class="modal-title" id="myModalLabel">Winkelwagen</h3>
			</div>
			<div class="modal-body clearfix" style="padding-top: 0;">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<?php for ($i=1 ; $i <=11; $i++) { echo '
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading'.$i. '">
								<h4 class="panel-title clearfix">
									<a class="col-lg-11 col-md-11 col-sm-11 col-xs-11 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$i. '" aria-expanded="false" aria-controls="collapse'.$i. '" style="display: block;padding-left: 0;">
										Product #'.$i. ' (1 stuk)
										<span class="pull-right">&euro; 14,99</span>
									</a>
									<a href="#" class="col-lg-1 col-md-1 col-sm-1 col-xs-1 text-right delete_from_cart" title="Verwijder product" alt="Verwijderen" style="padding: 0;"><span class="glyphicon glyphicon-remove" style="color: #d9534f;"></span></a>
								</h4>
							</div>
							<div id="collapse'.$i. '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'.$i. '">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</div>
							</div>
						</div>'; } ?>
				</div>
				<div class="col-lg-9">
					TOTAAL (11 producten)
				</div>
				<div class="col-lg-3 text-right" style="font-weight: bold;">
					&euro; 164,89
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Afrekenen</button>
			</div>
		</div>
	</div>
</div>

<!-- Maps Modal -->
<div class="modal fade" id="mapsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
				</button>
				<h3 class="modal-title" id="myModalLabel">Locatie</h3>
			</div>
			<div class="modal-body clearfix" style="padding-top: 0;">
				<div id="mapCanvas" style="width: 100%;"></div>
			</div>
		</div>
	</div>
</div>

<!-- Add product to basket Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 0; margin: 0 0 0 15px;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
				</button>
				<h3 class="modal-title" id="myModalLabel">Voorgerecht 6</h3>
			</div>
			<div class="modal-body clearfix" style="padding-top: 0;">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="padding-right: 0;">
					<img src="http://lorempixel.com/300/300/food/1" width="100%">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
					<span class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix" style="line-height: 34px;padding-left: 0;margin: 0; font-size: 24px;">
					&euro; 14,99
				</span>

					<div class="input-group" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
						<span class="input-group-btn">
						<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
							<span class="glyphicon glyphicon-minus"></span>
						</button>
						</span>
						<input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
						<span class="input-group-btn">
						<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
							<span class="glyphicon glyphicon-plus"></span>
						</button>
						</span>
					</div>
					<p class="text-justify" style="margin-top: 20px;">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>

				</div>

				<h4 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix" style="padding-top: 25px;">Aanbevolen producten</h4>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 clearfix">
					<img src="http://lorempixel.com/300/300/food/2" width="100%">
					<p class="text-justify" style="margin-top: 15px;">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
					<span class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix" style="line-height: 34px; margin: 0 0 10px; font-size: 24px;text-align: center;">
					&euro; 14,99
				</span>
					<div class="input-group" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
						<span class="input-group-btn">
						<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
							<span class="glyphicon glyphicon-minus"></span>
						</button>
						</span>
						<p class="badge" style="color: #FFF; border: 2px solid white; background: #5cb85c; position: absolute; top: 49px; right: 5px; z-index: 500;">1</p>
						<input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
						<span class="input-group-btn">
						<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
							<span class="glyphicon glyphicon-plus"></span>
						</button>
						</span>
					</div>
					<button type="button" class="btn btn-default" style="width: 100%; margin-top: 10px;">Toevoegen</button>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 clearfix">
					<img src="http://lorempixel.com/300/300/food/3" width="100%">
					<p class="text-justify" style="margin-top: 15px;">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
					<span class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix" style="line-height: 34px; margin: 0 0 10px; font-size: 24px;text-align: center;">
					&euro; 14,99
				</span>
					<div class="input-group" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
						<span class="input-group-btn">
						<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
							<span class="glyphicon glyphicon-minus"></span>
						</button>
						</span>
						<input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
						<span class="input-group-btn">
						<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
							<span class="glyphicon glyphicon-plus"></span>
						</button>
						</span>
					</div>
					<button type="button" class="btn btn-default" style="width: 100%; margin-top: 10px;">Toevoegen</button>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 clearfix">
					<img src="http://lorempixel.com/300/300/food/4" width="100%">
					<p class="text-justify" style="margin-top: 15px;">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
					<span class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix" style="line-height: 34px; margin: 0 0 10px; font-size: 24px;text-align: center;">
					&euro; 14,99
				</span>
					<div class="input-group" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
						<span class="input-group-btn">
						<button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
							<span class="glyphicon glyphicon-minus"></span>
						</button>
						</span>
						<input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
						<span class="input-group-btn">
						<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
							<span class="glyphicon glyphicon-plus"></span>
						</button>
						</span>
					</div>
					<button type="button" class="btn btn-default" style="width: 100%; margin-top: 10px;">Toevoegen</button>
				</div>

				<div class="col-lg-3 col-xs-12" style="padding: 0;">

				</div>
			</div>
			<div class="modal-footer" style="padding-right: 30px;">
				<button type="button" class="btn btn-default" data-dismiss="modal">Annuleren</button>
				<button type="button" class="btn btn-primary">Toevoegen aan winkelmandje</button>
			</div>
		</div>
	</div>
</div>

<!-- Shop Hours Modal -->
<div class="modal fade" id="shopHoursModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Openingsuren <em><strong>Fleur De Lin</strong></em></h4>
			</div>
			<div class="modal-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Dag</th>
							<th>Openingstijden</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">Maandag</th>
							<td>12u00 - 21u30</td>
						</tr>
						<tr>
							<th scope="row">Dinsdag</th>
							<td>Gesloten</td>
						</tr>
						<tr>
							<th scope="row">Woensdag</th>
							<td>Gesloten</td>
						</tr>
						<tr>
							<th scope="row">Donderdag</th>
							<td>12u00 - 21u30</td>
						</tr>
						<tr>
							<th scope="row">Vrijdag</th>
							<td>12u00 - 21u30</td>
						</tr>
						<tr>
							<th scope="row">Zaterdag</th>
							<td>12u00 - 22u00</td>
						</tr>
						<tr>
							<th scope="row">Zondag</th>
							<td>12u00 - 21u00</td>
						</tr>
						<tr>
							<th scope="row">Feestdagen</th>
							<td>Gesloten</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
