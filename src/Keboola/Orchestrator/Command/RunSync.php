<?php
namespace Keboola\Orchestrator\Command;

use Keboola\Orchestrator\Client;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RunSync extends Command
{
    /**
     *
     */
    protected function configure()
    {
        $this
            ->setName('orchestrator:run-sync')
            ->setDescription("Create an orchestrator job and wait until it's done.")
            ->addArgument(
                'token',
                InputArgument::REQUIRED,
                'Storage API Token'
            )
            ->addArgument(
                'id',
                InputArgument::REQUIRED,
                'Orchestrator ID'
            )
            ->addArgument(
                'max-tries',
                InputArgument::OPTIONAL,
                'Maximum number of tries to get the job finished.',
                50
            )
            ->addArgument(
                'interval',
                InputArgument::OPTIONAL,
                'Delay between tries in seconds',
                6
            )
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $token = $input->getArgument("token");
        $id = (int) $input->getArgument("id");
        $client = Client::factory(array("token" => $token));

        $job = $client->createJob($id);

        // polling
        $finished = false;
        $iteration = 0;
        $status = '';
        while(!$finished) {
            if ($iteration >= $input->getArgument("max-tries")) {
                throw new \Exception("Maximum number of tries reached");
                $finished = true;
                continue;
            }
            $iteration++;

            $detail = $client->getJob($job["id"]);

            if (!in_array($detail["status"], array("waiting", "processing"))) {
                $status = $detail["status"];
                $finished = true;
                continue;
            }

            sleep($input->getArgument("interval"));
        }

        $output->writeln("Job {$job["id"]} created and finished: {$status}.");
        if ($status == 'success') {
            return 0;
        } else {
            return 1;
        }

    }
}