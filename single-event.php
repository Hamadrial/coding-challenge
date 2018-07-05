<?php

// Templates
$templates = ['single/single-' . $post->ID . '.twig', 'single/single-' . $post->post_type . '.twig', 'single/single.twig'];

// Context
$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;


// Render with Timber
Timber::render( $templates, $context );