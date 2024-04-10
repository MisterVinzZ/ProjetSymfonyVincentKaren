<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/produits' => [
            [['_route' => 'produits', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null],
            [['_route' => 'produits_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null],
        ],
        '/produits/new' => [[['_route' => 'produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/produits/(?'
                    .'|edit/([^/]++)(*:68)'
                    .'|delete/([^/]++)(*:90)'
                    .'|show/([^/]++)(*:110)'
                    .'|([^/]++)(*:126)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        90 => [[['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        110 => [[['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], null, null, false, true, null]],
        126 => [
            [['_route' => 'produits_par_categorie', '_controller' => 'App\\Controller\\ProduitController::produitsParCategorie'], ['categorie'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
