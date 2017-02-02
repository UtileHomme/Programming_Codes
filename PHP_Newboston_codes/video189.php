<?php

//valid for videos 189-192, 196-198

class BankAccount
{
  public $balance = 0;

  public function DisplayBalance()
  {
    echo $this->balance;     //this will refer to the object which calls it
    echo '<br />';
    //return 'Balance: '.$this->balance;
  }

  public function Withdraw($amount)
  {
    if($this->balance<$amount)
    {
      echo 'Not enough money.<br />';
    }
    else
    {
      $this->balance = $this->balance - $amount;
    }
  }

  public function Deposit($amount)
  {
    $this->balance = $this->balance + $amount;
  }
}

class SavingsAccount extends BankAccount
{
    public $type = '18-25';     //this will not be accessible to Bank account

}
//new instance of class
$alex = new BankAccount();

//withdrawing 5 pounds
$alex->Withdraw(12);

//displaying balance
$alex->DisplayBalance();

//for adding to bank account
$alex->Deposit(2000);
$alex->Withdraw(245);

echo 'Balance of Alex is: ';
$alex->DisplayBalance();

echo '<br />';

$billy = new BankAccount;

$billy->Deposit(10000);

echo 'Balance of Billy is: ';
$billy->DisplayBalance();


//now using the Savings account

echo 'Balance in Savings account is ';
$alex_savings = new SavingsAccount;
echo $alex_savings->balance;


$alex_savings->Deposit(4000);
echo '<br />';

echo 'Balance in Alex saving account: ';
echo $alex_savings->DisplayBalance();

echo $alex_savings->type;

?>
