<?php


/*
class Students{
	public $name;
	public $dept;
	public $id;
	public $gender;
	public $roll;

	public function ShowStd()
	{
	<center>	echo "ID Is :{$this->id} <br>";
		echo "Name Is :{$this->name} <br>";
		echo "dept Is :{$this->dept} <br>";
		echo "Gender Is :{$this->gender} <br>";
		echo "Roll Is :{$this->roll} <br>"; 

		</center>
	}

}

$std1 = new Students();
$std1->name = "Mohammad Yasin";
$std1->dept = "CSE";
$std1->id = 1;
$std1->gender = "Male";
$std1->roll = 001;
$std1->ShowStd();

$std2 = new Students();
$std2->name = "Rahee";
$std2->dept = "MBBS";
$std2->id = 2;
$std2->gender = "FeMale";
$std2->roll = 002;
$std2->ShowStd();

$std3 = new Students();
$std3->name = "Elora CSE";
$std3->dept = "CSE";
$std3->id = 3;
$std3->gender = "Male";
$std3->roll = 003;
$std3->ShowStd();

$std4 = new Students();
$std4->name = "kazi Nusrat";
$std4->dept = "BBA";
$std4->id = 4;
$std4->gender = "FeMale";
$std4->roll = 004;
$std4->ShowStd();


*/

class Students{
	public $name;
	public $depertment;
	public $id;
	public $gender;
	public $roll;

	public function __construct($myid,$mydepert,$myname,$mygender,$myroll)
	{
		$this->id = $myid;
		$this->name = $myname;
		$this->depertment = $mydepert;
		$this->gender = $mygender;
		$this->roll = $myroll;
	}

	public function ShowStd()
	{
		echo "ID Is :{$this->id} <br>";
		echo "Name Is :{$this->name} <br>";
		echo "Depertment Is :{$this->depertment} <br>";
		echo "Gender Is :{$this->gender} <br>";
		echo "Roll Is :{$this->roll} <br>";
	}

}

$stdOne = new Students(1,"EEE","Karim","Male",120021);
$stdOne->ShowStd();

$stdTwo = new Students(2,"EEE","Ria","Female",120022);
$stdTwo->ShowStd();





?>