<?php

class Employee
{
    private $firstName;
    private $lastName;
    private $dateOfBirth;
    private $address;
    private $workPlace;

    public function __construct($firstName, $lastName, $dateOfBirth, $address, $workPlace)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->workPlace = $workPlace;
    }


}