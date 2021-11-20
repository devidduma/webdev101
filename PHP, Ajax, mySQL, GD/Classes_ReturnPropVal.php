<?php
/*
NOTE1: you don't access properties like in c++, you dont need $ in front.
	ex: $this->balance;
	$devid->balance;
NOTE2: you CANNOT use public: like in c++, but should use it in front of each variable.
NOTE3: protected == var $_T...
	private == var $_...
	public == var $...
*/

class BankAccount {
	var $balance= 10;
	private $balance2= 100;
	
	public function DisplayBalance() {
		echo 'Balance: '.$this->balance;	
	}
	public function Withdraw($amount) {
		if($this->balance<$amount) echo 'Not enough money.<br>';
		else
			$this->balance-= $amount;
	}
}

$devid= new BankAccount;
$devid->Withdraw(12);
$devid->DisplayBalance();

?>