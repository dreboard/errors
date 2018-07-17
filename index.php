<?php
require_once __DIR__.'/config/const.php';
require_once __DIR__.'/config/ini.php';
require_once __DIR__.'/settings.php';
require_once __DIR__.'/vendor/autoload.php';



try{
    //throw new Error('Error inside try');
    //require_once __DIR__.'/file.php';
    
} catch (Throwable $e){
    echo 'Error: '. $e->getMessage(),'<br />';
}
//throw new Error('Error outside try');
//trigger_error('User error', E_USER_ERROR);
var_dump(extension_loaded('xdebug'));
var_dump(error_get_last());
echo 'This still works';





//end
