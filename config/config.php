<?php
require_once __DIR__.'/const.php';
require_once __DIR__.'/ini.php';
require_once __DIR__ . '/settings.php';
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/db.php';

try{
    /*$host = 'db';
    $db   = 'mydb';
    $user = 'user';
    $pass = 'test';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];*/
    //$pdo = new PDO($dsn, $user, $pass, $opt);

    $debugbar = new DebugBar\StandardDebugBar();
    $debugbarRenderer = $debugbar->getJavascriptRenderer();

    $hl = new Highlight\Highlighter();
    $hl->setAutodetectLanguages(array('php', 'python', 'perl'));

    $errorLog = new \App\Main\ErrorHandler($pdo, $debugbar);
    set_error_handler([$errorLog, 'saveLog']);
    set_exception_handler([$errorLog, 'exceptionHandler']);


}catch (Throwable $e){
    echo $e->getMessage();
}
//throw new Exception('Test me');