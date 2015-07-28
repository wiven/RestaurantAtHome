<?php /** * Restaurant At Home * * * This file contains: * - Header tags with css and pre-js * * @package RestoAtHome * @author A collaboration of: WiVen Web Solutions - VDW Web - KolorFlux * @copyright Copyright (c) 2014 - 2015 * @copyright * @link http://restaurantathome.be * @since Version 1.0.0 */ defined( 'BASEPATH') OR exit( 'No direct script access allowed'); ?>
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8" />
	<meta name="description" content="RestaurantAtHome">
	<meta name="author" content="http://wiven.be">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<title>RestaurantAtHome
		<?php echo (isset($page_title) ? $page_title : '') ?>
		<?php //echo $language_test; ?>
	</title>

	<link rel="stylesheet" href="<?php echo public_url(); ?>css/min/restaurant-at-home-theme.min.css">
	<?php echo $additional_styles; ?>

	<link href="public/css/min/font-awesome-4.3.0.min.css" rel="stylesheet">

	<link rel="stylesheet" href="public/css/min/jquery-ui.min.css">

	<link rel="shortcut icon" href="http://restaurantathome.be/assets/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>favicon-16x16.png" sizes="16x16">

	<link rel="manifest" href="<?php echo base_url(); ?>manifest.json">

	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#009688">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<div id="wrap">
		<?php //EOF - 'It all ends here'- ?>
