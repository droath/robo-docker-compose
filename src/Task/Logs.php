<?php

namespace Droath\RoboDockerCompose\Task;

use Droath\RoboDockerCompose\DockerServicesTrait;
use Robo\Exception\TaskException;

/**
 * Define the docker compose logs task.
 */
class Logs extends Base
{
    use DockerServicesTrait;

    /**
     * {@inheritdoc}
     */
    protected $action = 'logs';

    /**
     * Produce monochrome output.
     *
     * @return $this
     */
    public function noColor()
    {
        $this->option('no-color');

        return $this;
    }

    /**
     * Follow log output.
     *
     * @return $this
     */
    public function follow()
    {
        $this->option('follow');

        return $this;
    }

    /**
     * Show timestamps.
     *
     * @return $this
     */
    public  function timestamps()
    {
        $this->option('timestamps');

        return $this;
    }

    /**
     * Number of lines to show from the end of the logs for
     * each container.
     *
     * @param string $value
     *
     * @return $this
     * @throws TaskException
     */
    public function tail($value = 'all')
    {
        if ($value !== 'all' && !is_numeric($value)) {
            throw new TaskException(
                __CLASS__,
                'Provided argument value is invalid.'
            );
        }
        $this->option('tail', $value);

        return $this;
    }
}
