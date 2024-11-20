<?php

return [
    'file_path' => base_path('mock-cms.yaml'),
    'languages' => [
        'sites' => [
            'http://localhost:8000' => [
                'title' => 'Türkçe',
                'code' => 'tr',
                'hash' => 'rNqYI0Q0NKWHrGN5NFVtvuy76B8Ow0hq2Xobe61O',
                'default' => true,
            ],
            'http://localhost:8001' => [
                'title' => 'English',
                'code' => 'en',
                'hash' => '4puWXfuN2SpAUIUypsLIQiaiHbVSC6DymO77yYMm',
                'default' => false,
            ]
        ],
    ]

];