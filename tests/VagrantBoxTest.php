<?php

class VagrantTestBox extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Vagrant\loadTasks;

    public function testVagrantBoxAddCommand()
    {
        $command = $this->taskVagrantBox('/usr/bin/vagrant')
            ->add()
            ->arg('name')
            ->getCommand();
        $expected = '/usr/bin/vagrant box add name';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantBoxListCommand()
    {
        $command = $this->taskVagrantBox('/usr/bin/vagrant')
            ->listBoxes()
            ->boxInfo()
            ->getCommand();
        $expected = '/usr/bin/vagrant box list --box-info';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantBoxOutdatedCommand()
    {
        $command = $this->taskVagrantBox('/usr/bin/vagrant')
            ->outdated()
            ->getCommand();
        $expected = '/usr/bin/vagrant box outdated';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantBoxRemoveCommand()
    {
        $command = $this->taskVagrantBox('/usr/bin/vagrant')
            ->remove()
            ->arg('name')
            ->getCommand();
        $expected = '/usr/bin/vagrant box remove name';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantBoxRepackageCommand()
    {
        $command = $this->taskVagrantBox('/usr/bin/vagrant')
            ->repackage()
            ->arg('name')
            ->arg('provider')
            ->arg('version')
            ->getCommand();
        $expected = '/usr/bin/vagrant box repackage name provider version';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantBoxUpdateCommand()
    {
        $command = $this->taskVagrantBox('/usr/bin/vagrant')
            ->update()
            ->getCommand();
        $expected = '/usr/bin/vagrant box update';
        $this->assertEquals($expected, $command);
    }
}