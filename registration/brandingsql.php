<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegeproject";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  
  $name = $_POST["name"];
  $course = $_POST["course"];
  $phone_no = $_POST["phoneno"];
  $section_roll = $_POST["secroll"];
  $college_id = $_POST["id"];
  $position = $_POST["position"];
  $academic_year = $_POST["radioBtn"];

  
  $sql = "INSERT INTO branding (name, course, phoneno, sec_roll, college_id, position, acd_year)
  VALUES ('$name', '$course', '$phone_no', '$section_roll', '$college_id', '$position', '$academic_year')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registration successful!'); window.location.href='branding.html';</script>";
  } else {
    echo "Error: " . $sql ."<br>" . $conn->error;
  }
 }  


$conn->close();
?>
 