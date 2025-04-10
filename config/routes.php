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
    "book_add" => [
        'controllers' => 'addBookController.php',
        "SEO" => [
            'title' => 'Add a book',
            'description' => 'Adding a book',
        ]
    ],
    "book_edit" => [
        'controllers' => 'editBookController.php',
        "SEO" => [
            'title' => 'Edit a book',
            'description' => 'Editing to a book',
        ]
    ],
    "book_delete" => [
        'controllers' => 'deleteBookController.php',
        "SEO" => [
            'title' => 'Delete a book',
            'description' => 'Deleting a book',
        ]
    ],
    "illustration_list" => [
        'controllers' => 'illustrationListController.php',
        "SEO" => [
            'title' => 'Illustrations',
            'description' => 'Illustrations list',
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