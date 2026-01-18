<?php

Breadcrumbs::for('dashboard', function($trail) {
    $trail->push('Beranda', route('dashboard'));
});