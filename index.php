<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OOP</title>
</head>
<body>
	<h1>Welcome to OOP World!</h1>

	<?php  

		// Define a Parent Class
		class Driver {
			public $driverCount = 1;
		}
		//Inherit Example woth a chld class name Car
		class Car extends Driver{
			//Oop said variable is properties, with access modifier[Public, Private, Protected]
			public $wheel = 4;
			public $passengerSeat = 4;
			public $stearing = 1;

			public $registrationNumber;
			public $bodyColor;
			public $engineCc;

			// Declaring a Method with Access Modifier
			public function set_regiNumber($registrationNumber){
				$this->registrationNumber = $registrationNumber;
			}
			public function set_bodyColor($bodyColor){
				$this->bodyColor = $bodyColor;
			}
			public function set_engineCc($engineCc){
				$this->engineCc = $engineCc;
			}

			public function get_regiNumber(){
				return $this->registrationNumber;
			}
			public function get_bodyColor(){
				return $this->bodyColor;
			}
			public function get_engineCc(){
				return $this->engineCc;
			}

		}
		//Make a object of car class
		$carOne = new Car();
		$carOne->set_regiNumber('Dhaka Metro Ga 15 1576');
		$carOne->set_bodyColor('Gray');
		$carOne->set_engineCc('1200');
		echo "passengerSeat: " . $carOne->passengerSeat . "<br>";
		echo "wheel" . $carOne->wheel . "<br>";
		echo "driverCount" . $carOne->driverCount . "<br>";
		echo "Registration Number: " . $carOne->get_regiNumber() . "<br>";
		echo "Body Color: " . $carOne->get_bodyColor() . "<br>";
		echo "Engine CC: " . $carOne->get_engineCc() . "<br><br>";

		$carTwo = new Car();
		$carTwo->set_regiNumber('Dhaka Metro Ma 15 1576');
		$carTwo->set_bodyColor('Black');
		$carTwo->set_engineCc('1200');
		echo $carTwo->passengerSeat . "<br>";
		echo $carTwo->wheel . "<br>";
		echo $carTwo->get_regiNumber() . "<br>";
		echo $carTwo->get_bodyColor() . "<br>";
		echo $carTwo->get_engineCc() . "<br><br>";

	?>
</body>
</html>