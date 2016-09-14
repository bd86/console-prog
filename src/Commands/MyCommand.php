<?php

namespace Commands;

use Program\Adder;
use Symfony\Component\Console\Command\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

use Symfony\Component\Console\Output\OutputInterface;

class MyCommand extends Command
{
    protected function configure()
    {
        $this->setName('add')
             ->setDescription('Create New User')
             ->setHelp('This command allows you to create users...')
             ->addArgument('Number1', InputArgument::REQUIRED, 'First number to add')
             ->addArgument('Number2', InputArgument::REQUIRED, 'Second number to add');
             //->addOption('yell', null, InputOption::VALUE_NONE, 'Loud?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $num1 = $input->getArgument('Number1');
        $num2 = $input->getArgument('Number2');
        $total = Adder::add($num1,$num2);

        // $lastname = $input->getArgument('last_name');
        // if($lastname) {
        //     $text .= ' '.$lastname;
        // }
        // if($input->getOption('yell')){
        //     $text = strtoupper($text);
        // }

        $output->writeln('Total is '.$total.'!');
    }
}