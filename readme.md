Simple Email Queue
===================

[Plugin homepage](http://blog.milandinic.com/wordpress/plugins/simple-email-queue/) | [Plugin author](http://blog.milandinic.com/) | **[Premium Version](https://shop.milandinic.com/downloads/simple-email-queue-plus)** | [Donate](http://blog.milandinic.com/donate/)

Simple Email Queue is a WordPress plugin that is used to pass restrictions set by your host on number of sent emails in given period.

This free version is only useful for developers. If you want to use it in full capacity, consider buying [premium version](https://shop.milandinic.com/downloads/simple-email-queue-plus).

First, you need to set what is maximum number of emails that can be sent in given period. By default, it sends 10 emails in 6 minutes. This means that if you want to send 15 emails in 6 minutes, only 10 emails are sent while rest 5 emails are put in queue and sent in the next hour.

You can change this limits by using filters from you code. If you want user interface in your admin, use [premium version](https://shop.milandinic.com/downloads/simple-email-queue-plus).

Filter `simple_email_queue_max` is used to set maximum number of emails that are sent in period. It expects positive integer to be passed.

To change period length, you can use filter `simple_email_queue_interval`. It also expects positive integer to be passed but please take care that this number is of seconds, not minutes (for example, if your period is 30 minutes, you would pass `1800`).

Different hosts use different limits. Please consult your host's documentation or support to find this out.

To use this limits, you need to use function `simple_email_queue_add()` instead of built-in function `wp_mail()`. Both accept same parameters. Emails that are sent using `wp_mail()` function are not sent using queue. If you want that all emails are sent using queue, even those sent using `wp_mail()` function, use [premium version](https://shop.milandinic.com/downloads/simple-email-queue-plus).
