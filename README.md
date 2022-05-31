# Keboola Orchestrator CLI

Simple command line wrapper for [Keboola Orchestrator PHP Client](https://github.com/keboola/orchestrator-php-client)

## Installation

- clone the repo
- `docker-compose build`
- `docker run keboola/orchestrator-cli`

## Usage

```bash
docker run keboola/orchestrator-cli
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
- git clone https://github.com/keboola/orchestrator-cli.git
- $ cd orchestrator-cli
- docker-compose build
- docker-compose run --rm dev composer install
- docker-compose run --rm dev
```

## Integration
Tagged version is pushed to Keboola DEV AWS ECR `061240556736.dkr.ecr.us-east-1.amazonaws.com/keboola/orchestrator-cli`.
`orchestrator-cli-pull` IAM grouped allows pull of the image. 

## License

MIT licensed, see [LICENSE](./LICENSE) file.
