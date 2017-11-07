<?php
/**
 * Registers Endo - Slack Notifications class
 *
 * @since 1.0.0
 */

/**
 * This class registers the Slack Bot functionality for Endo
 *
 * @since 1.0.0
 */
if ( ! class_exists( 'Endo_Slack_Notifications' ) ) {

	class Endo_Slack_Notifications {

		/**
		 * Triggers for sending Slack notifications
		 *
		 * @since 1.0.0
		 */
		public function __construct() 
		{
	
			// add_action( 'wp_login', array( $this, 'send_login_notification' ), 10, 2 );
			// add_action( 'woocommerce_checkout_order_processed', array( $this, 'send_new_order_notification' ), 10, 3 );
	
		}

		/**
		 * After a user logs in, send a notification
		 *
		 * @since 1.0.0
		 */
		public function send_login_notification( $user_login, $user ) 
		{
			
			$notif = new Endo_Slack_Bot();
			$notif->send_message( $user->user_email . ' has logged in to the site.');

		}

		/**
		 * After an order is placed, send a notification
		 *
		 * @since 1.0.0
		 */
		public function send_new_order_notification( $order_id, $posted_data, $order ) 
		{

			$notif = new Endo_Slack_Bot();
			$notif->send_message( $posted_data['billing_email'] . ' has placed an order on the site.');

		}

	}

}