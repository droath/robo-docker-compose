# Robo Docker Compose

Run docker compose commands from the Robo task runner.

### Getting Started

First, you'll need to download the robo docker compose library using composer:

```bash
composer require droath/robo-docker-compose:~0.0.1
```

### Example

```php
<?php

    use \Droath\RoboDockerCompose\Task\loadTasks;

    // Command equivalent: `docker-composer up -d -remove-orphans`
    $this->taskDockerComposeUp()
        ->detachedMode()
        ->removeOrphans()
        ->run();

    // Command equivalent: `docker-composer down`
    $this->taskDockerComposeDown()
        ->run();
```

### Support

The following commands have been implemented:

- docker-compose up
- docker-compose down

I'll be adding the rests of the docker-compose commands shortly. Or if you want
to create a PR with additional commands that would be much appreciated.


