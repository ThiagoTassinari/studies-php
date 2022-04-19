<?php

class Account
{
    private string $cpfTitular;
    private string $nameTitular;
    private float $balance;
    private static int $numberAccounts = 0;

    public function __construct(string $cpfTitular, string $nameTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validNameTitular($nameTitular);
        $this->nameTitular = $nameTitular;
        $this->balance = 0;

        self::$numberAccounts++;
    }

    public function __destruct()
    {
        self::$numberAccounts--;
    }

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

    public function getCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function getNameTitular(): string
    {
        return $this->nameTitular;
    }

    private function validNameTitular($nameTitular)
    {
        if (strlen($nameTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public static function getNumberAccount(): int
    {
        return self::$numberAccounts;
    }
}
