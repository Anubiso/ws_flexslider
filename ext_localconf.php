<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	'WapplerSystems.' . $_EXTKEY,
	'Pi1',
	array(
		'Flexslider' => 'list',
		
	),
	// non-cacheable actions
	array(
		
	)
);

?>