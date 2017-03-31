<?php

namespace Droath\RoboDockerCompose\Task;

use Droath\RoboDockerCompose\DockerServicesTrait;

/**
 * Define docker compose pause command.
 */
class Pause extends Base
{
    use DockerServicesTrait;

    /**
     * {@inheritdoc}
     */
    protected $action = 'pause';
}
