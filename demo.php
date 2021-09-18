<?php
include_once 'vendor/autoload.php';
use Symfony\Component\Mime\Address;

$email = (new \Symfony\Component\Mime\Email())

    ->from(new Address('demo@demo.com', 'test"test'))
    ->to('demo@demo.com')
    ->subject('Test email with quotes in name')
    ->html('<p>Hello!</p>');

$transport =  \Symfony\Component\Mailer\Transport::fromDsn('smtp://user:passowrd@host:port'); ;
$mailer = new \Symfony\Component\Mailer\Mailer($transport);

$mailer->send($email);

