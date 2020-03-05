<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;
echo "hello";
# Instantiate the client.
$mgClient = Mailgun::create('88e840e8b2e3be2d09c5ba2f0d9b2f5a-c322068c-00166fda');
$domain = "sandbox50dba53faf704047af618d19163d7ec2.mailgun.org";
$params = array(
'from' => 'Excited User <noreply@ecell-iitp.org>',
'to' => 'vsaisujeeth10@gmail.com',
'subject' => 'Hello',
'text' => 'Testing some Mailgun awesomness!'
);

echo "hi";

$mgClient->messages()->send($domain, $params);
?>