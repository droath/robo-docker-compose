<?php

namespace Droath\RoboDockerCompose\Task;

use Droath\RoboDockerCompose\DockerCommandTrait;

/**
 * Docker compose execute command.
 */
class Execute extends Base
{
    use DockerCommandTrait;

    /**
     * {@inheritdoc}
     */
    protected $action = 'exec';

    /**
     * Set execute command.
     *
     * @param string|CommandInterface $command
     *   The command to execute.
     *
     * @return $this
     */
    public function exec($command)
    {
        $this->setCommand($command);

        return $this;
    }

    /**
     * Run command in the background.
     *
     * @return $this
     */
    public function detachedMode()
    {
        $this->arg('-d');

        return $this;
    }

    /**
     * Give extended privileges to the process.
     *
     * @return $this
     */
    public function privileged()
    {
        $this->option('privileged');

        return $this;
    }

    /**
     * Run the command as this user.
     *
     * @param $user
     *   The user on which to run the command under.
     *
     * @return $this
     */
    public function user($user)
    {
        $this->option('user', $user);

        return $this;
    }

    /**
     * Disable pseudo-tty allocation.
     *
     * @return $this
     */
    public function disablePseudoTty()
    {
        $this->arg('-T');

        return $this;
    }

    /**
     * Index of the container.
     *
     * @param $index
     *   The container index.
     *
     * @return $this
     */
    public function index($index)
    {
        $this->option('index', $index);

        return $this;
    }

    /**
     * Set environment variables
     *
     * @param $key
     *   The environment key.
     * @param $value
     *   The environment value.
     *
     * @return $this
     */
    public function envVariable($key, $value)
    {
        $this->option('env', "{$key}={$value}");

        return $this;
    }
}
