<?php
namespace App\Main;


class Basic
{

    public function testFunc($arg)
    {
        $this->testFunc2($arg);
    }
    public function testFunc2($arg)
    {
        $this->testFunc2($arg);
    }

    public function testFunc3($arg)
    {
        debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT);
    }
}