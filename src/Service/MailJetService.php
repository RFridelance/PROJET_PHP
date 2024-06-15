<?php

namespace App\Service;

use Mailjet\Client;
use Mailjet\Resources;
use Psr\Log\LoggerInterface;

class MailJetService
{
    private $mailjet;
    private $logger;

    public function __construct(string $mailjetApiKey, string $mailjetApiSecret, LoggerInterface $logger)
    {
        $this->mailjet = new Client($mailjetApiKey, $mailjetApiSecret, true, ['version' => 'v3.1']);
        $this->logger = $logger;
    }

    public function sendEmail($toEmail, $toName, $subject, $htmlContent)
    {
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "hugo.bolmont@protonmail.com",
                        'Name' => "hbolmont"
                    ],
                    'To' => [
                        [
                            'Email' => $toEmail,
                            'Name' => $toName
                        ]
                    ],
                    'Subject' => $subject,
                    'HTMLPart' => $htmlContent,
                ]
            ]
        ];

        $response = $this->mailjet->post(Resources::$Email, ['body' => $body]);

        $this->logger->info('MailJet response: ' . print_r($response->getBody(), true));

        if (!$response->success()) {
            $this->logger->error('MailJet API error: ' . print_r($response->getBody(), true));
        } else {
            $this->logger->info('MailJet email sent successfully to ' . $toEmail);
        }

        return $response->success();
    }
}
