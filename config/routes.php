<?php

const AVAILABLE_ROUTES = [
    'home' => [
        'controllers' => 'homeController.php',
        "SEO" => [
            'title' => 'Home',
            'description' => 'Home..',
        ]
    ],
    "book_list" => [
        'controllers' => 'bookListController.php',
        "SEO" => [
            'title' => 'Books',
            'description' => 'Books list',
        ]
    ],
    "terms_of_use" => [
        'controllers' => 'legalMentionsController.php',
        "SEO" => [
            'title' => 'Terms of Use',
            'description' => 'Terms of Use',
        ]
    ],
];

const DEFAULT_ROUTE = AVAILABLE_ROUTES['home'];