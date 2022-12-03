<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Illuminate\Support\Facades\Lang;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push(Lang::get('breadcrumb.dashboard'), route('admin'));
});

// Dashboard > Calendar
Breadcrumbs::for('calendar', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push(Lang::get('breadcrumb.calendar'), route('admin.calendar'));
});

// Dashboard > Profile
Breadcrumbs::for('profile', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push(Lang::get('breadcrumb.profile.profile'), route('admin.profile'));
});

// Dashboard > Account
Breadcrumbs::for('account', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push(Lang::get('breadcrumb.account.account'), route('admin.account'));
});

// Dashboard > Account > Create
Breadcrumbs::for('accountcreate', function (BreadcrumbTrail $trail) {
    $trail->parent('account');
    $trail->push(Lang::get('breadcrumb.account.create'), route('admin.account.create'));
});

// Dashboard > Account > Edit > [ID]
Breadcrumbs::for('accountshow', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('account');
    $trail->push(Lang::get('breadcrumb.account.edit'), route('admin.account.show', $id));
});

// Dashboard > Role
Breadcrumbs::for('role', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push(Lang::get('breadcrumb.role.role'), route('admin.role'));
});