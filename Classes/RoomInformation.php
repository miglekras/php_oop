<?php


namespace Akademija\Classes;


class RoomInformation
{
    private $roomType;
    private $restroom;
    private $balcony;
    private $bedCount;
    private $roomNumber;
    private $extras;
    private $price;

    public function __construct($roomType, $restroom, $balcony, $bedCount, $roomNumber, $extras, $price)
    {
        $this->setRoomType($roomType);
        $this->setRestroom($restroom);
        $this->setBalcony($balcony);
        $this->setBedCount($bedCount);
        $this->setRoomNumber($roomNumber);
        $this->setExtras($extras);
        $this->setPrice($price);
    }

    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    public function setRestroom($restroom)
    {
        $this->restroom = $restroom;
    }

    public function setBalcony($balcony)
    {
        $this->balcony = $balcony;
    }

    public function setBedCount($bedCount)
    {
        $this->bedCount = $bedCount;
    }

    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;
    }

    public function setExtras($extras)
    {
        $this->extras = $extras;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getRoomType(): string
    {
        return $this->roomType;
    }

    public function getRestroom(): bool
    {
        return $this->restroom;
    }

    public function getBalcony(): bool
    {
        return $this->balcony;
    }

    public function getBedCount(): int
    {
        return $this->bedCount;
    }

    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    public function getExtras()
    {
        return $this->extras;
    }

    public function getPrice()
    {
        return $this->price;
    }

    function __toString()
    {
        $balcony = $this->getBalcony() ? "Yes" : "No";
        $restroom = $this->getRestroom() ? "Yes" : "No";

        $result = "Price: " . $this->getPrice() .
            "\nBed count: " . $this->getBedCount() .
            "\nRoom type: " . $this->getRoomType() .
            "\nRoom number: " . $this->getRoomNumber() .
            "\nBalcony: " . $balcony .
            "\nRestroom: " . $restroom .
            "\nExtras: " . $this->getExtras();
        return $result;
    }

}