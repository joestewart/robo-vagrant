<?php

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
     * Vagrant Global Status task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/GlobalStatus.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantGlobalStatus()
    {
        $result = $this->taskVagrantGlobalStatus()->run();
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
    public function vagrantHalt($arg = '')
    {
        $result = $this->taskVagrantHalt()->arg($arg)->run();
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
    public function vagrantHelp($arg = '')
    {
        $result = $this->taskVagrantHelp()->arg($arg)->run();
        return $result;
    }

    /**
     * Vagrant Init task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Init.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantInit()
    {
        $result = $this->taskVagrantInit()->run();
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
     * Vagrant Plugin task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Plugin.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantPlugin($arg = '')
    {
        $result = $this->taskVagrantPlugin()->arg($arg)->run();
        return $result;
    }

    /**
     * Vagrant Port task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Port.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantPort()
    {
        $result = $this->taskVagrantPort()->run();
        return $result;
    }

    /**
     * Vagrant provision task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Provision.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantProvision()
    {
        $result = $this->taskVagrantProvision()->run();
        return $result;
    }

    /**
     * Vagrant ssh task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Reload.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantReload()
    {
        $result = $this->taskVagrantReload()->run();
        return $result;
    }

    /**
     * Vagrant resume task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Resume.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantResume($arg = '')
    {
        $result = $this->taskVagrantResume()->arg($arg)->run();
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
     * Vagrant Suspend task.
     *
     * @see  https://github.com/joestewart/robo-vagrant/blob/master/src/Task/Vagrant/Suspend.php
     * @link https://packagist.org/packages/joestewart/robo-vagrant
     *
     * @return object Result
     */
    public function vagrantSuspend($arg = '')
    {
        $result = $this->taskVagrantSuspend()->arg($arg)->run();
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
