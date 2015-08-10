<?php
/**
 * This file is part of free delivery module.
 *
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2015
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'freedelivery',
    'title'       => array(
        'de' => 'Versandkostenfrei',
        'en' => 'free delivery',
    ),
	'description' => array(
		'de' => 'Dieser Modul kann dem Kaeufer die Abweichung zwischen dem Wert seines Warenkorbs und dem Mindestbestellwert anzeigen, den er beim Einkauf erreichen muss, um seine Ware versandkostenfrei zu erhalten.',  
		'en' => 'This module can show the buyer the difference between the value of its basket and the minimum order size, he has to reach the purchase in order to obtain their goods free shipping.',
	),
	'lang' => 'de',
	'version' => '1.0',
	'author' => 'Pengfei Zhao, and with the grateful help of Herr Renninger,COO in marmalade GmbH',
	'thumbnail' => 'thumb.png',
    'extend'      => array(

	    //Models
		'oxbasket' => 'zpffd/freedelivery/models/zpffd_freedelivery_oxbasket'
    ),
    'files'       => array(
		
    ),
    'templates'   => array(
    ),
    'blocks'      => array(
		array(
			'template' => 'layout/header.tpl',
			'block' => 'show_tips_header',//defined a new block with name "show_tips_header" in header.tpl.
			'file' => '/views/blocks/showtips_freedelivery_header.tpl'
		),
    ),
    'settings'    => array(),
    'events'      => array(),
);
