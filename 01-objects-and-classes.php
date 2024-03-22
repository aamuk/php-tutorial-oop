<?php

class BankAccount
{
    public function __construct(private string $name, private float $balance)
    {

    }

    public function deposit($amount) : void
    {
        $this->balance += $amount;
    }

    public function getBalance() : float
    {
        return $this->balance;
    }

    public function setName($newName) : void
    {
        $this->name = $newName;
    }
    public function getName() : string
    {
        return $this->name;
    }

}

//class BankAccount
//{
//    public string $name;
//    public $accountNumber;
//    public $balance;
//
//    public function deposit($amount)
//    {
//        if ($amount > 0) {
//            $this->balance += $amount;
//        }
//    }
//
//    public function withdraw($amount)
//    {
//        if ($amount <= $this->balance) {
//            $this->balance -= $amount;
//            return true;
//        }
//        return false;
//
//    }
//
//    public function closeaccount()
//    {
//        $this->balance = 0;
//        return $this;
//    }
//}

$acc = new BankAccount('Dave', 990);
echo $acc->getBalance() . "<br>";
$acc->deposit(200) . "<br>";
echo $acc->getBalance() . "<br>";
echo $acc->getName() . "<br>";
$acc->setName("lol");
echo $acc->getName() . "<br>";