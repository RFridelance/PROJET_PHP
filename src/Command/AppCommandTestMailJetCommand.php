<?php

namespace App\Command;

use App\Service\MailJetService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name: 'app:test-mailjet',
    description: 'Test MailJet email sending'
)]
class TestMailJetCommand extends Command
{
    private $mailJetService;

    public function __construct(MailJetService $mailJetService)
    {
        $this->mailJetService = $mailJetService;
        parent::__construct();
    }

    protected function configure(): void
    {
        // Configuration supplémentaire si nécessaire
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $success = $this->mailJetService->sendEmail(
            'hugo.bolmont@protonmail.com', // Remplacez par une adresse email de test
            'hugo bolmont',        // Remplacez par un nom de test
            'Test Email',
            '<p>This is a test email sent using MailJet.</p>'
        );

        if ($success) {
            $output->writeln('Email sent successfully.');
        } else {
            $output->writeln('Failed to send email.');
        }

        return Command::SUCCESS;
    }
}
