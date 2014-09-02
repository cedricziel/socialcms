<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'CedricZiel.' . $_EXTKEY,
	'Main',
	array(
		'ActivityStreamsEntry' => 'list, show, hide, like, comment, create, new',
		
	),
	// non-cacheable actions
	array(
		'ActivityStreamsEntry' => 'list, show, hide, like, comment, create, new',
		
	)
);
