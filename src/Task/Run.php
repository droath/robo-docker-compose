<?php

namespace Droath\RoboDockerCompose\Task;

use Droath\RoboDockerCompose\DockerCommandTrait;

/**
 * Docker compose run command.
 */
class Run extends Base
{
    use DockerCommandTrait;

    /**
     * {@inheritdoc}
     */
    protected $action = 'run';

    /**
     * Run container in the background.
     *
     * @return $this
     */
    public function detach()
    {
        $this->option('detach');

        return $this;
    }

    /**
     * Assign a name to the container.
     *
     * @param $value
     *   The container name.
     *
     * @return $this
     */
    public function name($value)
    {
        $this->option('name', $value);

        return $this;
    }

    /**
     * Override the entrypoint of the image.
     *
     * @param $cmd
     *   The entrypoint command.
     *
     * @return $this
     */
    public function entrypoint($cmd)
    {
        $this->option('entrypoint', $cmd);

        return $this;
    }

    /**
     * Set an environment variable.
     *
     * @param $key
     *   The environment key.
     * @param $value
     *   The environment value.
     *
     * @return $this
     */
    public function envVar($key, $value)
    {
        $this->option('-e', "{$key}={$value}");

        return $this;
    }

    /**
     * Add or override a label.
     *
     * @param $key
     *   The label key.
     * @param $value
     *   The label value.
     *
     * @return $this
     */
    public function label($key, $value)
    {
        $this->option('label', "{$key}={$value}");

        return $this;
    }

    /**
     * Run as specified username or uid.
     *
     * @param $user
     *   The username or uid.
     *
     * @return $this
     */
    public function user($user)
    {
        $this->option('user', $user);

        return $this;
    }

    /**
     * Don't start linked services.
     *
     * @return $this
     */
    public function noDeps()
    {
        $this->option('no-deps');

        return $this;
    }

    /**
     * Remove container after run.
     *
     * @return $this
     */
    public function remove()
    {
        $this->option('rm');

        return $this;
    }

    /**
     * Publish a container's port(s) to the host.
     *
     * @param $host
     *   The host post.
     * @param $container
     *   The container port.
     *
     * @return $this
     */
    public function publish($host, $container)
    {
        $this->option('publish', "{$host}:{$container}");

        return $this;
    }

    /**
     * Run command with the service's ports enabled and mapped
     * to the host.
     *
     * @return $this
     */
    public function servicePorts()
    {
        $this->option('service-ports');

        return $this;
    }

    /**
     * Use the service's network aliases in the network(s) the
     * container connects to.
     *
     * @return $this
     */
    public function useAliases()
    {
        $this->option('use-aliases');

        return $this;
    }

    /**
     * Bind mount a volume.
     *
     * @param $volume
     *   The volume to mount.
     *
     * @return $this
     */
    public function volume($volume)
    {
        $this->option('volume', $volume);

        return $this;
    }

    /**
     * Disable pseudo-tty allocation.
     *
     * @return $this
     */
    public function disablePseudoTty()
    {
        $this->option('-T');

        return $this;
    }

    /**
     * Working directory inside the container.
     *
     * @param $workdir
     *   The directory which to run the command under.
     *
     * @return $this
     */
    public function setWorkDir($workdir)
    {
        $this->option('workdir', $workdir, '=');

        return $this;
    }
}
