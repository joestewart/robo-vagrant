<?php

class VagrantTestSnapshot extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Vagrant\loadTasks;

    public function testVagrantSnapshotDeleteCommand()
    {
        $command = $this->taskVagrantSnapshot('/usr/bin/vagrant')
            ->delete()
            ->arg('name')
            ->getCommand();
        $expected = '/usr/bin/vagrant snapshot delete name';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantSnapshotListCommand()
    {
        $command = $this->taskVagrantSnapshot('/usr/bin/vagrant')
            ->listSnapshots()
            ->getCommand();
        $expected = '/usr/bin/vagrant snapshot list';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantSnapshotPopCommand()
    {
        $command = $this->taskVagrantSnapshot('/usr/bin/vagrant')
            ->pop()
            ->arg('name')
            ->getCommand();
        $expected = '/usr/bin/vagrant snapshot pop name';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantSnapshotPushCommand()
    {
        $command = $this->taskVagrantSnapshot('/usr/bin/vagrant')
            ->push()
            ->arg('name')
            ->getCommand();
        $expected = '/usr/bin/vagrant snapshot push name';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantSnapshotRestoreCommand()
    {
        $command = $this->taskVagrantSnapshot('/usr/bin/vagrant')
            ->restore()
            ->arg('name')
            ->getCommand();
        $expected = '/usr/bin/vagrant snapshot restore name';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantSnapshotSaveCommand()
    {
        $command = $this->taskVagrantSnapshot('/usr/bin/vagrant')
            ->save()
            ->arg('name')
            ->getCommand();
        $expected = '/usr/bin/vagrant snapshot save name';
        $this->assertEquals($expected, $command);
    }
}
