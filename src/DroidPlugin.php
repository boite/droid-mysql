<?php

namespace Droid\Plugin\Mysql;

class DroidPlugin
{
    public function __construct($droid)
    {
        $this->droid = $droid;
    }
    
    public function getCommands()
    {
        $commands = [];
        $commands[] = new \Droid\Plugin\Mysql\Command\MysqlDumpCommand();
        $commands[] = new \Droid\Plugin\Mysql\Command\MysqlDumpAllCommand();
        $commands[] = new \Droid\Plugin\Mysql\Command\MysqlLoadCommand();
        return $commands;
    }
}
