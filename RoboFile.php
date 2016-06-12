<?php

# require_once 'vendor/autoload.php';

class RoboFile extends \Robo\Tasks
{

    use \JoeStewart\Robo\Task\Vagrant\loadTasks;

    public function test()
    {
        $this->stopOnFail(true);
        $this->taskPHPUnit()
            ->option('disallow-test-output')
            ->option('report-useless-tests')
            ->option('strict-coverage')
            ->option('-v')
            ->option('-d error_reporting=-1')
            ->arg('tests')
            ->run();
    }

    /**
     * Vagrant Status task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Status.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantBox($arg = '')
    {
        $result = $this->taskVagrantBox()->arg($arg)->run();
        return $result;
    }

    /**
     * Vagrant Destroy task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Status.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantDestroy($arg = '')
    {
        $result = $this->taskVagrantDestroy()->force()->run();
        return $result;
    }

    /**
     * Vagrant Help task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Status.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantHelp()
    {
        $result = $this->taskVagrantHelp()->run();
        return $result;
    }

    /**
     * Vagrant List Commands task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/ListCommands.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantListCommands($arg = '')
    {
        $result = $this->taskVagrantListCommands()->arg($arg)->run();
        return $result;
    }

    /**
     * Vagrant ssh task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Ssh.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantSsh()
    {
        $result = $this->taskVagrantSsh()->run();
        return $result;
    }

    /**
     * Vagrant ssh-config task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Ssh.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantSshConfig()
    {
        $result = $this->taskVagrantSshConfig()->run();
        return $result;
    }

    /**
     * Vagrant Status task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Status.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantStatus()
    {
        $result = $this->taskVagrantStatus()->run();
        return $result;
    }

    /**
     * Vagrant Up task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Up.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantUp($arg = '')
    {
        $result = $this->taskVagrantUp()->arg($arg)->run();
        return $result;
    }

    /**
     * Vagrant Status task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Version.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantVersion()
    {
        $result = $this->taskVagrantVersion()->run();
        return $result;
    }
}