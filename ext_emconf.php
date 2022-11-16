<?php

/****************************************************************
 * Extension Manager/Repository config file for ext "t3up_table".
 ***************************************************************/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'T3UP - Table',
    'description'      => 'Table Extension for the t3up-package',
    'version'          => '10.0.0',
    'state'            => 'stable',
    'category'         => 'templates',
    'author'           => 'Michael Lang',
    'author_email'     => 'michael.lang@h-da.de',
    'author_company'   => 'h_da Hochschule Darmstadt',
    'uploadfolder'     => false,
    'createDirs'       => '',
    'clearCacheOnLoad' => true,
    'constraints'      => [
        'depends'   => [
            'typo3' => '10.4.0-11.5.99',
        ],
        'conflicts' => [
            'fluidpages' => '*',
        ],
        'suggests'  => [],
    ],
];
