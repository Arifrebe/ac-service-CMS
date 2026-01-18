<?php

Breadcrumbs::for('dashboard', function($trail) {
    $trail->push('Beranda', route('dashboard'));
});

Breadcrumbs::for('member.index', function($trail) {
    $trail->parent('dashboard');
    $trail->push('Anggota', route('member.index'));
});