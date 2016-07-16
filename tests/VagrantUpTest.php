<?php

class VagrantTestUp extends \PHPUnit_Framework_TestCase
{
    use \JoeStewart\Robo\Task\Vagrant\loadTasks;

    public function testVagrantUpCommand()
    {
        $command = $this->taskVagrantUp('/usr/bin/vagrant')
            ->arg('name')
            ->provisionWith('x,y,z')
            ->destroyOnError()
            ->parallel()
            ->provider('PROVIDER')
            ->installProvider()
            ->getCommand();
        $expected = '/usr/bin/vagrant up name --provision-with x,y,z --destroy-on-error --parallel --provider PROVIDER --install-provider';
        $this->assertEquals($expected, $command);
    }
}
