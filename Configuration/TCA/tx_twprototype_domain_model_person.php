<?php
return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:tw_prototype/Resources/Private/Language/locallang_db.xlf:tx_twprototype_domain_model_person',
        'label' => 'given_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,

        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'searchFields' => 'given_name,family_name,birthday,',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('tw_prototype').'Resources/Public/Icons/tx_twprototype_domain_model_person.gif'
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden, given_name, family_name, birthday',
    ),
    'types' => array(
        '1' => array('showitem' => 'hidden;;1, given_name, family_name, birthday, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(

        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'starttime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'endtime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),

        'given_name' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:tw_prototype/Resources/Private/Language/locallang_db.xlf:tx_twprototype_domain_model_person.given_name',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ),
        ),
        'family_name' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:tw_prototype/Resources/Private/Language/locallang_db.xlf:tx_twprototype_domain_model_person.family_name',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ),
        ),
        'birthday' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:tw_prototype/Resources/Private/Language/locallang_db.xlf:tx_twprototype_domain_model_person.birthday',
            'config' => array(
                'dbType' => 'date',
                'type' => 'input',
                'size' => 7,
                'eval' => 'date,required',
                'checkbox' => 0,
                'default' => '0000-00-00'
            ),
        ),

    ),
);
