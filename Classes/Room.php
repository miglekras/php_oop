<?php

namespace Akademija\Classes;

use Akademija\Interfaces\ReservableInterface;

abstract class Room implements ReservableInterface
{
    protected $roomInformation;
    protected $reservations = [];

    protected function __construct(RoomInformation $roomInformation)
    {
        $this->setRoomInformation($roomInformation);
    }

    public function setRoomInformation($roomInformation)
    {
        $this->roomInformation = $roomInformation;
    }

    public function getRoomInformation()
    {
        return $this->roomInformation;
    }

    protected function setReservations($reservation)
    {
        $this->reservations[] = $reservation;
    }

    public function getReservations()
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation)
    {
        array_push($this->reservations, $reservation);
    }

    public function removeReservation(Reservation $reservation)
    {
        $key = array_search($reservation, $this->reservations);
        array_splice($this->reservations, $key);
        var_dump($this->reservations);
    }

    function __toString()
    {
        $result = "\n" . get_class($this) . " -> Room information: \n" . $this->getRoomInformation() . "\nReservations: \n";
        if (count($this->getReservations()) > 0) {
            foreach ($this->getReservations() as $item) {
                $result .= "$item \n";
            }
        } else {
            $result .= "\tNo reservations";
        }
        return $result;
    }


}
