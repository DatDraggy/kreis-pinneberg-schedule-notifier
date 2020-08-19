# kreis-pinneberg-schedule-notifier
I needed an appointment at the Straßenverkehrsamt of Pinneberg. 
Because all times in the next couple of days were taken, I've decided to write a script that notifies me when a person cancels their appointment.
It's a quite specific usecase, but I thought why not put it on github.

### Installation
- Download the [Simple HTML Dom](https://simplehtmldom.sourceforge.io/) Library
- Put it in a dir called simple_html_dom
- Edit `config.php`
- Run `php monitor.php`, some times should pop up
- Put it in a cronjob and make sure that Cron sends job outputs to an email 