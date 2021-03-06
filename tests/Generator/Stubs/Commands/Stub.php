<?php

namespace Spinen\ConnectWise\Generator\Stubs\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Stub extends Command
{
    public function configure()
    {
        $this->setName("Stub");
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Stub");
    }
}
