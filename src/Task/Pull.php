<?php

namespace Droath\RoboDockerCompose\Task;

use Droath\RoboDockerCompose\DockerServicesTrait;

/**
 * Define Docker compose pull command.
 */
class Pull extends Base
{
    use DockerServicesTrait;

    /**
     * {@inheritdoc}
     */
    protected $action = 'pull';

    /**
     * Pull what it can and ignores images with pull failures.
     *
     * @return $this
     */
    public function ignoreFailures()
    {
        $this->option('ignore-pull-failures');

        return $this;
    }

    /**
     * Pull multiple images in parallel.
     *
     * @return $this
     */
    public function parallel()
    {
        $this->option('parallel');

        return $this;
    }

    /**
     * Pull without printing progress information.
     *
     * @return $this
     */
    public function quiet()
    {
        $this->option('quiet');

        return $this;
    }

    /**
     * Also pull services declared as dependencies.
     *
     * @return $this
     */
    public function includeDeps()
    {
        $this->option('include-deps');

        return $this;
    }
}
