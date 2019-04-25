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

public function debug($message);
public function info($message);
public function notice($message);
public function warning($message);
public function error($message);
public function critical($message);
public function alert($message);
public function emergency($message);
}