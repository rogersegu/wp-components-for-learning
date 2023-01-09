<?php
/**
 * Plugin Name:       Components For Learning
 * Plugin URI: 				https://componentsforlearning.org
 * Description:       A collection of semantic visual designed for learning contents, aimed to reduce the learners’ cognitive load.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            Roger Segú
 * Author URI: 				https://rogersegu.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       components-for-learning
 *
 * @package           c4l
 */

function register_blocks_category() {
	add_filter( 'block_categories_all' , function( $categories ) {

    if (!$category['slug'] == 'custom-c4l-category') {
      $categories[] = array(
        'slug'  => 'custom-c4l-category',
        'title' => 'Components for Learning'
      );
    }
    return $categories;
  } );
}
add_action( 'init', 'register_blocks_category' );


/* Key concept block */

function register_key_concept_block() {

	register_block_type( __DIR__ . '/key-concept/build' );

}
add_action( 'init', 'register_key_concept_block' );


/* Tip block */

function register_tip_block() {

	register_block_type( __DIR__ . '/tip/build' );

}
add_action( 'init', 'register_tip_block' );


/* Reminder block */

function register_reminder_block() {

	register_block_type( __DIR__ . '/reminder/build' );

}
add_action( 'init', 'register_reminder_block' );


/* Attention block */

function register_attention_block() {

	register_block_type( __DIR__ . '/attention/build' );

}
add_action( 'init', 'register_attention_block' );


/* Quote block */

function register_quote_block() {

	register_block_type( __DIR__ . '/quote/build' );

}
add_action( 'init', 'register_quote_block' );


/* Do/Don't Cards block */

function register_do_dont_cards_block() {

	register_block_type( __DIR__ . '/do-dont-cards/build' );

}
add_action( 'init', 'register_do_dont_cards_block' );


/* Reading Context block */

function register_reading_context_block() {

	register_block_type( __DIR__ . '/reading-context/build' );

}
add_action( 'init', 'register_reading_context_block' );


/* Example block */

function register_example_block() {

	register_block_type( __DIR__ . '/example/build' );

}
add_action( 'init', 'register_example_block' );


/* Tag block */

function register_tag_block() {

	register_block_type( __DIR__ . '/tag/build' );

}
add_action( 'init', 'register_tag_block' );


/* Estimated Time block */

function register_estimated_time_block() {

	register_block_type( __DIR__ . '/estimated-time/build' );

}
add_action( 'init', 'register_estimated_time_block' );


/* Due Date block */

function register_due_date_block() {

	register_block_type( __DIR__ . '/due-date/build' );

}
add_action( 'init', 'register_due_date_block' );


/* Procedural Context block */

function register_procedural_context_block() {

	register_block_type( __DIR__ . '/procedural-context/build' );

}
add_action( 'init', 'register_procedural_context_block' );


/* Grading Value block */

function register_grading_value_block() {

	register_block_type( __DIR__ . '/grading-value/build' );

}
add_action( 'init', 'register_grading_value_block' );


/* Expected Feedback block */

function register_expected_feedback_block() {

	register_block_type( __DIR__ . '/expected-feedback/build' );

}
add_action( 'init', 'register_expected_feedback_block' );


/* All-purpose card block */

function register_all_purpose_card_block() {

	register_block_type( __DIR__ . '/all-purpose-card/build' );

}
add_action( 'init', 'register_all_purpose_card_block' );

