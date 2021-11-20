<?php
//recall child/mother classes in C++

class BankAccount {
	var $balance= 10;
	private $balance2= 100;
	public $type='I am a Bank Account';
	
	public function DisplayBalance() {
		echo 'Balance: '.$this->balance;	
	}
	public function Withdraw($amount) {
		if($this->balance<$amount) echo 'Not enough money.<br>';
		else
			$this->balance-= $amount;
	}
}

class SavingsAccount extends BankAccount {
	public $type='I am a Savings Bank Account';	//you can replace values
	public function DisplayType() {	//you can add new properties/methods
		echo $type.'<br>';
	}
}

$devid= new BankAccount;
$devidsavings= new SavingsAccount;

echo $devid->type.'<br>';	//remember: DO NOT USE $ before variables when accessing them with ->
echo $devidsavings->type;
$devid->Withdraw(12);
$devid->DisplayBalance();

?>