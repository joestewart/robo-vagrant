<?php

class VagrantTestProvision extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Vagrant\loadTasks;

    public function testVagrantProvisionCommand()
    {
        $command = $this->taskVagrantProvision('/usr/bin/vagrant')
            ->arg('name')
            ->provisionWith('x,y,z')
            ->getCommand();
        $expected = '/usr/bin/vagrant provision name --provision-with x,y,z';
        $this->assertEquals($expected, $command);
    }
}
