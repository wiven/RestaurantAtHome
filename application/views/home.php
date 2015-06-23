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

<style>

    #login-dp{
        min-width: 250px;
        padding: 14px 14px 0;
        overflow:hidden;
        background-color:rgba(255,255,255,.8);
    }
    #login-dp .help-block{
        font-size:12px
    }
    #login-dp .bottom{
        background-color:rgba(255,255,255,.8);
        border-top:1px solid #ddd;
        clear:both;
        padding:14px;
    }
    #login-dp .social-buttons{
        margin:12px 0
    }
    #login-dp .social-buttons a{
        width: 49%;
    }
    #login-dp .form-group {
        margin-bottom: 10px;
    }
    .btn-fb{
        color: #fff;
        background-color:#3b5998;
    }
    .btn-fb:hover{
        color: #fff;
        background-color:#496ebc
    }
    .btn-tw{
        color: #fff;
        background-color:#55acee;
    }
    .btn-tw:hover{
        color: #fff;
        background-color:#59b5fa;
    }
    @media(max-width:768px){
        #login-dp{
            background-color: inherit;
            color: #fff;
        }
        #login-dp .bottom{
            background-color: inherit;
            border-top:0 none;
        }
    }
</style>
    
<div class="container homepage">
    <div class="panel panel-default">
        <div class="panel-heading">Zoek meteen naar je favoriete restaurant:</div>
        <div class="panel-body">
            <form class="form-inline">
                <div class="col-lg-1"></div>
                <div class="form-group col-xs-12 col-sm-6 col-md-5 col-lg-4">
                    <label for="addressTop" class="labelStyle">
                        Waar wil je eten?
                    </label>
                    <input type="text" placeholder="Straat, Nummer, Stad of Postcode" id="addressTop" class="form-control" tabindex="1" />
                </div>
                
                <div class="form-group col-xs-12 col-sm-6 col-md-5 col-lg-4">
                    <label for="itemTop" class="labelStyle">
                        Wat wil je eten? <small>Optioneel</small>
                    </label>
                    <input type="text" placeholder="Sushi, 'Het steakhuis', Aardbei-Sabayon " id="itemTop" class="form-control" tabindex="2" />
                </div>
                
                <div class="form-group col-xs-12 col-md-2 col-lg-2 col-sm-2"><!--onclick="window.location.href='./search'"-->
                    <button type="button" id="main_search_button" class="btn btn-primary btn-lg searchbtn" tabindex="3" ><i class="fa fa-search"></i>
                        Zoeken!
                    </button>
                </div>
                <div class="col-lg-1"></div>
            </form>
        </div>
  </div>

    <div class="row">
        <h2 class="col-lg-12" style="margin: 30px 0 15px;">Restaurants in de kijker</h2>

        <a href="#" class="top_resto">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkyLjQ1MzEyNSIgeT0iMTAwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjExcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjQyeDIwMDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                    <div class="caption">
                        <h3 id="thumbnail-label">Restaurant 1</h3>
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="top_resto">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkyLjQ1MzEyNSIgeT0iMTAwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjExcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjQyeDIwMDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                    <div class="caption">
                        <h3 id="thumbnail-label">Restaurant 2</h3>
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="top_resto">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkyLjQ1MzEyNSIgeT0iMTAwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjExcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjQyeDIwMDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                    <div class="caption">
                        <h3 id="thumbnail-label">Restaurant 3</h3>
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="top_resto">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <img data-src="holder.js/100%x200" alt="100%x200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkyLjQ1MzEyNSIgeT0iMTAwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjExcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjQyeDIwMDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                    <div class="caption">
                        <h3 id="thumbnail-label">Restaurant 4</h3>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="row clearfix" style="margin-bottom: 50px;">
        <h2 class="col-lg-12" style="margin: 30px 0 15px;">Onze partners</h2>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2" style="height: 71px;">
            <img data-src="holder.js/100%x200" alt="100%x200" src="http://upload.wikimedia.org/wikipedia/en/thumb/c/ca/Sodexo.svg/1024px-Sodexo.svg.png" data-holder-rendered="true" style="width: 100%; display: block;margin-top: 9px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
            <img data-src="holder.js/100%x200" alt="100%x200" src="http://belgerinkel.be/docs/logo/unizo/UNIZO_logo_Pantone187.jpg" data-holder-rendered="true" style="width: 100%; display: block;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
            <img data-src="holder.js/100%x200" alt="100%x200" src="http://www.kortrijk.be/sites/kortrijk/files/assets/Huisstijl_Kortrijk/logos/Kortrijk_logo_rgb_klein.jpg" data-holder-rendered="true" style="margin-top: 8px;width: 100%; display: block;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
            <img data-src="holder.js/100%x200" alt="100%x200" src="http://www.mengelmoes.net/wp-content/uploads/2014/07/Moonen-Packaging-logo.jpg" data-holder-rendered="true" style="width: 100%; margin-top: 5px;display: block;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
            <img data-src="holder.js/100%x200" alt="100%x200" src="http://www.vinddevis.be/wp-content/themes/acute/assets/images/vinddevis/logo-big.png" data-holder-rendered="true" style="width: 100%; display: block;margin-top: 20px;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
            <img data-src="holder.js/100%x200" alt="100%x200" src="http://wiven.be/logo.png" data-holder-rendered="true" style="width: 100%; display: block; margin-top: 10px;vertical-align: middle;">
        </div>
    </div>
</div>
    


<?php //EOF  -'It all ends here'-   ?>
    
