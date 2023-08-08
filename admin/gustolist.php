<?php require "E:\wamp64\www\project file\header.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegeproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// retrieve data from the table
$sql = "SELECT * FROM gusto";
if(isset($_POST['filter']) && !empty($_POST['filter_text'])) {
  $filterText = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['filter_text']);
  $sql .= " WHERE acd_year LIKE '%$filterText%' OR course LIKE '%$filterText%' OR sec_roll LIKE '%$filterText%' OR phoneno LIKE '%$filterText%' OR college_id LIKE '%$filterText%' OR position LIKE '%$filterText%' OR name LIKE '%$filterText%'";
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  echo"<link href='list.css' rel='stylesheet' type='text/css'><body>";
  echo "<form method='POST'>";
  echo "<input type='text' name='filter_text' placeholder='Enter text to filter'>";
  echo "<input type='submit' name='filter' value='Filter'>";
  echo "<br><br>";
  
  echo "<table>";
  echo "<thead><tr><th></th><th>Name</th><th>Course</th><th>Phone number</th><th>Section Roll</th><th>College ID</th><th>Position</th><th>Academic Year</th></tr></thead>";
  echo "<tbody>";

  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td><input type='checkbox' name='row[]' value='".$row["college_id"]."'/></td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["course"]."</td>";
    echo "<td>".$row["phoneno"]."</td>";
    echo "<td>".$row["sec_roll"]."</td>";
    echo "<td>".$row["college_id"]."</td>";
    echo "<td>".$row["position"]."</td>";
    echo "<td>".$row["acd_year"]."</td>";
    echo "</tr>";
  }

  echo "</tbody></table><br>";

  echo "<input type='submit' name='delete' value='Delete'><br><br>";

  // delete data from the table
  if(isset($_POST['delete'])) {
    $colID = $_POST['row'];
    if(empty($colID)) {
      echo "Please select at least one record to delete.</body>"; 
    } else {
      $N = count($colID);
      for($i=0; $i < $N; $i++) {
        $sql = "DELETE FROM gusto WHERE college_id='$colID[$i]'";
        $result = $conn->query($sql);
        header('Location:adminpanel.php');
      }
    }
  }

} else {
  echo "No results found.";
}

$conn->close();
?>