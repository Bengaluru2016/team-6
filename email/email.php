<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-a7ea7ab1bbcb6f813232fdd2e60fdd66');
$domain = "rishabh11.mydomain.com";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'    => 'Excited User <mailgun@rishabh11.mydomain.com>',
    'to'      => 'Baz <commonbazinga@gmail.com>',
    'subject' => 'Hello',
    'text'    => 'Testing some Mailgun awesomness!'
));
?>
