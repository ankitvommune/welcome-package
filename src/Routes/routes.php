<?php

use Ankit\WelcomePackage\WelcomePackage;

Route::get('/welcome', function () {
    $welcomePackage = new WelcomePackage();
    return $welcomePackage->welcome();
});