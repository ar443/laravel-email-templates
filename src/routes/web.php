<?php

use Illuminate\Support\Facades\Route;
use ar443\LaravelEmailTemplate\Controllers\EmailTemplateController;

Route::resource('email-templates', EmailTemplateController::class)->middleware('web');

?>