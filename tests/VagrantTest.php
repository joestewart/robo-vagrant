<?php

class DrushStackTest extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Vagrant\loadTasks;

    public function testVagrantDestroyCommand()
    {
        $command = $this->taskVagrantDestroy('/usr/bin/vagrant')
            ->force()
            ->getCommand();
        $expected = '/usr/bin/vagrant destroy --force';
        $this->assertEquals($expected, $command);
    }

}