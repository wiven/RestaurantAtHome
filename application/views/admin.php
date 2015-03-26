


    <div class="container-fluid">
      <div class="page-header">
        <h2>Mijn Gerechten</h2>
        
        <div class="pull-right" style="position:relative; bottom: 40px;">
        <input  checked data-toggle="toggle" type="checkbox" data-on="Grote afbeeldingen" data-off="Kleine afbeeldingen" data-size="small" data-width="150" data-offstyle="success">
        </div>
    </div>
        <h3>Voorgerechten</h3>
        <?php for ($x = 0; $x <= 7; $x++) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6" style=" height:250px; margin-top: 15px; margin-bottom: 15px;">
            <a href="#">
                <div style="width: 100%; height: 100%;" >
                    <img src='public/img/duck.jpg' height='100%;' width='100%'/>
                    
                    <div style="    background: rgb(45, 35, 30); background: rgba(45, 35, 30, .7); bottom: 43px; display: block; padding: 10px; position: relative; width: 100%; color:#e2e8f0; font-size:16px;">
                        Gerechttitel mate
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
        <h3>Hoofdgerechten</h3>
        <?php for ($x = 0; $x <= 7; $x++) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6" style=" height:250px; margin-top: 15px; margin-bottom: 15px;">
            <a href="#">
                <div style="width: 100%; height: 100%;" >
                    <img src='public/img/duck.jpg' height='100%;' width='100%'/>
                    
                    <div style="    background: rgb(45, 35, 30); background: rgba(45, 35, 30, .7); bottom: 43px; display: block; padding: 10px; position: relative; width: 100%; color:#e2e8f0; font-size:16px;">
                        Gerechttitel mate
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
    </div><!-- /.container-fluid -->