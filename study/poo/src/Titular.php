<?php

class Titular extends People
{
    private Address $address;

    public function __construct(CPF $cpf, string $name, Address $address)
    {
        $this->cpf = $cpf;
        $this->name = $name;
        $this->address = $address;
        $this->validNameTitular($name); 
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}