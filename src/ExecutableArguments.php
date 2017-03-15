<?php

namespace Droath\RoboDockerCompose;

use Robo\Common\CommandArguments;

/**
 * Define command executable arguments.
 */
trait ExecutableArguments
{
    /**
     * Executable arguments.
     *
     * @var string
     */
    protected $executableArgs = '';

    /**
     * Add executable options.
     *
     * @param string $option
     *   The executable option name.
     * @param string $value
     *   The executable option value.
     */
    protected function execOption($option, $value = null)
    {
        if (isset($option)) {
            if (strpos($option, '-') !== 0) {
                $option = "--$option";
            }

            $this->executableArgs .= null == $option ? '' : ' ' . $option;
            $this->executableArgs .= null == $value ? '' : ' ' . CommandArguments::escape($value);
        }

        return $this;
    }

}
