<?php

// Step 1: Build a prototype

 class Animal {
	 
	 // properties or attributes or specifications
	 public $name; // instance variable
	 public $numOfLegs;
	 public $numOfEyes;
	 public $numOfTeeths;
	 
	 public function __construct($name,$numOfLegs) {
		 $this->name = $name;
		 $this->numOfLegs = $numOfLegs;
	 }
	 
	 
	 
	 // activities or tasks / operations to perform
	 
	 public function eat() {
		 
		echo  $this->name." is eating.<br/>";
	 }
	 
	 public function walk() {

		 echo $this->name." is walking with ".$this->numOfLegs." legs<br/>"; 
	 }
	 
	 public function findFood() {
		  echo $this->name." is finding food.<br/>";
	 }	 
	 
 }
 
 // Step 2: Create an instance
	$lion = new Animal("lion",4);

	// Step 3: Make it perform some operations!
	$lion->findFood();
	$lion->eat();
	$lion->walk();
 
 
?>