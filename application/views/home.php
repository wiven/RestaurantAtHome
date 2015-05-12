<?php
/**
 * Restaurant At Home
 *
 * Homepage - also the landing page.
 * 
 * @package	RestoAtHome
 * @author	A collaboration of: Wiven Web Solutions - VDW Web - KolorFlux
 * @copyright	Copyright (c) 2014 - 2015
 * @copyright	
 * @license	*
 * @link	http://restaurantathome.be
 * @since	Version 1.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="homepageback">
 <!-- here will appear the background images -->
</div>
    
<div class="container homepage">
   
    <div class="panel panel-default">
        <div class="panel-heading">Zoek meteen naar je favoriete restaurant:</div>
        <div class="panel-body">
            <form class="form-inline">
                <div class="col-lg-1"></div>
                <div class="form-group col-xs-12 col-md-5 col-lg-4">
                    <label for="addressTop" class="labelStyle">
                        Waar wil je eten?
                    </label>
                    <input type="text" placeholder="Straat, Nummer, Stad of Postcode" id="addressTop" class="form-control" />
                </div>
                
                <div class="form-group col-xs-12 col-md-5 col-lg-4">
                    <label for="itemTop" class="labelStyle">
                        Wat Wil Je Eten? <small>Optioneel</small>
                    </label>
                    <input type="text" placeholder="Sushi, 'Het steakhuis', Aardbei-Sabayon " id="itemTop" class="form-control" /> 
                </div>
                
                <div class="form-group col-sm-2">
                    <button type="button" class="btn btn-primary btn-lg searchbtn" onclick="window.location.href='./Search'"><i class="fa fa-search"></i>
                        Zoeken!
                    </button>
                </div>
                <div class="col-lg-1"></div>
            </form>
        </div>
  </div>
    
</div>

    
</div>


<?php //EOF  -'It all ends here'-   ?>
    
