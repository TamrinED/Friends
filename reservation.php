<?php require_once("header.php"); ?>

<h1>Appointments</h1>
    <h4> The following information is whose patient ID number corresponds to the appointment day and which doctors ID number they are seeing</h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ApptID</th>
      <th>ApptDay</th>
      <th>PatientID</th>
      <th>DoctorID</th>
    </tr>
  </thead>
  <tbody>
    <?php
$servername = "localhost";
$username = "rebeccca_ruser";
$password = "WL]8Dmr[Qag6";
$dbname = "rebeccca_MIS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from Appointment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["ApptID"]?></td>
    <td><?=$row["ApptDay"]?></td>
    <td><?=$row["DoctorName"]?></td>
    <td><?=$row["PatientID"]?></td>
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
