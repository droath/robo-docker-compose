<?php

namespace Droath\RoboDockerCompose\Task;

use Droath\RoboDockerCompose\DockerServicesTrait;
use Robo\Exception\TaskException;

/**
 * Define docker compose up command.
 */
class Up extends Base
{
    use DockerServicesTrait;

    /**
     * {@inheritdoc}
     */
    protected $action = 'up';

    /**
     * Command detached mode.
     *
     * @var bool
     */
    protected $detachedMode = false;

    /**
     * Run containers in the background.
     */
    public function detachedMode()
    {
        $this
            ->arg('-d')
            ->setDetachedMode();

        return $this;
    }

    /**
     * Produce monochrome output.
     */
    public function noColor()
    {
        $this->option('no-color');

        return $this;
    }

    /**
     * Don't start linked services.
     */
    public function noDeps()
    {
        $this->option('no-deps');

        return $this;
    }

    /**
     * Recreate containers even if their configuration and image haven't
     * changed.
     */
    public function forceRecreate()
    {
        $this->option('force-recreate');

        return $this;
    }

    /**
     * Don't build an image, even if it's missing.
     */
    public function noBuild()
    {
        $this->option('no-build');

        return $this;
    }

    /**
     * Stops all containers if any container was stopped.
     */
    public function abortOnContainerExit()
    {
        if ($this->detachedMode) {
            throw new TaskException(
                __CLASS__,
                'Abort on container exit is not supported in detached mode.'
            );
        }

        $this->option('abort-on-container-exit');

        return $this;
    }

    /**
     * Timeout in seconds for container shutdown when attached or when
     * containers are already running.
     */
    public function timeout($timeout = 10)
    {
        $this->option('timeout', $timeout);

        return $this;
    }

    /**
     * Remove containers for services not defined in the Compose file.
     */
    public function removeOrphans()
    {
        $this->option('remove-orphans');

        return $this;
    }

    /**
     * Set command detached mode.
     */
    protected function setDetachedMode()
    {
        $this->detachedMode = true;

        return $this;
    }
}
