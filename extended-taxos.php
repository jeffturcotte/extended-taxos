<?php
/**
 * Extended custom taxonomies for WordPress.
 *
 * @package   ExtendedTaxos
 * @version   2.0.5
 * @author    John Blackbourn <https://johnblackbourn.com>
 * @link      https://github.com/johnbillion/extended-taxos
 * @copyright 2012-2017 John Blackbourn
 * @license   GPL v2 or later
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

include __DIR__ . '/src/functions.php';

if ( ! class_exists( 'Extended_Taxonomy' ) ) {
    include __DIR__ . '/src/Extended_Taxonomy.php';
}

if ( ! class_exists( 'Extended_Taxonomy_Admin' ) ) {
    include __DIR__ . '/src/Extended_Taxonomy_Admin.php';
}

if ( ! class_exists( 'Walker_ExtendedTaxonomyCheckboxes' ) ) {
    include __DIR__ . '/src/Walker_ExtendedTaxonomyCheckboxes.php';
}

if ( ! class_exists( 'Walker_ExtendedTaxonomyRadios' ) ) {
    include __DIR__ . '/src/Walker_ExtendedTaxonomyRadios.php';
}

if ( ! class_exists( 'Walker_ExtendedTaxonomyDropdown' ) ) {
    include __DIR__ . '/src/Walker_ExtendedTaxonomyDropdown.php';
}

if ( ! class_exists( 'Extended_Taxonomy_Rewrite_Testing' ) && class_exists( 'Extended_Rewrite_Testing' ) ) {
    include __DIR__ . '/src/Extended_Taxonomy_Rewrite_Testing.php';
}
