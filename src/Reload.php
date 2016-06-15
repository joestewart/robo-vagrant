<?php
namespace JoeStewart\Robo\Task\Vagrant;

/**
 * Vagrant Reload
 *
 * ```php
 * <?php
 * // simple execution
 * $this->taskVagrantReload()->run();
 *
 * // with custom path
 * $this->taskVagrantReload('path/to/my/vagrant')
 *      ->run();
 * ?>
 * ```
 */
class Reload extends Base
{
    protected $action = 'reload';

    /**
     * adds `no-provision` option to vagrant reload
     *
     * @return $this
     */
    public function noProvision()
    {
        $this->option('--no-provision');

        return $this;
    }

    /**
     * adds `provision` option to vagrant reload
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
        $this->printTaskInfo('Vagrant reload: ' . $this->arguments);
        return $this->executeCommand($this->getCommand());
    }
}
