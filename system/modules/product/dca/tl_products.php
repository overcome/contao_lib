<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   MyCustomPackage
 * @author    Lu Ye
 * @license   GNU/LGPL
 * @copyright Lu Ye 2014
 */


/**
 * Table tl_products
 */
$GLOBALS['TL_DCA']['tl_products'] = array
(

	// Config
	'config' => array
	(
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'title' => array
		(
			'sql'                     => "varchar(255) NOT NULL default ''"
		)
	)
);
