<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
	$this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('app:new', function () {
	// Generate a random string of 16 characters for the app key
	$app_key = bin2hex(random_bytes(8));

	// Generate a random string of 32 characters for the app secret
	$app_secret = bin2hex(random_bytes(16));

	$this->comment("Pusher App Key: " . $app_key);
	$this->comment("Pusher App Secret: " . $app_secret);
})->purpose('Display an inspiring quote');
