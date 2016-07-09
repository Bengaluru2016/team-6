# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-a7ea7ab1bbcb6f813232fdd2e60fdd66');
$domain = "sandbox2f2bded26dd643e28682deec4a3fb058.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
                  array('from'    => 'Mailgun Sandbox <postmaster@sandbox2f2bded26dd643e28682deec4a3fb058.mailgun.org>',
                        'to'      => 'rishabh <commonbazinga@gmail.com>',
                        'subject' => 'Hello rishabh',
                        'text'    => 'Congratulations rishabh, you just sent an email with Mailgun!  You are truly awesome!  You can see a record of this email in your logs: https://mailgun.com/cp/log .  You can send up to 300 emails/day from this sandbox server.  Next, you should add your own domain so you can send 10,000 emails/month for free.'));
