<?php
/**
 * Created by PhpStorm.
 * User: drebo
 * Date: 5/17/2018
 * Time: 7:41 PM
 */

namespace App\Tests;

use Exception;
use App\Main\MainClass;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testMainNewObject()
    {
        $this->expectException(\TypeError::class);
        $main = new MainClass('String');
    }
}