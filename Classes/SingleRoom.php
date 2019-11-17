<?php

namespace Akademija\Classes;


class SingleRoom extends Room
{
    public function __construct($roomNumber, $price)
    {
        parent::__construct(new RoomInformation(
            RoomType::Standard,
            true,
            false,
            1,
            $roomNumber,
            "TV, air-conditioner",
            $price));
    }

    function __toString()
    {
        return parent::__toString();
    }


}