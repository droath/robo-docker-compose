<?php

namespace Droath\RoboDockerCompose\Task;

/**
 * Load docker compose tasks.
 */
trait loadTasks
{
    /**
     * Docker compose up task.
     */
    protected function taskDockerComposeUp($pathToDockerCompose = null)
    {
        return $this->task(Up::class, $pathToDockerCompose);
    }

    /**
     * Docker compose up task.
     */
    protected function taskDockerComposeDown($pathToDockerCompose = null)
    {
        return $this->task(Down::class, $pathToDockerCompose);
    }
}
