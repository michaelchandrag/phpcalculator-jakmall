<?php
namespace Jakmall\Recruitment\Calculator\Commands; 

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
 
class PowCommand extends Command
{
    protected static $defaultName = "multiply";

    protected function configure()
    {
        $this->setName('multiply')
            ->setDescription('Multiply all given Numbers')
            ->addArgument('base', InputArgument::REQUIRED, 'The base number.')
            ->addArgument('exponent', InputArgument::REQUIRED, 'The exponent number.');
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $base = $input->getArgument('base');
        $exponent = $input->getArgument('exponent');
        $total = $base;
        for ($i = 0; $i < $exponent-1; $i++) {
            $total *= $base;
        }

        $output->write($base.' * '.$exponent.' = '.$total);
    }
}