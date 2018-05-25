<?php

namespace Droath\RoboDockerCompose\Task;

use Droath\RoboDockerCompose\ExecutableArguments;
use Robo\Common\ExecOneCommand;
use Robo\Contract\CommandInterface;
use Robo\Exception\TaskException;
use Robo\Task\BaseTask;

/**
 * Docker compose base class.
 */
abstract class Base extends BaseTask implements CommandInterface
{
    use ExecOneCommand;
    use ExecutableArguments;

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
        $this->executable = isset($pathToDockerCompose)
            ? $pathToDockerCompose
            : $this->findExecutablePhar('docker-compose');

        if (!$this->executable) {
            throw new TaskException(
                __CLASS__,
                'Unable to find the docker-compose executable.'
            );
        }
    }

    /**
     * Specify an alternate compose file.
     *
     * @param string $filename
     *   An alternative docker composer file
     */
    public function file($filename)
    {
        if (!file_exists($filename)) {
            throw new \InvalidArgumentException(
                sprintf("File %s wasn't found on the filesystem", $filename)
            );
        }

        $this->execOption('file', $filename);

        return $this;
    }

    /**
     * Specify multiple composer files.
     *
     * @param array $files
     *   An array of alternative composer files.
     */
    public function files(array $files)
    {
        foreach ($files as $filename) {
            $this->file($filename);
        }

        return $this;
    }

    /**
     * Specify an alternate project name.
     *
     * @param string
     *   An alternative docker compose project name.
     */
    public function projectName($name)
    {
        $this->execOption('project-name', $name);

        return $this;
    }
    
    
    /**
     * Specify an alternate project directory.
     *
     * @param string
     *   A directory path for the base of the project.
     */
    public function projectDirectory($dir)
    {
        $this->execOption('project-directory', $dir);

        return $this;
    }

    /**
     * Daemon socket to connect to.
     *
     * @param string $hostname
     *   The name of the host to connect to.
     */
    public function host($hostname)
    {
        $this->execOption('host', $hostname);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $command = $this->getCommand();
        $this->printTaskInfo(
            'Running Docker-Compose: {command}',
            ['command' => $command]
        );

        return $this->executeCommand($command);
    }

    /**
     * Get docker-compose command.
     *
     * @return string
     */
    public function getCommand()
    {
        return "{$this->executable} {$this->executableArgs} {$this->action} {$this->arguments}";
    }
}
