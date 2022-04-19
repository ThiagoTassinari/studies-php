<?php

class People
{
    public string $name;
    public CPF $cpf;

    public function __construct(string $name, CPF $cpf)
    {
        $this->name = $name;
        $this->cpf = $cpf;
    }

    public function validNameTitular(string $nameTitular)
    {
        if (strlen($nameTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
