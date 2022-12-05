<?php require_once("header.php"); ?>

<h1>Reservations</h1>
    <h4> The following information is what guest corresponds to the reservation and which type of room they recieve!</h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ReservationID</th>
      <th>Adults</th>
      <th>Children</th>
      <th>GuestID</th>
       <th>RoomID</th>
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

      $rid = $_GET['ReservationID'];
$sql = "select r.ReservationID, r.Adults, r.Children, g.Name, t.RoomType from Reservation r join Guest g on g.GuestID = r.GuestID join Room t on t.RoomID =  r.RoomID where r.ReservationID=".$rid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["ReservationID"]?></td>
    <td><?=$row["Adults"]?></td>
    <td><?=$row["Children"]?></td>
    <td><?=$row["Name"]?></td>
    <td><?=$row["RoomType"]?></td>
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

<?php require_once("footer.php"); ?>
