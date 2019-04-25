<?php
/**
 * Created by PhpStorm.
 * User: MashaZ
 * Date: 25.04.2019
 * Time: 12:52
 */

namespace ntschool;


interface NotifierAdapterInterface
{
public function debug();
public function info();
public function notice();
public function warning();
public function error();
public function critical();
public function alert();
public function emergency();
}