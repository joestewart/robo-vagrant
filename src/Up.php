<?php
namespace JoeStewart\Robo\Task\Vagrant;

/**
 * Vagrant Up
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskVagrantUp()->run();
 *
 * // with custom path
 * $this->taskVagrantUp('path/to/my/vagrant')
 *      ->run();
 * ?>
 * ```
 */
class Up extends Base
{
    protected $action = 'up';

    public function run()
    {
        $this->printTaskInfo('Vagrant up: ' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}