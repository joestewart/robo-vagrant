<?php

class VagrantTest extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Vagrant\loadTasks;

    public function testVagrantHelpArgCommand()
    {
        $command = $this->taskVagrantStatus('/usr/bin/vagrant')
            ->help()
            ->getCommand();
        $expected = '/usr/bin/vagrant status --help';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantDestroyCommand()
    {
        $command = $this->taskVagrantDestroy('/usr/bin/vagrant')
            ->force()
            ->getCommand();
        $expected = '/usr/bin/vagrant destroy --force';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantSshCommand()
    {
        $command = $this->taskVagrantSsh('/usr/bin/vagrant')
            ->plain()
            ->command('ls -l')
            ->getCommand();
        $expected = '/usr/bin/vagrant ssh --plain --command "ls -l"';
        $this->assertEquals($expected, $command);
    }
}