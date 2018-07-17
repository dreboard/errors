<?php
/**
 * Created by PhpStorm.
 * User: drebo
 * Date: 5/15/2018
 * Time: 11:34 PM
 */

namespace App\Main;


class MainException extends \Exception
{

    protected $code = 600;

    public function __construct($message = null, $code = 0)
    {
        if (!$message) {
            throw new $this('Unknown '. get_class($this));
        }
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return get_class($this) . " '{$this->message}' in {$this->file}({$this->line})\n"
            . "{$this->getTraceAsString()}";
    }

    public function customFunction() {
        echo "A custom function for this type of exception\n";
    }
}