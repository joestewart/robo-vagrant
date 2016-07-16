<?php

class VagrantTestReload extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Vagrant\loadTasks;

    public function testVagrantReloadCommand()
    {
        $command = $this->taskVagrantReload('/usr/bin/vagrant')
            ->arg('name')
            ->provision()
            ->provisionWith('x,y,z')
            ->getCommand();
        $expected = '/usr/bin/vagrant reload name --provision --provision-with x,y,z';
        $this->assertEquals($expected, $command);
    }
}
