<?php

// Step 1: Build a prototype

 class Animal {
	 
	 // properties or attributes or specifications
	 public $name;
	 public $numOfLegs;
	 public $numOfEyes;
	 public $numOfTeeths;
	 
	 public function __construct($value) {
		 $this->name = $value;
	 }
	 
	 
	 
	 // activities or tasks / operations to perform
	 
	 public function eat() {
		 
		 echo  $this->name." is eating.<br/>";
	 }
	 
	 public function walk() {
		 echo $this->name." is walking.<br/>"; 
	 }
	 
	 public function findFood() {
		  echo $this->name." is finding food.<br/>";
	 }	 
	 
 }
 
 // Step 2: Create an instance
	$lion = new Animal("lion");

 // Step 3: Make him perform some operations!
	$lion->findFood();
	$lion->eat();
	$lion->walk();
 
 
	$elephant = new Animal("elephant");
 	$elephant->findFood();
	$elephant->eat();
	$elephant->walk();
 
 
?>