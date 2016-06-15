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

    /**
     * adds `no-provision` option to vagrant up
     *
     * @return $this
     */
    public function noProvision()
    {
        $this->option('--no-provision');

        return $this;
    }

    /**
     * adds `provision` option to vagrant up
     *
     * @return $this
     */
    public function provision()
    {
        $this->option('--provision');

        return $this;
    }

    public function run()
    {
        $this->printTaskInfo('Vagrant up: ' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
