<?php
/**
 * Registers Endo - Slack class
 *
 * @since 1.0.0
 */

/**
 * This class registers the main Slack functionality
 *
 * @since 1.0.0
 */
if ( ! class_exists( 'Endo_Slack' ) ) {

	class Endo_Slack {

		/**
		 * Puts things in motion
		 *
		 * @since 1.0.0
		 */
		public function run() 
		{
			self::includes();
			$notifications = new Endo_Slack_Notifications();
		}

		private function includes() 
		{
			require plugin_dir_path( __FILE__ ) . 'includes/class-notifications.php';
			require plugin_dir_path( __FILE__ ) . 'includes/class-slack-bot.php';
		}

	}

}
