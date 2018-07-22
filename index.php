<?php

//This is my very first comment

//echo "I have no idea what to do next";

//Practice some OOP php
class User{
 public $name = "Brad Traversy";
 
 function myFunction(){
	 echo $this->name;
 }
 function __construct(){
	 echo "This is a constructor. It is called automatically when an object is instantiated.";
 }
 function __destruct(){
	 echo "This is a destructor. It is called automatically when an object is instantiated.";
 }
}

$user = new User;

//$user->myFunction();
//echo $user->name;
