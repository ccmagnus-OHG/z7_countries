<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Countries',
    'description' => 'This TYPO3 extension offers the possibility of a flexible country configuration for single tree content.',
    'category' => 'fe',
    'author' => 'Raphael Thanner',
    'author_email' => 'r.thanner@zeroseven.de',
    'author_company' => 'zeroseven design studios GmbH',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '0.5.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.99.99',
        ]
    ]
];
