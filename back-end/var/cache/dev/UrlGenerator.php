<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    'articles' => [[], ['_controller' => 'App\\Controller\\ArticlesController::index'], [], [['text', '/api/v1/articles']], [], []],
    'articles/show' => [['slug'], ['_controller' => 'App\\Controller\\ArticlesController::show'], [], [['variable', '/', '[^/]++', 'slug'], ['text', '/api/v1/articles']], [], []],
];
