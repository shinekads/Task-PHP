<?php

class BankAccount implements IfaceBankAccount
{

    private $balance = 0;
    
    function getBalance() {
        return $this->balance;
    }

    function setBalance($balance) {
        $this->balance = $balance;
    }

    public function __construct(Money $openingBalance)
    {
        $this->balance = $openingBalance;
    }

    public function balance()
    {
        return $this->balance;
    }

    public function deposit(Money $amount)
    {
         $this->balance = intval($this->balance->__toString() + $amount->__toString());
    }

    public function transfer(Money $amount, BankAccount $account)
    {
        //implement this method
    }
}
