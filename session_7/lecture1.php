<?php

// Step 1: Build a prototype

 class Animal {
	 
	 // properties or attributes or specifications
	 
	 public $numOfLegs;
	 public $numOfEyes;
	 public $numOfTeeths;
	 
	 
	 
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
 $lion = new Animal();

 // Step 3: Make him perform some operations!
 
	$lion->findFood();
	$lion->eat();
	$lion->walk();
 
 
 
 
 
?>