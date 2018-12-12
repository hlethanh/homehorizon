<?php

// Accueil
Breadcrumbs::for('homepage', function ($trail) {
    $trail->push('Accueil', route('homepage'));
});

// Accueil > À vendre
Breadcrumbs::for('avendre', function ($trail) {
    $trail->parent('homepage');
    $trail->push('À vendre', route('vendre'));
});

// Accueil > À louer
Breadcrumbs::for('alouer', function ($trail) {
    $trail->parent('homepage');
    $trail->push('À louer', route('louer'));
});

// Accueil > Gestion privative
Breadcrumbs::for('gestion', function ($trail) {
    $trail->parent('homepage');
    $trail->push('Gestion privative', route('gestion'));
});

// Accueil > Contact
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('homepage');
    $trail->push('Contact', route('contact'));
});
