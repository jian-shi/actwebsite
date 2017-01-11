<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();

if (in_category( 'policy')){
    include ('single-policy.php');
}
else{
    include ('single-generic.php');
}