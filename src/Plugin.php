<?php
namespace JoeStewart\Robo\Task\Vagrant;

/**
 * Vagrant Plugin
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskVagrantPlugin()->run();
 *
 * // with custom path
 * $this->taskVagrantPlugin('path/to/my/vagrant')
 *      ->run();
 * ?>
 * ```
 */
class Plugin extends Base
{
    protected $action = 'plugin';

    public function run()
    {
        $this->printTaskInfo('vagrant plugin' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
