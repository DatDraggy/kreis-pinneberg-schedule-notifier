<?php
$config = [];
//This is the URL of the overview of all dates. I have only tested it with this one specific page, but all other time schedules on their website should work just fine
$config['url'] = 'https://reservation.frontdesksuite.com/pinneberg/Termin/SelectTime/SelectReservationCount?pageId=36460354-e2b1-4310-8abf-ebf83abf14ce&buttonId=9542e6aa-a537-46e7-9ebf-333da352eeb3&culture=de&uiCulture=de';
//Get notifications for dates including and before this date (copy and paste the exact date from the website, i was too lazy to cast it and all)
$config['datesUntil'] = 'Dienstag, 1. September 2020';