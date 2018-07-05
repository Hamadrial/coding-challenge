<?php

// Templates
$templates = ['archive/archive-event.twig', 'index/index.twig'];

// Context
$context = Timber::get_context();
$context['posts'] = new Timber\PostQuery();

$context['title'] = 'Archive';
 if ( is_post_type_archive() ) {
	$context['title'] = post_type_archive_title( '', false );
	array_unshift( $templates, 'archive/archive-' . get_post_type() . '.twig' );
}

// Render with Timber
Timber::render( $templates, $context );