<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('log_errors', 1);
//ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/php_log.log');

if (ENVIRONMENT === 'development') {
    ini_set('display_errors', 1);
    ini_set('error_log', __DIR__.'/../logs/php/dev/'.date('Ymd').'.log');
    if (extension_loaded('xdebug')) {
        if (!is_dir(__DIR__ .'/../logs/xdebug')){
            if ( ! mkdir( __DIR__ . '/../logs/xdebug', 0777 ) && ! is_dir( __DIR__ . '/../logs/xdebug' ) ) {
                throw new \RuntimeException( sprintf( 'Directory "%s" was not created', __DIR__ . '/../logs/xdebug' ) );
            }
            if ( ! mkdir( __DIR__ . '/../logs/xdebug/trace', 0777 ) && ! is_dir( __DIR__ . '/../logs/xdebug/trace' ) ) {
                throw new \RuntimeException( sprintf( 'Directory "%s" was not created', __DIR__ . '/../logs/xdebug/trace' ) );
            }
            if ( ! mkdir( __DIR__ . '/../logs/xdebug/profile', 0777 ) && ! is_dir( __DIR__ . '/../logs/xdebug/profile' ) ) {
                throw new \RuntimeException( sprintf( 'Directory "%s" was not created', __DIR__ . '/../logs/xdebug/profile' ) );
            }
        }
        ini_set('xdebug.remote_log', __DIR__.'/../logs/xdebug.log');
        ini_set('xdebug.profiler_output_dir', __DIR__.'/../logs/xdegub/profiler');
        ini_set('xdebug.trace_output_dir', __DIR__ . '/../logs/xdebug/trace');

        ini_set('xdebug.collect_vars', 1);
        ini_set('xdebug.collect_params', 4);
        ini_set('xdebug.dump_globals', 'on');
        ini_set('xdebug.dump.SERVER', 'REQUEST_URI');
        ini_set('xdebug.show_local_vars', 1);
        ini_set('xdebug.collect_assignments', true);
        ini_set('xdebug.scream', 1);
        ini_set('xdebug.show_error_trace', 1);
        //ini_set('xdebug.show_exception_trace', 1); // force php to output exceptions even in a try catch block
        ini_set('xdebug.profiler_enable', 1);

    }
    ini_set('display_errors', 1);
    ini_set('html_errors', 1);
    ini_set('display_startup_errors', 1);
} else {
    ini_set('error_log', __DIR__.'/../logs/php/live/'.date('Ymd').'.log');
    ini_set('display_errors', 0);           // SET to 0 in php.ini
    ini_set('html_errors', 0);              // SET to 0 in php.ini
    ini_set('display_startup_errors', 0);   // SET to 0 in php.ini
}
ini_set('date.timezone', 'America/Chicago');
ini_set('session.cookie_httponly', 1);
ini_set("session.gc_probability", 1);
ini_set("session.gc_divisor", 100);
session_set_cookie_params(COOKIE_LIFETIME, '/', '', false, true);