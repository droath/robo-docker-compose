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
     * Docker compose down task.
     */
    protected function taskDockerComposeDown($pathToDockerCompose = null)
    {
        return $this->task(Down::class, $pathToDockerCompose);
    }

    /**
     * Docker compose pause task.
     */
    protected function taskDockerComposePause($pathToDockerCompose = null)
    {
        return $this->task(Pause::class, $pathToDockerCompose);
    }

    /**
     * Docker compose start task.
     */
    protected function taskDockerComposeStart($pathToDockerCompose = null)
    {
        return $this->task(Start::class, $pathToDockerCompose);
    }

    /**
     * Docker compose restart task.
     */
    protected function taskDockerComposeRestart($pathToDockerCompose = null)
    {
        return $this->task(Restart::class, $pathToDockerCompose);
    }

    /**
     * Docker compose execute task.
     */
    protected function taskDockerComposeExecute($pathToDockerCompose = null)
    {
        return $this->task(Execute::class, $pathToDockerCompose);
    }

}
