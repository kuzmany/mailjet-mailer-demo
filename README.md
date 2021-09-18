# Demo Mailjet bug with quotes in sender name

## Steps to reproduce

1. run `git clone https://github.com/kuzmany/mailjet-mailer-demo.git`
2. run `cd mailjet-mailer-demo`
3. run `composer install`
4. setup in demo.php:  `from`, `to` email and `DSN transport`. 
5. Keep sender name as you see in demo.php
6. run `demo.php`

You do not receive email and Mailjet should be warning you about: A non-validated sender address was used on your account