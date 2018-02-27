<?php

namespace Droath\RoboDockerCompose\Task;

use Droath\RoboDockerCompose\DockerServicesTrait;

/**
 * Define docker compose pause command.
 */
class Build extends Base
{

    use DockerServicesTrait;

    /**
     * {@inheritdoc}
     */
    protected $action = 'build';

    /**
     * Set the build-rm option
     */
    public function buildRm()
    {
        $this->option('build-rm');
    }

    /**
     * Set no-cache option
     */
    public function noCache()
    {
        $this->option('no-cache');
    }

    /**
     * Use the pull option
     */
    public function pull()
    {
        $this->option('pull');
    }

    /**
     * Add a build arg.
     *
     * @param $var
     * @param $variable
     */
    public function buildArg($var, $value)
    {
        $this->option('build-arg', "{$var}={$value}");
    }

    /**
     * {@inheritdoc}
     */
    public function getCommand()
    {
        return "{$this->executable} {$this->executableArgs} {$this->action} {$this->arguments} " . implode(' ', $this->services);
    }
}
