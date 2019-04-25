<?php
/**
 * Created by PhpStorm.
 * User: MashaZ
 * Date: 25.04.2019
 * Time: 13:33
 */

namespace ntschool;


class MonologNotifierAdapter implements NotifierAdapterInterface
{
    protected $logger;

    public function debug($message)
    {
        $this->logger->debug($message);
    }

    public function info($message)
    {
        $this->logger->info($message);
    }

    public function notice($message)
    {
        $this->logger->notice($message);
    }

    public function warning($message)
    {
        $this->logger->warning($message);
    }

    public function error($message)
    {
        $this->logger->error($message);
    }

    public function critical($message)
    {
        $this->logger->critical($message);
    }

    public function alert($message)
    {
        $this->logger->alert($message);
    }

    public function emergency($message)
    {
        $this->logger->emergency($message);
    }

}