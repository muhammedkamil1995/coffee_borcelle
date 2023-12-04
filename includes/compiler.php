<?php
require_once 'vendor/autoload.php'; // Include the Composer autoloader
use Leafo\ScssPhp\Compiler;

$scss = new Compiler();

// Set the input and output paths
$scssFile = 'assets/scss/styles.scss';
$cssFile = 'public/css/styles.css';

// Compile the SCSS and save as CSS
$css = $scss->compile(file_get_contents($scssFile));
file_put_contents($cssFile, $css);

echo 'SCSS compiled and saved as CSS.';