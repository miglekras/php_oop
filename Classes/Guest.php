<?php

namespace Akademija\Classes;


class Guest
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function __toString()
    {
        $result = $this->getFirstName() . " " . $this->getLastName();
        return $result;
//        $result = '<ul>';
//        foreach (get_object_vars($this) as $key => $value) {
//            $result = "<li><span>$key: </span> <span>$value</span> </li>";
//        }
//        $result .= '</ul>';
//        return $result;
    }
}