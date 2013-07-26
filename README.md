[![Total Downloads](https://poser.pugx.org/mfcc/mandrill/downloads.png)](https://packagist.org/packages/mfcc/mandrill)

-----------------
MfccMandrill
-----------------

This Modules provides an API wrapper for Mandrill API (https://mandrillapp.com/api/docs/)

It is based and depends on original Mandrill library (https://bitbucket.org/mailchimp/mandrill-api-php)

Install:
------

The suggested installation method is via [composer](http://getcomposer.org/):

```sh
php composer.phar require mfcc/zendesk-mandrill:dev-master
```

Usage:
------

1. Enable MfccMandrill module in your application.config.php file.
2. Configure module. Copy
`./vendor/mfcc/mandrill/config/module.mfcc-mandrill.local.php.dist` to
`./config/autoload/module.mfcc-mandrill.local.php` and change the values as desired.
3. Get Mandrill Service and call method (e.g. send mail):

```sh
$mandrill = $this->getServiceLocator()->get('mfccMandrillService');

$mandrill->call('messages/send', array(
      	'message' => array(
				'text' => 'test',
    			'subject' => 'example subject',
    			'from_email' => 'sender@mail.com',
    			'from_name' =>  'From Name',
    			'to' => array(
    					array('email' => 'recepient@email.com')
    			)
    		)
));
```

You can find documentation to methods exposed by this module either here: https://mandrillapp.com/api/docs/

Or in ```YOUR_APP/vendor/mandrill/mandrill/docs/index.html``` once you have installed MfccMandrill module.
