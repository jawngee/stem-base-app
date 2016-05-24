<?php

if (!class_exists(\ILab\Stem\Core\Context::class)) {
    return;
}

include 'helpers.php';

/**
 * If using any composer stuff, be sure to add the autoload
 */
//require_once('vendor/autoload.php');


/**
 * Create the context for this theme.
 *
 */
$context=\ILab\Stem\Core\Context::initialize(dirname(__FILE__));

/**
 * Setup functions
 */
$context->onSetup(function() use ($context) {
    // Here we do any setup
});