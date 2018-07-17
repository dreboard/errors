<?php
//ini_set('error_reporting', E_ALL);
//ini_set('log_errors', 1);
//ini_set('error_log', 'php_log.log');

function error_handler($errno, $errstr, $errfile, $errline)
{
	error_log(__FUNCTION__." $errstr in $errfile:$errline");
	throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}

function exception_handler(Throwable $exception)
{
    error_log(get_class($exception) . ': ' . __FUNCTION__ . $exception->getMessage());
    echo "Uncaught exception: " . get_class($exception) . ': ' . __FUNCTION__ .' : '. $exception->getMessage() . " \n";
    header('Location: 500.html');
    exit;

}
function shutdown_function()
{
    $error = error_get_last();
    if(($error['type'] === E_ERROR) || ($error['type'] === E_USER_ERROR))
    {
        error_log(__FUNCTION__." ".$error['type']);
		echo 'Sorry, a serious error has occured in ' . $error['file'];
    }
}

register_shutdown_function('shutdown_function');
set_exception_handler('exception_handler');
set_error_handler("error_handler");