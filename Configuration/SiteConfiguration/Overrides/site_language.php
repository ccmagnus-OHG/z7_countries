<?php

defined('TYPO3') || die('🍭️');

$GLOBALS['SiteConfiguration']['site_language']['columns']['countries'] = [
    'label' => 'LLL:EXT:z7_countries/Resources/Private/Language/locallang_siteconfiguration.xlf:site_language.countries',
    'description' => 'LLL:EXT:z7_countries/Resources/Private/Language/locallang_siteconfiguration.xlf:site_language.countries.description',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectMultipleSideBySide',
        'foreign_table' => 'tx_z7countries_country',
        'min' => 0
    ]
];

foreach ($GLOBALS['SiteConfiguration']['site_language']['types'] ?? [] as $key => $value) {
    $GLOBALS['SiteConfiguration']['site_language']['types'][$key]['showitem'] .= ',countries';
}
