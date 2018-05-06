<?php

namespace Droath\RoboDockerCompose\Task;

use Droath\RoboDockerCompose\DockerServicesTrait;

/**
 * Define docker compose build command.
 */
class Build extends Base
{
    use DockerServicesTrait;

    /**
     * {@inheritdoc}
     */
    protected $action = 'build';

    /**
     * Compress the build context using gzip.
     *
     * @return $this
     */
    public function compress()
    {
        $this->option('compress');

        return $this;
    }

    /**
     * Always remove intermediate containers.
     *
     * @return $this
     */
    public function forceRm()
    {
        $this->option('force-rm');

        return $this;
    }

    /**
     * Do not use cache when building the image.
     *
     * @return $this
     */
    public function noCache()
    {
        $this->option('no-cache');

        return $this;
    }

    /**
     * Always attempt to pull a newer version of the image.
     *
     * @return $this
     */
    public function pull()
    {
        $this->option('pull');

        return $this;
    }

    /**
     * Sets memory limit for the build container.
     *
     * @param $value
     *
     * @return $this
     */
    public function memory($value)
    {
        $this->option('memory', $value);

        return $this;
    }

    /**
     * Set build-time variables for services.
     *
     * @param string $key
     * @param string $value
     *
     * @return $this
     */
    public function buildArg($key, $value)
    {
        $this->option('build-arg', "{$key}={$value}");

        return $this;
    }
}
