<?php

Breadcrumbs::for('dashboard', function($trail) {
    $trail->push('Beranda', route('dashboard'));
});

Breadcrumbs::for('member.index', function($trail) {
    $trail->parent('dashboard');
    $trail->push('Anggota', route('member.index'));
});

Breadcrumbs::for('member.create', function($trail) {
    $trail->parent('member.index');
    $trail->push('Tambah anggota', route('member.create'));
});