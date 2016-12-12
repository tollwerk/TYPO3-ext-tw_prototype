<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript',
    'tollwerk TYPO3 Extension Prototype');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_twprototype_domain_model_person',
    'EXT:tw_prototype/Resources/Private/Language/locallang_csh_tx_twprototype_domain_model_person.xlf');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_twprototype_domain_model_person');


// Mentor plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY,
    'Person',
    'LLL:EXT:tw_prototype/Resources/Private/Language/locallang_db.xml:tt_content.list_type.person'
);
