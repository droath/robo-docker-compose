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

- docker-compose up - [Command Options](https://docs.docker.com/compose/reference/up)
- docker-compose ps - [Command Options](https://docs.docker.com/compose/reference/ps)
- docker-compose run - [Command Options](https://docs.docker.com/compose/reference/run)
- docker-compose logs - [Command Options](https://docs.docker.com/compose/reference/logs)
- docker-compose pull - [Command Options](https://docs.docker.com/compose/reference/pull)
- docker-compose exec - [Command Options](https://docs.docker.com/compose/reference/exec)
- docker-compose down - [Command Options](https://docs.docker.com/compose/reference/down)
- docker-compose build - [Command Options](https://docs.docker.com/compose/reference/build)
- docker-compose start - [Command Options](https://docs.docker.com/compose/reference/start)
- docker-compose restart - [Command Options](https://docs.docker.com/compose/reference/restart)
- docker-compose pause - [Command Options](https://docs.docker.com/compose/reference/pause)


I'll be adding the rests of the docker-compose commands shortly. Or if you want
to create a PR with additional commands that would be much appreciated.


