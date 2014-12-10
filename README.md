# Keboola Orchestrator Command Line Interface

Simple command line wrapper for [Keboola Orchestrator PHP Client](https://github.com/keboola/orchestrator-php-client)

## Installation

Download the latest version from https://s3.amazonaws.com/keboola-orchestrator-cli/builds/orchestrator-client.phar .

From there, you may place it anywhere that will make it easier for you to access (such as /usr/local/bin) and chmod it to 755.
You can even rename it to just orchestrator-client to avoid having to type the .phar extension every time.

Orchestrator CLI requires PHP 5.4 or newer.

## Usage

```bash
php orchestrator-client.phar
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

## Development

```bash
git clone https://github.com/keboola/orchestrator-cli.git
$ cd orchestrator-cliclient
composer install
```


## Build
Tool is distributed as PHAR package, follow these steps to create package of current version:

```bash
curl -LSs https://box-project.github.io/box2/installer.php | php
./box.phar build -v
```

`orcestrator-client.phar` archive will be created, you can execute it `./orchestrator-client.phar`


