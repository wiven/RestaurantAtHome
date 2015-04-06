<?php
/**
 * Restaurant At Home
 * 
 * This file contains:
 * - The top menu
 *
 * @package	RestoAtHome
 * @author	A collaboration of: Wiven Web Solutions - VDW Web - KolorFlux
 * @copyright	Copyright (c) 2014 - 2015
 * @copyright	
 * @license	*
 * @link	http://resaturantathome.be
 * @since	Version 1.0.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="admin">
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
      <a class="navmenu-brand" href="#">Project name</a>
      <ul class="nav navmenu-nav">
        <li><a href="../navmenu/">Slide in</a></li>
        <li class="active"><a href="./">Push</a></li>
        <li><a href="../navmenu-reveal/">Reveal</a></li>
        <li><a href="../navbar-offcanvas/">Off canvas navbar</a></li>
      </ul>
      <ul class="nav navmenu-nav">
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu navmenu-nav">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
</div><!--/admin -->

<div class="container-fluid admin" style="padding:0px">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            
            <div class="navbar-header" style="margin-left:50px;">
                <a class="navbar-brand" href="#" style="padding:7px;">
                    <img alt="Restaurant at Home" src="public/img/logo_small.png" height="35px">
                </a>
                <p class="navbar-text">Ingelogd als  Mark Otto</p>
            </div>
            
            
            
            
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Menu's & Gerechten <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
            </ul>
            
            
        </div>
    </nav>
    <div style='width:100%;min-height:50px;'><!--this is just a content pusher--></div>


<?php //EOF  -'It all ends here'-   ?>