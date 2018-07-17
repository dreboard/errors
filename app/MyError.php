<?php
//namespace App\Main;

class MyError {
	
	
	function error_handler($errno, $errstr, $errfile, $errline)
	{
		if(error_get_last())
		{
			$error = error_get_last();
			echo 'Sorry, a serious error has occured in ' . $error['file'];
			error_log(error_get_last()['message']);
		}
		//throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
		error_log(__FUNCTION__." $errstr in $errfile:$errline");
		header('Location: 500.html');
		echo 'Sorry, a serious error has occured in ' . $errfile;
		exit;
	}	
	
	
	function shutdownHandler()   //will be called when php script ends.
	{
	   global $handlerType;
	   logError(" -------------- Inside shutdownHandler: ".$handlerType." -----------------------", "info"); 
	   $lasterror = error_get_last();
	   if ( $lasterror ===  null )
			logError('[SHUTDOWNHANDLER]:: No errors found in PHP Page',"info");
	   else
		 {
			   // logError('[SHUTDOWNHANDLER]:: Found errors found in PHP Page: - Error Type::  '.$lasterror['type'] ,"info");       
		  switch ($lasterror['type'])
		   {
				case E_ERROR:
				  case E_CORE_ERROR:
				  case E_COMPILE_ERROR:
				  case E_USER_ERROR:
				  case E_RECOVERABLE_ERROR:
				  case E_CORE_WARNING:
				  case E_COMPILE_WARNING:
				  case E_PARSE:    
					{   
					$error = "[SHUTDOWNHANDLER] lvl:" . $lasterror['type'] . " | msg:" . $lasterror['message'] . " | file:" . $lasterror['file'] . " | ln:" . $lasterror['line'];
						  //  echo '<p><b>'.$error.'</b></p>';
					logError($error, "fatal");
					break;
					}
				  default:
					{
					$error = "[SHUTDOWNHANDLER: Unknown Type ] LVL:" . $lasterror['type'] . " | msg:" . $lasterror['message'] . " | file:" . $lasterror['file'] . " | ln:" . $lasterror['line'];
					  logError($error, "fatal"); 
					  }
			  }
		}
	}	
		
	
	
	
}