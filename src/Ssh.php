<?php
namespace JoeStewart\Robo\Task\Vagrant;

/**
 * Vagrant Ssh
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskVagrantSsh()->run();
 *
 * // with custom path
 * $this->taskVagrantSsh('path/to/my/vagrant')
 *      ->run();
 * ?>
 * ```
 */
class Ssh extends Base
{
    protected $action = 'ssh';

    public function run()
    {
        $this->printTaskInfo('vagrant ssh' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}