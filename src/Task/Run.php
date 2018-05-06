<?php

namespace Droath\RoboDockerCompose\Task;

/**
 * Docker compose execute command.
 */
class Run extends Execute
{
    /**
     * {@inheritdoc}
     */
    protected $action = 'run';

    /**
     * Set the workdir.
     *
     * @param $workdir
     *   The directory which to run the command under.
     *
     * @return $this
     */
    public function setWorkDir($workdir) {
        $this->option('workdir', $workdir, '=');

        return $this;
    }

}
