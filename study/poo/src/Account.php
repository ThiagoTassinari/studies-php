<?php

class Account
{
    private Titular $titular;
    private float $balance;
    private static int $numberAccounts = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
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

    public function getNameTitular(): string
    {
        return $this->titular->getName();
    }

    public function getCpfTitular(): string
    {
        return $this->titular->getCpf();
    }

    public static function getNumberAccount(): int
    {
        return self::$numberAccounts;
    }
}
