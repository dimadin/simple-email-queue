<?php

/**
 * The Simple Email Queue Plugin
 *
 * Put email in queue and send it one by one, by limits.
 *
 * @package Simple_Email_Queue
 * @subpackage Main
 */

/**
 * Plugin Name: Simple Email Queue
 * Plugin URI:  http://blog.milandinic.com/wordpress/plugins/
 * Description: Put email in queue and send it one by one, by limits.
 * Author:      Milan Dinić
 * Author URI:  http://blog.milandinic.com/
 * Version:     0.4
 * License:     GPL
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) exit;

// Load dependencies
require __DIR__ . '/vendor/autoload.php';

/*
 * Initialize a plugin.
 *
 * Load class when all plugins are loaded
 * so that other plugins can overwrite it.
 */
add_action( 'plugins_loaded', array( 'Simple_Email_Queue', 'plugins_loaded' ), 15 );

/**
 * Helper wrapper for adding emails to queue.
 *
 * @see Simple_Email_Queue::add_to_queue()
 *
 * @since 1.0
 *
 * @param string|array $to          Array or comma-separated list of email addresses to send message.
 * @param string       $subject     Email subject.
 * @param string       $message     Message contents.
 * @param string|array $headers     Optional. Additional headers.
 * @param string|array $attachments Optional. Files to attach.
 */
function simple_email_queue_add( $to, $subject, $message, $headers = '', $attachments = array() ) {
	$simple_email_queue = Simple_Email_Queue::get_instance();

	$simple_email_queue->add_to_queue( $to, $subject, $message, $headers, $attachments );
}
