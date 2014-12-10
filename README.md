# Keboola Orchestrator Command Line Interface

Simple command line wrapper for [Keboola Orchestrator PHP Client](https://github.com/keboola/orchestrator-php-client)

## Development

```bash
[ondra@kbc-devel-02 ~]$ git clone https://github.com/keboola/orchestrator-php-client.git
[ondra@kbc-devel-02 ~]$ cd orchestrator-php-client
[ondra@kbc-devel-02 orchestrator-php-client]$ composer install
```

## Usage

```bash
[ondra@kbc-devel-02 orchestrator-php-client]$ php bin/application.php
Console Tool

Usage:
 [options] command [arguments]

Options:
 --help (-h)           Display this help message.
 --quiet (-q)          Do not output any message.
 --verbose (-v|vv|vvv) Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug.
 --version (-V)        Display this application version.
 --ansi                Force ANSI output.
 --no-ansi             Disable ANSI output.
 --no-interaction (-n) Do not ask any interactive question.

Available commands:
 help                    Displays help for a command
 list                    Lists commands
orchestrator
 orchestrator:run-sync   Create an orchestrator job and wait until it's done.

```


## Build
Tool is distributed as PHAR package, follow these steps to create package of current version:

```bash
curl -LSs https://box-project.github.io/box2/installer.php | php
./box.phar build -v
```

`orcestrator-client.phar` archive will be created, you can execute it `./orchestrator-client.phar`


