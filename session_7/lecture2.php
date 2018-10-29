<?php

// Step 1: Build a prototype

 class Animal {
	 
	 // properties or attributes or specifications
	 public $name;
	 public $numOfLegs;
	 public $numOfEyes;
	 public $numOfTeeths;
	 
	/* public function __construct($animal_name) {
		 $this->name = $animal_name;
	 }*/
	 
	 
	 
	 // activities or tasks / operations to perform
	 
	 public function eat() {
		 
		 echo "Animal is eating.<br/>";
	 }
	 
	 public function walk() {
		 echo "Animal is walking.<br/>"; 
	 }
	 
	 public function findFood() {
		  echo "Animal is finding food.<br/>";
	 }	 
	 
 }
 
 // Step 2: Create an instance
 $lion = new Animal("lion");

 // Step 3: Make him perform some operations!
 
    $lion->name = "lion";
	echo "<br/>Animal Name:".$lion->name."<br/>";
	$lion->findFood();
	$lion->eat();
	$lion->walk();
 
 
	$elephant = new Animal();
	$lion->name = "elephant";
	echo "Animal Name:".$lion->name."<br/>";
 	$elephant->findFood();
	$elephant->eat();
	$elephant->walk();
 
 
?>