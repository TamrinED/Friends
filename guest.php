<?php require_once("header.php"); ?>
<body>
  
<div class="container">
  
<h1 style="text-align:center; font-family:Serif;  font-size:4rem">Guests</h1>
<table style="background-color:#CFD8DC" class="table table-striped">
  <thead>
    <tr>
      <th>GuesttID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
  </thead>
  <tbody>
    <?php
$servername = "localhost";
$username = "tamrined_Friends";
$password = "Friends2022";
$dbname = "tamrined_Friends";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT GuestID, Name, Email, Phone from Guest";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["GuestID"]?></td>
    <td><?=$row["Name"]?></td>
    <td><?=$row["Email"]?></td>
    <td><?=$row["Phone"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
  </div>
  
<?php require_once("footer.php"); ?>
