<?php

use History\EventHandlers;

Autoloader::directories(array(
	__DIR__ . DS . 'models'
));

Route::controller(array(
	'account::backend.accounts',
	'account::auth',
	'account::profile'
), '(:controller)/(:wildcards)', 'index');

Menu::container(array('admin', 'webshop'), 'backend')
	->add('accounts', __('shophub::menu.backend.accounts'));

Menu::add('auth', __('shopbhub::auth'))
	->add('profile', __('shophub::menu.profile'));

EventHandlers::register(__DIR__ . DS . 'eventhandlers');