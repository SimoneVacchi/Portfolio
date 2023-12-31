<?php
/**
 * Copyright (C) 2014-2020 ServMask Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * ███████╗███████╗██████╗ ██╗   ██╗███╗   ███╗ █████╗ ███████╗██╗  ██╗
 * ██╔════╝██╔════╝██╔══██╗██║   ██║████╗ ████║██╔══██╗██╔════╝██║ ██╔╝
 * ███████╗█████╗  ██████╔╝██║   ██║██╔████╔██║███████║███████╗█████╔╝
 * ╚════██║██╔══╝  ██╔══██╗╚██╗ ██╔╝██║╚██╔╝██║██╔══██║╚════██║██╔═██╗
 * ███████║███████╗██║  ██║ ╚████╔╝ ██║ ╚═╝ ██║██║  ██║███████║██║  ██╗
 * ╚══════╝╚══════╝╚═╝  ╚═╝  ╚═══╝  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Kangaroos cannot jump here' );
}

if ( defined( 'WP_CLI' ) && class_exists( 'Ai1wm_Backup_WP_CLI_Base' ) ) {
	class Ai1wmle_URL_WP_CLI_Command extends Ai1wm_Backup_WP_CLI_Base {
		public function __construct() {
			parent::__construct();
		}

		/**
		 * Restores a backup from URL.
		 *
		 * ## OPTIONS
		 *
		 * <URL>
		 * : URL address of the .wpress backup file
		 *
		 * [--yes]
		 * : Automatically confirm the restore operation
		 *
		 * ## EXAMPLES
		 *
		 * $ wp ai1wm url restore 'https://drive.google.com/open?id=1KVl6lXQeTBmDdlZKX29IAoDbbz_CAxC8'
		 * Restore in progress...
		 * Restore complete.
		 *
		 * $ wp ai1wm url restore 'https://drive.google.com/open?id=1KVl6lXQeTBmDdlZKX29IAoDbbz_CAxC8' --yes
		 * @subcommand restore
		 */
		public function restore( $args = array(), $assoc_args = array() ) {
			if ( ! isset( $args[0] ) ) {
				WP_CLI::error_multi_line(
					array(
						__( 'A backup URL must be provided in order to proceed with the restore process.', AI1WMLE_PLUGIN_NAME ),
						__( 'Example: wp ai1wm url restore \'https://drive.google.com/open?id=1KVl6lXQeTBmDdlZKX29IAoDbbz_CAxC8\'', AI1WMLE_PLUGIN_NAME ),
					)
				);
				exit;
			}

			$params = array(
				'archive'    => ai1wm_storage_folder() . '.wpress',
				'storage'    => ai1wm_storage_folder(),
				'file_url'   => $args[0],
				'cli_args'   => $assoc_args,
				'secret_key' => get_option( AI1WM_SECRET_KEY, false ),
			);

			$this->run_restore( $params );
		}
	}
}
