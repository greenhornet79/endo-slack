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
	
			add_action( 'wp_login', array( $this, 'send_login_notification' ), 10, 2 );
			
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

	}

}