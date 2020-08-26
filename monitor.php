<?php
require_once('simple_html_dom/simple_html_dom.php');
require_once('config.php');
$html = file_get_html($config['url']);

if ($html === false) {
  die();
}

$dates = $html->find('.date-list .date');

if (empty($dates)) {
  die('No Datelist found! Check URL!');
}

$notification = '';

foreach ($dates as $date) {
  if (empty($date->find('.no-available'))) {
    $notification .= "\n" . $date->find('span[class=text]', 0)->innertext . "\n";
    $times = [];
    foreach ($date->find('ul[class=times-list] a') as $time) {
      $times[] = trim($time->innertext);
    }
    $notification .= implode(', ', $times);
  }

  if (!empty($config['datesUntil']) && $date->find('span[class=text]', 0)->innertext === $config['datesUntil']) {
    break;
  }
}

echo $notification;