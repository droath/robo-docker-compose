<?php

namespace Droath\RoboDockerCompose\Task;

use Robo\Exception\TaskException;

/**
 * Define docker compose down command.
 */
class Down extends Base
{
    /**
     * {@inheritdoc}
     */
    protected $action = 'down';

    /**
     * Remove images.
     *
     * @param string $type The image type to remove.
     *   The following types are allowed:
     *     - all
     *       Remove all images used by any service
     *     - local
     *       Remove only images that don't have a custom tag.
     */
    public function rmi($type)
    {
        $allowed = ['all', 'local'];

        if (!in_array($type, $allowed)) {
            throw new TaskException(
                __CLASS__,
                'Invalid type given to --rmi option.'
            );
        }

        $this->option('rmi', $type);

        return $this;
    }

    /**
     * Remove named volumes declared in the volumes section of the Compose file
     * and anonymous volumes.
     */
    public function volumes()
    {
        $this->option('volumes');

        return $this;
    }

    /**
     * Remove containers for services not defined in the Compose file.
     */
    public function removeOrphans()
    {
        $this->option('remove-orphans');

        return $this;
    }
}
