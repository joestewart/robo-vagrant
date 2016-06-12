<?php
namespace JoeStewart\Robo\Task\Vagrant;

use Robo\Task\BaseTask;
use Robo\Exception\TaskException;

abstract class Base extends BaseTask
{
    use \Robo\Common\ExecOneCommand;

    protected $opts = [];
    protected $action = '';

    public function __construct($pathToVagrant = null)
    {
        if ($pathToVagrant) {
            $this->command = $pathToVagrant;
        } elseif (is_executable('/usr/bin/vagrant')) {
            $this->command = '/usr/bin/vagrant';
        } elseif (is_executable('/usr/local/bin/vagrant')) {
            $this->command = '/usr/local/bin/vagrant';
        } else {
            throw new TaskException(__CLASS__, "Executable not found.");
        }
    }

    /**
     * adds `help` option to vagrant
     *
     * @return $this
     */
    public function help()
    {
        $this->option('--help');

        return $this;
    }

    public function getCommand()
    {
        return "{$this->command} {$this->action}{$this->arguments}";
    }
}
