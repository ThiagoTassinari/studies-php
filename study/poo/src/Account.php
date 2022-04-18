<?php

class Account
{
    private string $cpfTitular;
    private string $nameTitular;
    private float $balance = 0;


    public function withdraw(float $valueWithdraw): void
    {
        if ($valueWithdraw > $this->balance) {
            echo "Saldo Indisponível";
            return;
        }

        $this->balance -= $valueWithdraw;
    }

    public function deposit(float $valueDeposit): void
    {
        if ($valueDeposit < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->balance += $valueDeposit;
    }

    public function transfer(float $valueTransfer, Account $contaDestiny): void
    {
        if ($valueTransfer > $this->balance) {
            echo "Saldo indisponível";
            return;
        }

        $this->withdraw($valueTransfer);
        $contaDestiny->deposit($valueTransfer);
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function getCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function getNameTitular(string $name): void
    {
        $this->nameTitular = $name;
    }

    public function setNameTitular(): string
    {
        return $this->nameTitular;
    }
}
