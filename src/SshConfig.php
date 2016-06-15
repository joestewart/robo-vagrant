<?php
namespace JoeStewart\Robo\Task\Vagrant;

/**
 * Vagrant SshConfig
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskVagrantSshConfig()->run();
 *
 * // with custom path
 * $this->taskVagrantSshConfig('path/to/my/vagrant')
 *      ->run();
 * ?>
 * ```
 */
class SshConfig extends Base
{
    protected $action = 'ssh-config';

    public function run()
    {
        $this->printTaskInfo('vagrant ssh-config' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
