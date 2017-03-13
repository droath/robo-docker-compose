<?php

namespace Droath\RoboDockerCompose\Task;

use Robo\Common\ExecOneCommand;
use Robo\Exception\TaskException;
use Robo\Task\BaseTask;

/**
 * Docker compose base class.
 */
abstract class Base extends BaseTask
{
    use ExecOneCommand;

    /**
     * Executable.
     *
     * @var string
     */
    protected $executable;

    /**
     * Executable action.
     *
     * @var string
     */
    protected $action = '';

    /**
     * Docker compose constructor.
     *
     * @param string $pathToDockerCompose
     *   A custom path to the docker-compose executable binary.
     */
    public function __construct($pathToDockerCompose = null)
    {
        $this->executable = $pathToDockerCompose;

        if (!$this->executable) {
            $this->executable = $this->findExecutablePhar('docker-compose');
        }

        if (!$this->executable) {
            throw new TaskException(
                __CLASS__,
                'Unable to find the docker-compose executable.'
            );
        }
    }

    /**
     * Get docker-compose command.
     *
     * @return string
     */
    protected function getCommand()
    {
        return "{$this->executable} {$this->action} {$this->arguments}";
    }
}
