<?php
class UserAccount{
	//general account info
	public $username = 'Username not found.';
	public $password;
	//Bank account info
	public $routingNumber = 0;
	public $bankAcctNumber = 0;
	//personal info
	public $phoneNumber;
	public $address = 'Address not found.';

	//functions
	public function editPersonalInfo(){}
	public function editBankInfo(){}
}
class CharityAccount extends UserAccount {
	public $name = "Name not found";
	public $description = "No description found";
	public $rotalRaised = 0;

	public function editSpendingUpdate() {}
}
class DonorAccount{
	public $firstName = "First name not found.";
	public $lastName = "Last name not found.";
	public $roundAmmount = 0.0; // in dollars
	public $charityUsername = "Charity username not found.";

	public function editDonationInfo(){}
	
}
?>