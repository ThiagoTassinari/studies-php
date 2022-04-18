<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;


    public function withdraw(float $valueWithdraw): void
    {
        if ($valueWithdraw > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        }

        $this->saldo -= $valueWithdraw;
    }

    public function deposit(float $valueDeposit): void
    {
        if ($valueDeposit < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valueDeposit;
    }

    public function transfer(float $valueTransfer, Conta $contaDestiny): void
    {
        if ($valueTransfer > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->withdraw($valueTransfer);
        $contaDestiny->deposit($valueTransfer);
    }
}

