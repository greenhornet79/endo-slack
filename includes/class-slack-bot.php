<?php
/**
 * Registers Endo - Slack Bot class
 *
 * @since 1.0.0
 */

/**
 * This class registers the Slack Bot functionality for Endo
 *
 * @since 1.0.0
 */
if ( ! class_exists( 'Endo_Slack_Bot' ) ) {

	class Endo_Slack_Bot {

		protected $webhook;
		protected $channel;
	
		/**
		 * Set the Slack webhook and channel to use for the notification
		 *
		 * @since 1.0.0
		 */
		public function __construct() 
		{
			
			$this->webhook = 'your_hook_here';
			$this->channel = 'your_channel_here';

		}


		/**
		 * Send the notification thought the API.
		 *
		 * @param   string    $message   the notification to send.
		 * @return  boolean              did the message sent successfully?
		 * @since   1.0.0
		 */
		public function send_message( $message ) {

			$response = wp_remote_post( $this->webhook, array(
				'method'      => 'POST',
				'timeout'     => 30,
				'httpversion' => '1.0',
				'blocking'    => true,
				'headers'     => array(),
				'body'        => array(
				'payload'   => wp_json_encode( array(
					'channel'  => $this->channel,
					'username' => 'Endo Slack',
					'icon_url' => 'http://www.endocreative.com/wp-content/themes/endo-2016/images/endo-logo.png',
					'text'     => sprintf( '%s @ *<%s|%s>*', $message, get_bloginfo( 'url' ), get_bloginfo( 'name' ) ),
				) ),
				),
			) );

		}

	}

}