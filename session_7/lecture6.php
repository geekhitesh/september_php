<?php

class Animal {
	 
	 // properties or attributes or specifications
	 public $species; // instance variable
	 public $numOfLegs;
	 public $numOfEyes;
	 public $numOfTeeths;
	 
	 public function __construct($species,$numOfLegs) {
		 $this->species = $name;
		 $this->numOfLegs = $numOfLegs;
	 }
	 
	 
	 
	 // activities or tasks / operations to perform
	 
	 public function eat() {
		 
		echo  $this->species." is eating.<br/>";
	 }
	 
	 public function walk() {

		 echo $this->species." is walking with ".$this->numOfLegs." legs<br/>"; 
	 }
	 
	 public function findFood() {
		  echo $this->species." is finding food.<br/>";
	 }	

	 public function roar() {
		 echo "Animal is roaring.<br/>";
	 }
	 
 }
 
 
 
 class Human extends Animal {
	 
	 public $name;
	 
	 public function __construct($name) {
		 $this->name = $name;
	 }
	 
	 public function sentiments() {
		 
	 }
	 
	 public function think() {
		 echo $this->name. " is thinking<br/>";
	 }
	 
	 public function makeMissiles() {
		 
		 echo $this->name." is making missiles.<br/>";
	 }
 }
 

	$human = new Human("Einstein");
	$human->think();
	$human->roar();
	
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 ?>