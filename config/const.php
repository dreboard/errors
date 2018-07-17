<?php
if (!defined('ENVIRONMENT') && PHP_SAPI !== 'cli') {
    if ('localhost:8091' === $_SERVER['HTTP_HOST']) {
        define('ENVIRONMENT', 'development');
        define('HOME_PAGE', 'localhost:8091/');
    } else {
        define('ENVIRONMENT', 'production');
    }
}
define('CSSDIR', $_SERVER['HTTP_HOST'].'/css/');
if (!defined('COOKIE_LIFETIME')) {
    define('COOKIE_LIFETIME', 2440);
}