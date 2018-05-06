<?php

namespace Droath\RoboDockerCompose\Task;

use Droath\RoboDockerCompose\DockerServicesTrait;

/**
 * Define the docker composer ps command.
 */
class Ps extends Base
{
    use DockerServicesTrait;

    /**
     * {@inheritdoc}
     */
    protected $action = 'ps';

    /**
     * Only display IDs.
     *
     * @return $this
     */
    public function quiet()
    {
        $this->option('quiet');

        return $this;
    }

    /**
     * Display services.
     *
     * @return $this
     */
    public function services()
    {
        $this->option('services');

        return $this;
    }

    /**
     * Filter services by a property.
     *
     * @param string $key
     *   The filter property key.
     * @param string $value
     *   The filter property value.
     *
     * @return $this
     */
    public function filter($key, $value)
    {
        $this->option('filter', "{$key}={$value}");

        return $this;
    }
}
