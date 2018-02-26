<?php

namespace Droath\RoboDockerCompose;

/**
 * Define docker services trait.
 */
trait DockerServicesTrait
{
    /**
     * Docker compose services.
     *
     * @var array
     */
    protected $services = [];

    /**
     * Add docker composer service.
     *
     * @param string $service
     *   The docker services.
     */
    public function setService($service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * Add docker composer services.
     *
     * @param array $services
     *   An array of services.
     */
    public function setServices(array $services)
    {
        foreach ($services as $service) {
            $this->setService($service);
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCommand()
    {
        // Append the services to the end of the command.
        return parent::getCommand() . ' ' . implode(' ', $this->services);
    }
}
