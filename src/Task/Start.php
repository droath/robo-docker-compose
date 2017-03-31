<?php

namespace Droath\RoboDockerCompose\Task;

use Droath\RoboDockerCompose\DockerServicesTrait;

/**
 * Define docker compose start command.
 */
class Start extends Base
{
    use DockerServicesTrait;

    /**
     * {@inheritdoc}
     */
    protected $action = 'start';
}
