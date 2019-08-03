<?php

$EM_CONF['snipper'] = [
    'title' => 'Snipper ',
    'description' => 'Keep external links secure by adding rel="noopener" to all external typlinks',
    'category' => 'fe',
    'author' => 'David Steeb',
    'author_email' => 'typo3@b13.com',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author_company' => 'b13 GmbH, Stuttgart',
    'version' => '1.0.0',
    'constraints' => [
        'depends' =>
            [
                'typo3' => '9.5.0-10.99.99',
            ],
    ],
];
