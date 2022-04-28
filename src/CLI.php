<?php

namespace ElevenMiles\EmAutoUpdate;

use WP_CLI;

class CLI
{

    /**
     * List all plugins that are available for update.
     *
     * ## EXAMPLES
     *
     *     wp em-auto-update list
     *
     * @when after_wp_load
     */
    public function list()
    {
        WP_CLI::line( 'Hello World!' );
    }

    /**
     * @return void
     */
    public static function registerCommand(): void
    {
        if (defined('WP_CLI') && \WP_CLI) {
            WP_CLI::add_command('em-auto-update', __CLASS__);
        }
    }
}
