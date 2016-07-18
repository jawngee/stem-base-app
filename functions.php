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
 * Perform any setup stuff here
 */
$context->onSetup(function() use ($context) {
    // Here we do any setup
});

/**
 * Post deployment callback
 */
$context->onDeploy(function() use ($context){
});

add_filter('get_attached_file', function($file, $attachment_id){
    if (!file_exists($file)) {
        $meta=get_post_meta($attachment_id);
        if (isset($meta['s3'])) {
            
        }
    }
    return $file;
}, 1000, 2);
