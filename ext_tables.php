<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'SocialCMS');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_socialcms_domain_model_activitystreamsitem', 'EXT:socialcms/Resources/Private/Language/locallang_csh_tx_socialcms_domain_model_activitystreamsitem.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_socialcms_domain_model_activitystreamsitem');
$GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsitem',
		'label' => 'id',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'id,published,updated,url,object_type,open_social,extensions,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/ActivityStreamsItem.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_socialcms_domain_model_activitystreamsitem.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_socialcms_domain_model_activitystreamsmedialink', 'EXT:socialcms/Resources/Private/Language/locallang_csh_tx_socialcms_domain_model_activitystreamsmedialink.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_socialcms_domain_model_activitystreamsmedialink');
$GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsmedialink'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsmedialink',
		'label' => 'id',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'id,duration,height,url,width,open_social,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/ActivityStreamsMediaLink.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_socialcms_domain_model_activitystreamsmedialink.gif'
	),
);

if (!isset($GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['ctrl']['type'])) {
	if (file_exists($GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['ctrl']['dynamicConfigFile'])) {
		require_once($GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['ctrl']['dynamicConfigFile']);
	}
	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
	$GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['ctrl']['type'] = 'tx_extbase_type';
	$tempColumns = array();
	$tempColumns[$GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['ctrl']['type']] = array(
		'exclude' => 1,
		'label'   => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms.tx_extbase_type',
		'config' => array(
			'type' => 'select',
			'items' => array(),
			'size' => 1,
			'maxitems' => 1,
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_socialcms_domain_model_activitystreamsitem', $tempColumns, 1);
}

$GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['columns'][$TCA['tx_socialcms_domain_model_activitystreamsitem']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsitem.tx_extbase_type.Tx_Socialcms_ActivityStreamsItem','Tx_Socialcms_ActivityStreamsItem');
$GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['columns'][$TCA['tx_socialcms_domain_model_activitystreamsitem']['ctrl']['type']]['config']['default'] = 'Tx_Socialcms_ActivityStreamsItem';

$tmp_socialcms_columns = array(

	'title' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.title',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'verb' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.verb',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'user_id' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.user_id',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'group_id' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.group_id',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'app_id' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.app_id',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'bcc' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.bcc',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'bto' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.bto',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'cc' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.cc',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'context' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.context',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'dc' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.dc',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'end_time' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.end_time',
		'config' => array(
			'type' => 'input',
			'size' => 10,
			'eval' => 'datetime',
			'checkbox' => 1,
			'default' => time()
		),
	),
	'geojson' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.geojson',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'in_reply_to' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.in_reply_to',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'ld' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.ld',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'links' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.links',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'location' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.location',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'mood' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.mood',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'odata' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.odata',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'opengraph' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.opengraph',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'priority' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.priority',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'rating' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.rating',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'result' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.result',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'schema_org' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.schema_org',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'source' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.source',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'start_time' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.start_time',
		'config' => array(
			'type' => 'input',
			'size' => 10,
			'eval' => 'datetime',
			'checkbox' => 1,
			'default' => time()
		),
	),
	'tags' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.tags',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'to_object' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.to_object',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'actor' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.actor',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_socialcms_domain_model_activitystreamsitem',
			'minitems' => 0,
			'maxitems' => 1,
		),
	),
	'generator' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.generator',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_socialcms_domain_model_activitystreamsitem',
			'minitems' => 0,
			'maxitems' => 1,
		),
	),
	'icon' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.icon',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_socialcms_domain_model_activitystreamsmedialink',
			'minitems' => 0,
			'maxitems' => 1,
			'appearance' => array(
				'collapseAll' => 0,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showAllLocalizationLink' => 1
			),
		),
	),
	'object' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.object',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_socialcms_domain_model_activitystreamsitem',
			'minitems' => 0,
			'maxitems' => 1,
		),
	),
	'provider' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.provider',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_socialcms_domain_model_activitystreamsitem',
			'minitems' => 0,
			'maxitems' => 1,
		),
	),
	'target' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry.target',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_socialcms_domain_model_activitystreamsitem',
			'minitems' => 0,
			'maxitems' => 1,
			'appearance' => array(
				'collapseAll' => 0,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showAllLocalizationLink' => 1
			),
		),
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_socialcms_domain_model_activitystreamsitem',$tmp_socialcms_columns);

$GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['types']['Tx_Socialcms_ActivityStreamsEntry']['showitem'] = $TCA['tx_socialcms_domain_model_activitystreamsitem']['types']['Tx_Socialcms_ActivityStreamsItem']['showitem'];
$GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['types']['Tx_Socialcms_ActivityStreamsEntry']['showitem'] .= ',--div--;LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsentry,';
$GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['types']['Tx_Socialcms_ActivityStreamsEntry']['showitem'] .= 'title, verb, user_id, group_id, app_id, bcc, bto, cc, context, dc, end_time, geojson, in_reply_to, ld, links, location, mood, odata, opengraph, priority, rating, result, schema_org, source, start_time, tags, to_object, actor, generator, icon, object, provider, target';

$GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['columns'][$TCA['tx_socialcms_domain_model_activitystreamsitem']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsitem.tx_extbase_type.Tx_Socialcms_ActivityStreamsEntry','Tx_Socialcms_ActivityStreamsEntry');

$tmp_socialcms_columns = array(

	'content' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.content',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		)
	),
	'display_name' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.display_name',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'downstream_duplicates' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.downstream_duplicates',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		)
	),
	'summary' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.summary',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		)
	),
	'upstream_duplicates' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.upstream_duplicates',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		)
	),
	'alias' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.alias',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'attended_by' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.attended_by',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'attending' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.attending',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'dc' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.dc',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'end_time' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.end_time',
		'config' => array(
			'type' => 'input',
			'size' => 10,
			'eval' => 'datetime',
			'checkbox' => 1,
			'default' => time()
		),
	),
	'followers' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.followers',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		)
	),
	'following' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.following',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		)
	),
	'friend_requests' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.friend_requests',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'friends' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.friends',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		)
	),
	'geojson' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.geojson',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		)
	),
	'invited' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.invited',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		)
	),
	'likes' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.likes',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		)
	),
	'ld' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.ld',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		)
	),
	'links' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.links',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'location' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.location',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'maybe_attending' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.maybe_attending',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'members' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.members',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'not_attended_by' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.not_attended_by',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'mood' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.mood',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'not_attending' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.not_attending',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'odata' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.odata',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'opengraph' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.opengraph',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'rating' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.rating',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'replies' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.replies',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'reviews' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.reviews',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'saves' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.saves',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'schema_org' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.schema_org',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'shares' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.shares',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'source' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.source',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'start_time' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.start_time',
		'config' => array(
			'type' => 'input',
			'size' => 10,
			'eval' => 'datetime',
			'checkbox' => 1,
			'default' => time()
		),
	),
	'attachments' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.attachments',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_socialcms_domain_model_activitystreamsitem',
			'foreign_field' => 'activitystreamsobject',
			'maxitems'      => 9999,
			'appearance' => array(
				'collapseAll' => 0,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showAllLocalizationLink' => 1
			),
		),

	),
	'author' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.author',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_socialcms_domain_model_activitystreamsitem',
			'minitems' => 0,
			'maxitems' => 1,
		),
	),
	'image' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject.image',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_socialcms_domain_model_activitystreamsmedialink',
			'minitems' => 0,
			'maxitems' => 1,
		),
	),
);

$tmp_socialcms_columns['activitystreamsobject'] = array(
	'config' => array(
		'type' => 'passthrough',
	)
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_socialcms_domain_model_activitystreamsitem',$tmp_socialcms_columns);

$GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['types']['Tx_Socialcms_ActivityStreamsObject']['showitem'] = $TCA['tx_socialcms_domain_model_activitystreamsitem']['types']['Tx_Socialcms_ActivityStreamsItem']['showitem'];
$GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['types']['Tx_Socialcms_ActivityStreamsObject']['showitem'] .= ',--div--;LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsobject,';
$GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['types']['Tx_Socialcms_ActivityStreamsObject']['showitem'] .= 'content, display_name, downstream_duplicates, summary, upstream_duplicates, alias, attended_by, attending, dc, end_time, followers, following, friend_requests, friends, geojson, invited, likes, ld, links, location, maybe_attending, members, not_attended_by, mood, not_attending, odata, opengraph, rating, replies, reviews, saves, schema_org, shares, source, start_time, attachments, author, image';

$GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['columns'][$TCA['tx_socialcms_domain_model_activitystreamsitem']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:socialcms/Resources/Private/Language/locallang_db.xlf:tx_socialcms_domain_model_activitystreamsitem.tx_extbase_type.Tx_Socialcms_ActivityStreamsObject','Tx_Socialcms_ActivityStreamsObject');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_socialcms_domain_model_activitystreamsitem', $GLOBALS['TCA']['tx_socialcms_domain_model_activitystreamsitem']['ctrl']['type'],'','after:' . $TCA['tx_socialcms_domain_model_activitystreamsitem']['ctrl']['label']);
