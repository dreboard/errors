<?php
require_once __DIR__.'/settings.php';

class ExecutionTime
{
     private $startTime;
     private $endTime;
 
 
     public function start(){
         $this->startTime = microtime(true);
     }
     public function end(){
         $this->endTime =  microtime(true);
     }
     public function diff(){
         return $this->endTime - $this->startTime;
     }
 }
  
// Usage
$mark = new ExecutionTime();
$mark->start(); 
 
 
// hack, code something
 
 
$mark->end(); 
logger.debug("Controller ‘home’ loaded in " . $mark->diff() . "ms";




//end
