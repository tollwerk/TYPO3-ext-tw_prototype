<?php

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

/*
 * Person plugin
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Tollwerk.'.$_EXTKEY,
    'Person',
    array(
        'Person' => 'list,show',
    ),
    // non-cacheable actions
    array(
        'Person' => '',
    )
);
