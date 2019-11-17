<?php


namespace Akademija\Classes;


class ApartmentRoom extends Room
{
    public function __construct($roomNumber, $price)
    {
        parent::__construct(new RoomInformation(
            RoomType::Diamond,
            true,
            true,
            4,
            $roomNumber,
            "TV, air-conditioner, refrigerator, kitchen box, mini-bar, bathtub, free Wi-fi  ",
            $price));
    }

    function __toString()
    {
        return parent::__toString();
    }
}