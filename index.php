<?php
class Student {
    private $name;
    private $age;
    private $grades = array();
  
    public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
  
    public function __toString() {
      return "{$this->name}, {$this->age}";
    }
  
    public function __get($property) {
      if (property_exists($this, $property)) {
        return $this->$property;
      }
    }
  
    public function __set($property, $value) {
      if (property_exists($this, $property)) {
        $this->$property = $value;
      }
    }
  
    public function __call($method, $arguments) {
      if ($method == 'addGrade') {
        $this->grades[] = $arguments[0];
      }
    }
  
    public function __invoke() {
      $sum = array_sum($this->grades);
      $count = count($this->grades);
      $average = $count > 0 ? $sum / $count : 0;
      return "{$this->name} has an average grade of {$average}.";
    }
  }
  
  // Create a new Student object
  $student = new Student("John Doe", 20);
  
  // Set the age property using __set()
  $student->age = 21;
  
  // Add grades using __call()
  $student->addGrade(80);
  $student->addGrade(90);
  
  // Output the student object as a string using __toString()
  echo "Student: {$student}\n";
  
  // Output the average grade using __invoke()
  echo $student() . "\n";
  