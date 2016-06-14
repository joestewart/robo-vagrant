<?php
namespace JoeStewart\Robo\Task\Vagrant;

/**
 * Vagrant Box
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskVagrantBox()->run();
 *
 * // with custom path
 * $this->taskVagrantBox('path/to/my/vagrant')
 *      ->run();
 * ?>
 * ```
 */
class Box extends Base
{
    protected $action = 'box';

    /**
     * adds `box-info` option to vagrant
     *
     * @return $this
     */
    public function box-info()
    {
        $this->option('--box-info');

        return $this;
    }

    public function run()
    {
        $this->printTaskInfo('vagrant box' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}