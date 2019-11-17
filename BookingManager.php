<?php

namespace Akademija\Manager;

use Akademija\Classes\Room;
use Akademija\Classes\Reservation;

class BookingManager
{
    public static function bookRoom(Room $room, Reservation $reservation)
    {
        $room->addReservation($reservation);
        $result = "Room <strong>" . $room->getRoomInformation()->getRoomNumber() . "</strong> " . "successfully booked for " .
            "<strong>" . $reservation->getGuest()->getFirstName() . " " . $reservation->getGuest()->getLastName() . "</strong> \n" .
            "from <time>" . $reservation->getStartDate()->format('Y-m-d') . "</time> to " .
            "<time>" . $reservation->getEndDate()->format('Y-m-d') . "</time>!\n";
        echo $result;
    }
}

