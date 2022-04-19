<?php

class Employee extends People
{
    private $job;

    public function __construct(string $name, CPF $cpf, string $job)
    {
        $this->validNameTitular($name);
        $this->name = $name;
        $this->cpf = $cpf;
        $this->job = $job;
    }

    public function getJob(): string
    {
        return $this->cargo;
    }
}