<?php


namespace Akademija\Classes;


class Bedroom extends Room
{
    public function __construct($roomNumber, $price)
    {
        parent::__construct(new RoomInformation(
            RoomType::Gold,
            true,
            true,
            2,
            $roomNumber,
            "TV, air-conditioner, refrigerator, minibar, bathtub ",
            $price));
    }

    function __toString()
    {
        return parent::__toString();
    }

}