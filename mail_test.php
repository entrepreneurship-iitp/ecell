<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;
echo "hello";
# Instantiate the client.
$mgClient = new Mailgun('88e840e8b2e3be2d09c5ba2f0d9b2f5a-c322068c-00166fda');
echo "test"
$domain = "sandbox50dba53faf704047af618d19163d7ec2.mailgun.org";
echo "frit";
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
	'from'	=> 'Excited User <mailgun@YOUR_DOMAIN_NAME>',
	'to'	=> 'Baz <YOU@YOUR_DOMAIN_NAME>',
	'subject' => 'Hello',
	'text'	=> 'Testing some Mailgun awesomness!'
));
echo "hi";

$mgClient->messages()->send($domain, $params);
?>