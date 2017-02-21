<?php

use League\Container\ContainerAwareInterface;
use League\Container\ContainerAwareTrait;
use Symfony\Component\Console\Output\NullOutput;
use Robo\TaskAccessor;
use Robo\Robo;

class VagrantTestResume extends \PHPUnit_Framework_TestCase implements ContainerAwareInterface
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

    public function testVagrantResumeCommand()
    {
        $command = $this->taskVagrantResume('/usr/bin/vagrant')
            ->arg('name')
            ->getCommand();
        $expected = '/usr/bin/vagrant resume name';
        $this->assertEquals($expected, $command);
    }
}
