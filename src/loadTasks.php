<?php
namespace JoeStewart\Robo\Task\Vagrant;

use Robo\Container\SimpleServiceProvider;

trait loadTasks 
{

    /**
     * Return services.
     */
    public static function getVagrantServices()
    {
        return new SimpleServiceProvider(
            [
                'taskVagrantBox' => Box::class,
                'taskVagrantDestroy' => Destroy::class,
                'taskVagrantGlobalStatus' => GlobalStatus::class,
                'taskVagrantHalt' => Halt::class,
                'taskVagrantHelp' => Help::class,
                'taskVagrantInit' => Init::class,
                'taskVagrantPlugin' => Plugin::class,
                'taskVagrantProvision' => Provision::class,
                'taskVagrantSsh' => Ssh::class,
                'taskVagrantSshConfig' => SshConfig::class,
                'taskVagrantStatus' => Status::class,
                'taskVagrantUp' => Up::class,
                'taskVagrantVersion' => Version::class,
            ]
        );
    }

    /**
     * @param null $pathToVagrant
     * @return Box
     */
    protected function taskVagrantBox($pathToVagrant = null) {
        return new Box($pathToVagrant);
    }

    /**
     * @param null $pathToVagrant
     * @return Destroy
     */
    protected function taskVagrantDestroy($pathToVagrant = null) {
        return new Destroy($pathToVagrant);
    }

    /**
     * @param null $pathToVagrant
     * @return Status
     */
    protected function taskVagrantGlobalStatus($pathToVagrant = null) {
        return new GlobalStatus($pathToVagrant);
    }

    /**
     * @param null $pathToVagrant
     * @return Help
     */
    protected function taskVagrantHalt($pathToVagrant = null) {
        return new Halt($pathToVagrant);
    }

    /**
     * @param null $pathToVagrant
     * @return Help
     */
    protected function taskVagrantHelp($pathToVagrant = null) {
        return new Help($pathToVagrant);
    }

    /**
     * @param null $pathToVagrant
     * @return Init
     */
    protected function taskVagrantInit($pathToVagrant = null) {
        return new Init($pathToVagrant);
    }

    /**
     * @param null $pathToVagrant
     * @return ListCommands
     */
    protected function taskVagrantListCommands($pathToVagrant = null) {
        return new ListCommands($pathToVagrant);
    }

    /**
     * @param null $pathToVagrant
     * @return Plugin
     */
    protected function taskVagrantPlugin($pathToVagrant = null) {
        return new Plugin($pathToVagrant);
    }

    /**
     * @param null $pathToVagrant
     * @return Provision
     */
    protected function taskVagrantProvision($pathToVagrant = null) {
        return new Provision($pathToVagrant);
    }

    /**
     * @param null $pathToVagrant
     * @return Ssh
     */
    protected function taskVagrantSsh($pathToVagrant = null) {
        return new Ssh($pathToVagrant);
    }

    /**
     * @param null $pathToVagrant
     * @return Ssh
     */
    protected function taskVagrantSshConfig($pathToVagrant = null) {
        return new SshConfig($pathToVagrant);
    }

    /**
     * @param null $pathToVagrant
     * @return Status
     */
    protected function taskVagrantStatus($pathToVagrant = null) {
        return new Status($pathToVagrant);
    }

    /**
     * @param null $pathToVagrant
     * @return Status
     */
    protected function taskVagrantUp($pathToVagrant = null) {
        return new Up($pathToVagrant);
    }

    /**
     * @param null $pathToVagrant
     * @return Status
     */
    protected function taskVagrantVersion($pathToVagrant = null) {
        return new Version($pathToVagrant);
    }

} 