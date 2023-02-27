<?php
// echo "fine";
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the name and email from the form data
  $name = $_POST["name"];
  $email = $_POST["email"];

  // Include the Person class definition
  require_once("./Person.php");

  // Create a new instance of the Person class
  $person = new Person();
  echo $person;

  // Set the name and email properties using the setName() and setEmail() methods
  $person->setName($name);
  $person->setEmail($email);

  // Display the name and email properties on the webpage using the getName() and getEmail() methods
  echo "Name: " . $person->getName() . "<br>";
  echo "Email: " . $person->getEmail() . "<br>";
}
?>