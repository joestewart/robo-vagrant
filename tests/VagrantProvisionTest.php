<?php

use League\Container\ContainerAwareInterface;
use League\Container\ContainerAwareTrait;
use Symfony\Component\Console\Output\NullOutput;
use Robo\TaskAccessor;
use Robo\Robo;

class VagrantTestProvision extends \PHPUnit_Framework_TestCase implements ContainerAwareInterface
{
    use \JoeStewart\Robo\Task\Vagrant\loadTasks;
    use TaskAccessor;
    use ContainerAwareTrait;

    // Set up the Robo container so that we can create tasks in our tests.
    function setup()
    {
        $container = Robo::createDefaultContainer(null, new NullOutput());
        $this->setContainer($container);
    }

    // Scaffold the collection builder
    public function collectionBuilder()
    {
        $emptyRobofile = new \Robo\Tasks;
        return $this->getContainer()->get('collectionBuilder', [$emptyRobofile]);
    }

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
