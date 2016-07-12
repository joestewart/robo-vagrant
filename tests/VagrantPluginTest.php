<?php

class VagrantTestPlugin extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Vagrant\loadTasks;

    public function testVagrantPluginInstallCommand()
    {
        $command = $this->taskVagrantPlugin('/usr/bin/vagrant')
            ->install()
            ->arg('name')
            ->getCommand();
        $expected = '/usr/bin/vagrant plugin install name';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantPluginLicenseCommand()
    {
        $command = $this->taskVagrantPlugin('/usr/bin/vagrant')
            ->license()
            ->getCommand();
        $expected = '/usr/bin/vagrant plugin license';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantPluginListCommand()
    {
        $command = $this->taskVagrantPlugin('/usr/bin/vagrant')
            ->list()
            ->getCommand();
        $expected = '/usr/bin/vagrant plugin list';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantPluginUninstallCommand()
    {
        $command = $this->taskVagrantPlugin('/usr/bin/vagrant')
            ->uninstall()
            ->arg('name')
            ->getCommand();
        $expected = '/usr/bin/vagrant plugin uninstall name';
        $this->assertEquals($expected, $command);
    }

    public function testVagrantPluginUpdateCommand()
    {
        $command = $this->taskVagrantPlugin('/usr/bin/vagrant')
            ->update()
            ->arg('name')
            ->getCommand();
        $expected = '/usr/bin/vagrant plugin update name';
        $this->assertEquals($expected, $command);
    }
}
