<?php

return [
    'custom' => [
        'contact_name' => [
            'required' => 'Полето <strong>име</strong> е задължително.',
        ],
        'contact_email' => [
            'required' => 'Полето <strong>е-поща</strong> е задължително.',
            'email' => 'Въведената <strong>е-поща</strong> не е валидна.',
        ],
        'contact_message' => [
            'required' => 'Полето <strong>съобщение</strong> е задължително.',
        ],
        'subscribe_email' => [
            'required' => 'Полето <strong>е-поща</strong> е задължително.',
            'email' => 'Въведената <strong>е-поща</strong> не е валидна.',
            'unique' => 'Въведената <strong>е-поща</strong> e вече вписана.',
        ],
    ],
];
