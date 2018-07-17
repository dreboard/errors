<?php
try{
    $filename = __DIR__.'/../../files/one.txt';
    $size = filesize($filename);

    //$f = fopen($filename, 'r');
    //$c = fread($f, 1000);
    //echo $size;

    $file = fopen($filename,"r");
    fseek($file, intdiv($size,2));
    echo ftell($file);
    echo fgets($file, 100). "<br />";


    fclose($file);

    foreach (glob(__DIR__.'/../../logs/php/live/*.log') as $filename) {
        echo basename($filename) ." size " . filesize($filename) . "<br>";
    }

}catch (Throwable $e){
    echo $e->getMessage();
}


