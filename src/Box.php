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

    public function run()
    {
        $this->printTaskInfo('vagrant box' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
