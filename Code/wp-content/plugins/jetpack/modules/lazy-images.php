<?php
/**
 * Module Name: Lazy Images
 * Module Description: Improve your site's speed by only loading images visible on the screen. Modern browsers now support lazy loading, and WordPress itself bundles lazy loading features for images and videos. This feature will consequently be removed from Jetpack in November 2023.
 * Sort Order: 24
 * Recommendation Order: 14
 * First Introduced: 5.6.0
 * Requires Connection: No
 * Auto Activate: No
 * Module Tags: Appearance, Recommended
 * Feature: Appearance
 * Additional Search Queries: mobile, theme, fast images, fast image, image, lazy, lazy load, lazyload, images, lazy images, thumbnail, image lazy load, lazy loading, load, loading
 *
 * @package automattic/jetpack
 */

/**
 * The core of this module has been migrated to an standalone reusable package.
 *
 * @since 8.8
 */

/*
 * Initialize lazy images on the wp action so that conditional
 * tags are safe to use.
 *
 * As an example, this is important if a theme wants to disable lazy images except
 * on single posts, pages, or attachments by short-circuiting lazy images when
 * is_singular() returns false.
 *
 * See: https://github.com/Automattic/jetpack/issues/8888
 */

add_action( 'wp', array( 'Automattic\\Jetpack\\Jetpack_Lazy_Images', 'instance' ) );
