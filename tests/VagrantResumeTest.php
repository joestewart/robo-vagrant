<?php

class VagrantTestResume extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Vagrant\loadTasks;

    public function testVagrantResumeCommand()
    {
        $command = $this->taskVagrantResume('/usr/bin/vagrant')
            ->arg('name')
            ->getCommand();
        $expected = '/usr/bin/vagrant resume name';
        $this->assertEquals($expected, $command);
    }
}
