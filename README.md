# Robo Docker Compose

Run docker compose commands from the Robo task runner.

### Getting Started

First, you'll need to download the robo docker compose library using composer:

```bash
composer require --dev droath/robo-docker-compose
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
- docker-compose pull
- docker-compose exec 
- docker-compose down
- docker-compose start
- docker-compose restart
- docker-compose pause

I'll be adding the rests of the docker-compose commands shortly. Or if you want
to create a PR with additional commands that would be much appreciated.


