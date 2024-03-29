<?php
require __DIR__ . '/vendor/autoload.php';
use Akademija\Classes\SingleRoom;
use Akademija\Classes\Guest;
use Akademija\Classes\Reservation;
use Akademija\Manager\BookingManager;

$room = new SingleRoom(1408, 99);
$guest = new Guest('Vardenis', 'Pavardenis');
$startDate = new \DateTime('2019-04-20');
$endDate = new \DateTime('2019-04-25');
$reservation = new Reservation($startDate, $endDate, $guest);
BookingManager::bookRoom($room, $reservation);
