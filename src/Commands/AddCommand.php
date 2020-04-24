<?php
namespace Jakmall\Recruitment\Calculator\Commands; 

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
 
class AddCommand extends Command
{
    protected static $defaultName = "add";

    protected function configure()
    {
        $this->setName('add')
            ->setDescription('Add all given Numbers')
            ->addArgument('numbers', InputArgument::IS_ARRAY, 'The numbers to be added.');
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $total = 0;
        $numbers = $input->getArgument('numbers');
        for ($i = 0; $i < count($numbers); $i++) {
            $total += $numbers[$i];
            $output->write($numbers[$i].' ');
            if ($i != count($numbers)-1) {
                $output->write('+ ');
            }
        }
        $output->write('= '. $total);
    }
}