<?php
use App\Main;
require_once __DIR__.'/../../config/config.php';


try{
    //error_log(__FILE__.time());
    //trigger_error(date('Y-m-d').' 13 error', E_USER_ERROR);
    //throw new RangeException('Thrown RangeException');
} catch (\Throwable $e){
    //$errorLog->exceptionInsert($e);
    error_log($e->getMessage());
}

if(!isset($_SESSION['user']['id'])) {
    //header('Location: /logout.php');
}
try{
    $data = array('foo' => ['bar', 'baz']);
    App\Main\Debug::debugArray($debugbar, error_get_last());
    App\Main\Debug::debugMsg($debugbar, error_get_last()['message'] ?? 'No Errors');
    //$debugbar["messages"]->addMessage('<pre>' . $data . '</pre>');
    //error_log('message');
}catch (Throwable $e){
    $debugbar['exceptions']->addException($e);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PHP Errors - Dev_PHP</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/bs4.css" rel="stylesheet">
    <?php if (ENVIRONMENT === 'development'): ?>
        <meta http-equiv="cache-control" content="max-age=0"/>
        <meta http-equiv="cache-control" content="no-cache"/>
        <meta http-equiv="expires" content="0"/>
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT"/>
        <meta http-equiv="pragma" content="no-cache"/>
        <link rel="stylesheet" type="text/css" href="/css/vendor/highlightjs/styles/github.css">
        <link rel="stylesheet" type="text/css" href="/css/debugbar.css">
        <link rel="stylesheet" type="text/css" href="/css/widgets.css">
        <link rel="stylesheet" type="text/css" href="/css/openhandler.css">
        <link rel="stylesheet" type="text/css" href="/css/styles/default.css">
    <?php endif; ?>
</head>

<body>