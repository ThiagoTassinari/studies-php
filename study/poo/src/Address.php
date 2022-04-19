<?php

class Address
{
    private string $city;
    private string $district;
    private string $street;
    private string $number;

    public function __construct(string $city, string $district, string $street, string $number)
    {
        $this->city = $city;
        $this->district = $district;
        $this->street = $street;
        $this->number = $number;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }
}
