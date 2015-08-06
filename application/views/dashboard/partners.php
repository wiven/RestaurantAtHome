<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo (isset($pretty_page_title) ? $pretty_page_title : '') ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <!-- /.row -->
        <div class="row clearfix">
            <!-- /.col-lg-4 -->
            <!-- Partners -->
            <div class="col-lg-12">
                <?php
                for($i = 0; $i < 10; $i++) {
                    echo '<a href="#" target="_blank" class="top_resto">
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
            </div>
            <!-- Partners -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->