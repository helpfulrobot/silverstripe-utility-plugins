<?php

/**
 * Class Utility
 */
class Utility extends Object {

    static function include_code() {

    }

    static function includeBootstrap($jquery = false) {
        if($jquery){
            self::includeJquery();
        }
        Requirements::css(BOOTSTRAP_DIR . "/css/bootstrap.min.css");
        Requirements::javascript(BOOTSTRAP_DIR . '/js/bootstrap.js');
    }
    static function includeChosen() {
        Requirements::javascript(CHOSEN_DIR . '/chosen.jquery.min.js');
        Requirements::javascript(PLUGINS_DIR . '/chosen/js/chosen.jquery_init.js');
        Requirements::css(CHOSEN_DIR . '/chosen.css');
    }

    static function includeJquery() {
        Requirements::block(THIRDPARTY_DIR ."/jquery/jquery.js");
        Requirements::javascript(JQUERY_DIR . '/jquery.js');
        Requirements::javascript(JQUERY_MIGRATE_DIR . '/index.js');
    }

}
