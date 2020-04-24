<?php
namespace Jakmall\Recruitment\Calculator\Commands; 

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
 
class SubstractCommand extends Command
{
    protected static $defaultName = "substract";

    protected function configure()
    {
        $this->setName('substract')
            ->setDescription('Substract all given Numbers')
            ->addArgument('numbers', InputArgument::IS_ARRAY, 'The numbers to be substracted.');
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $numbers = $input->getArgument('numbers');
        $total = 0;
        for ($i = 0; $i < count($numbers); $i++) {
            if ($i == 0) {
                $total = $numbers[$i];
            } else {
                $total -= $numbers[$i];   
            }
            $output->write($numbers[$i].' ');
            if ($i != count($numbers)-1) {
                $output->write('- ');
            }
        }
        $output->write('= '. $total);
    }
}