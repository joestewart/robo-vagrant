<?php
namespace JoeStewart\Robo\Task\Vagrant;

/**
 * Vagrant Provision
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskVagrantProvision()->run();
 *
 * // with custom path
 * $this->taskVagrantProvision('path/to/my/vagrant')
 *      ->run();
 * ?>
 * ```
 */
class Provision extends Base
{
    protected $action = 'provision';

    public function run()
    {
        $this->printTaskInfo('vagrant provision' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}