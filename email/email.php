<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-a7ea7ab1bbcb6f813232fdd2e60fdd66');
$domain = "sandbox2f2bded26dd643e28682deec4a3fb058.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'    => 'Excited User <postmaster@sandbox2f2bded26dd643e28682deec4a3fb058.mailgun.org>',
    'to'      => 'Baz <koushal.ogirala@gmail.com>',
    'subject' => 'Hello',
    'text'    => 'Testing some Mailgun awesomness!'
));
?>
