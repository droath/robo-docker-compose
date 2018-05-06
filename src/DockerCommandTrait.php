<?php

namespace Droath\RoboDockerCompose;

use Robo\Contract\CommandInterface;

/**
 * Define the docker command trait.
 */
trait DockerCommandTrait
{
    /**
     * Execute command.
     *
     * @var string
     */
    protected $command;

    /**
     * Execute container.
     *
     * @var string.
     */
    protected $container;

    /**
     * Set docker container.
     *
     * @param $container
     *   The container name.
     *
     * @return $this
     */
    public function setContainer($container)
    {
        $this->container = $container;

        return $this;
    }

    /**
     * Set docker command.
     *
     * @param string|CommandInterface $command
     *   The command to execute.
     *
     * @return $this
     */
    public function setCommand($command)
    {
        if ($command instanceof CommandInterface) {
            $command = $command->getCommand();
        }
        $this->command = $command;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCommand()
    {
        return parent::getCommand() . " {$this->container} {$this->command}";
    }
}
