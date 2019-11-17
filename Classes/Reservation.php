<?php


namespace Akademija\Classes;




class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;

    function __construct($startDate, $endDate, $guest)
    {
        $this->setStartDate($startDate);
        $this->setEndDate($endDate);
        $this->setGuest($guest);
    }

    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
    }

    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    public function setGuest($guest)
    {
        $this->guest = $guest;
    }

    public function getGuest()
    {
        return $this->guest;
    }

    function __toString()
    {
        $result = "Reservation( Start date: " . $this->getStartDate()->format('Y-m-d') .
            ", End date: " . $this->getEndDate()->format('Y-m-d') . ", Guest: " . $this->getGuest();
        return $result;
    }
}