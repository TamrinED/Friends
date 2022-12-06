<?php require_once("header.php"); ?>

 <div class="container">
  
 <h1 style="text-align:center; font-family:Serif;  font-size:4rem">Payments</h1>
    <table style="background-color:#CFD8DC" class="table table-striped">
 
<table style="background-color:#CFD8DC" class="table table-striped">
  <thead>
    <tr>
      <th>Payment ID</th>
      <th>Guest Name</th>
      <th>Payment Type</th>     
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

      //$rid = $_GET['ReservationID'];
$sql = "select p.PaymentID, p.Type, g.Name from Payment p join Guest g on g.GuestID = p.GuestID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["PaymentID"]?></td>
    <td><?=$row["Name"]?></td>
    <td><?=$row["Type"]?></td>
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
