<?php

use Illuminate\Support\Facades\Route;
use ar443\LaravelEmailTemplate\Controllers\WGLEmailTemplateController;

Route::resource('email-templates', WGLEmailTemplateController::class);

?>