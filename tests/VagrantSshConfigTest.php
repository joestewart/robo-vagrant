<?php

class VagrantTestSshConfig extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Vagrant\loadTasks;

    public function testVagrantSshConfigCommand()
    {
        $command = $this->taskVagrantSshConfig('/usr/bin/vagrant')
            ->arg('name')
            ->host('NAME')
            ->getCommand();
        $expected = '/usr/bin/vagrant ssh-config name --host NAME';
        $this->assertEquals($expected, $command);
    }
}
