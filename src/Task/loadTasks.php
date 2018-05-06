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
     * Docker compose ps task.
     */
    protected function taskDockerComposePs($pathToDockerCompose = null)
    {
        return $this->task(Ps::class, $pathToDockerCompose);
    }

    /**
     * Docker compose logs task.
     */
    protected function taskDockerComposeLogs($pathToDockerCompose = null)
    {
        return $this->task(Logs::class, $pathToDockerCompose);
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
     * Docker compose pull task.
     */
    protected function taskDockerComposePull($pathToDockerCompose = null)
    {
        return $this->task(Pull::class, $pathToDockerCompose);
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

    /**
     * Docker compose run task.
     */
    protected function taskDockerComposeRun($pathToDockerCompose = null)
    {
        return $this->task(Run::class, $pathToDockerCompose);
    }

    /**
     * Docker compose build task.
     */
    protected function taskDockerComposeBuild($pathToDockerCompose = null)
    {
        return $this->task(Build::class, $pathToDockerCompose);
    }
}
