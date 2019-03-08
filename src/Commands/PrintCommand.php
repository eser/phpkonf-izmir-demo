<?php

namespace PHPKonf\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use PHPKonf\MessageProvider;

class PrintCommand extends Command
{
    public function __construct()
    {
        parent::__construct();
    }

    public function configure()
    {
        $this->setName('print')
            ->setDescription('Print message command.')
            ->setHelp('This command prints a message...')
            ->addArgument('message', InputArgument::REQUIRED, 'A message to print.');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $messageProvider = new MessageProvider();
        $message = $messageProvider->validate($input->getArgument('message'));

        $output->writeln('Message: ' . $message);
    }
}
