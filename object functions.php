<?php
//Author: Michael Wachira

class Student{
	var $name;
	var $course;
	var $gpa;
	
	//constructor
function __construct($name,$course,$gpa){
	$this->name =$name;
	$this->course =$course;
	$this->gpa =$gpa;
	
	
}

function hasHonors(){
	
	if($this->gpa >= 3.5){
		return "true";
	}
	return "false";
}





}

$student1 =new Student("jim", "Business", 2.8);
$student1 =new Student("pam", "Art", 3.5);
echo "the student will graduate ? <br>";
echo $student1->hasHonors();

?>