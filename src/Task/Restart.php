<?php

namespace Droath\RoboDockerCompose\Task;

use Droath\RoboDockerCompose\DockerServicesTrait;

/**
 * Define docker compose restart command.
 */
class Restart extends Base
{
    use DockerServicesTrait;

    /**
     * {@inheritdoc}
     */
    protected $action = 'restart';

    /**
     * Specify a shutdown timeout in seconds.
     *
     * @param int $timeout
     *   The timeout in seconds.
     *
     * @return self
     */
    public function timeout($timeout = 10)
    {
        $this->option('timeout', $timeout);

        return $this;
    }
}
