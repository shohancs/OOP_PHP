<?php  

/*
	// car class
	class Car{
		// OOP te Method. structure oriented a function
		// car class er properties bolbo oop te. variable na
		// Access Modifier [PUBLIC, PRIVATE, PROTECTED]
		// properties Member Variable
		public $wheels = 4;
		public $stearing = 1;
		public $passengerSit = 5;
		public $driver = 1;


		public $registrationNumber;
		public $bodyColor;
		public $engineCC;

		// Method banabo access modifier use korea
		public function set_regiNumber($registrationNumber) {
			$this->registrationNumber = $registrationNumber;
		}
		public function get_regiNumber(){
			return $this->registrationNumber;
		}

		public function set_bodyColor($bodyColor) {
			$this->bodyColor = $bodyColor;
		}
		public function get_bodyColor() {
			return $this->bodyColor;
		}


		public function set_engineCC($engineCC) {
			$this->engineCC = $engineCC;
		}
		public function get_engineCC(){
			return $this->engineCC;
		}
	}

	// Car class er object ami ekhon banabo. object car class er car1
	// object member function
	$carOne = new Car();
	$carOne->set_regiNumber('Dahaka Metro GA 15-5789');
	$carOne->set_bodyColor('black');
	$carOne->set_engineCC('1600 HP');
	echo $carOne->driver . "<br>"; //-> pointer
	echo $carOne->passengerSit . "<br>"; 
	echo $carOne->get_bodyColor(). "<br>";
	echo $carOne->get_engineCC()."<br>";
	echo $carOne->get_regiNumber(). "<br><br>";

	// new object car class er car2
	$carTwo = new Car();
	$carTwo->set_regiNumber('Shohan');
	$carTwo->set_bodyColor('White');
	$carTwo->set_engineCC('2000 hp');
	echo $carTwo->wheels . "<br>";
	echo $carTwo->passengerSit . "<br>";
	echo $carTwo->get_bodyColor() . "<br>";
	echo $carTwo->get_engineCC() . "<br>";
	echo $carTwo->get_regiNumber() . "<br><br>";
*/


// Somporko define korbo. jemon driver chara gari cholbe na. car class ea koita driver acea
	// Ekta class er sathe arekta class er somporko toiri kora inherirence. extend ta inheritence
	// Driver Parent class
	class Driver{
		public $driver = 1;
	}
	// driver class ke car class ea somporko kore dilam extends add korea
	// car child class
	// parent class ke child class er kacea inherit korci
	class Car extends Driver {
		public $seat = 5;
		public $stearing = 1;
		public $wheel;

		public function set_wheel($wheel) {
			$this->wheel = $wheel;
		}
		public function get_wheel(){
			return $this->wheel;
		}
	}

	$carOne = new Car();
	$carOne->set_wheel(4);
	echo "Driver - " . $carOne->driver . "<br>";
	echo $carOne->seat . "<br>";
	echo $carOne->get_wheel() . "<br>";
?>