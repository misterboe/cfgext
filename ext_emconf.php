<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 cfgext',
    'description' => '',
    'category' => 'templates',
    'version' => '1.0.0',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Boris Schauer',
    'author_email' => 'me@bschauer.de',
    'author_company' => 'bschauer',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.*',
        ],
    ],
];
