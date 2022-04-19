<?php

class Titular 
{
    private CPF $cpf;
    private string $name;

    public function __construct(CPF $cpf, string $name)
    {
        $this->cpf = $cpf;
        $this->validNameTitular($name);
        $this->name = $name;
    }

    public function getCpf(): string
    {
        return $this->cpf->getNumber();
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function validNameTitular(string $nameTitular)
    {
        if (strlen($nameTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}