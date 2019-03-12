<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require('element.php');

/**
 * Build our link
 */
$link = new Element('a', 'Click here!', array('href'=>'http://yahoo.com'));
$link->setAttribute('target', "_blank");

/**
 * Build our paragraph
 */
$paragraph = new Element('p', "Interested in Yahoo? $link");


/**
 *  Output the HTML
 */
echo $paragraph;
