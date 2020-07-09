<?php

namespace Droath\RoboDockerCompose\Task;

use Droath\RoboDockerCompose\DockerServicesTrait;

/**
 * Define docker compose stop command.
 */
class Stop extends Base
{
    use DockerServicesTrait;

    /**
     * {@inheritdoc}
     */
    protected $action = 'stop';
}
