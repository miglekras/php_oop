<?php


namespace Akademija\Interfaces;


use Akademija\Classes\Reservation;

interface ReservableInterface
{
    function addReservation(Reservation $reservation);

    function removeReservation(Reservation $reservation);
}