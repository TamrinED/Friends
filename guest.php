<?php require_once("header.php"); ?>

  
<div class="container">
  
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['saveType']) {
    case 'Add':
      $sqlAdd = "insert into Guest (Name, Email, Phone) values (?), (?), (?)";
      $stmtAdd = $conn->prepare($sqlAdd);
      $stmtAdd->bind_param("s", $_POST['iName'], $_POST['iEmail'], $_POST['iPhone']);
      $stmtAdd->execute();
      echo '<div class="alert alert-success" role="alert">New guest information added.</div>';
      break;
    case 'Edit':
      $sqlEdit = "update Guest set Name=? where GuestID=?";
      $stmtEdit = $conn->prepare($sqlEdit);
      $stmtEdit->bind_param("si", $_POST['iName'], $_POST['iid']);
      $sqlEdit = "update Guest set Email=? where GuestID=?";
      $stmtEdit = $conn->prepare($sqlEdit);
      $stmtEdit->bind_param("si", $_POST['iEmail'], $_POST['iid']);
      $sqlEdit = "update Guest set Phone=? where GuestID=?";
      $stmtEdit = $conn->prepare($sqlEdit);
      $stmtEdit->bind_param("si", $_POST['iPhone'], $_POST['iid']);
      $stmtEdit->execute();
      echo '<div class="alert alert-success" role="alert">Guest information edited.</div>';
      break;
    case 'Delete':
      $sqlDelete = "delete from Guest where GuestID=?";
      $stmtDelete = $conn->prepare($sqlDelete);
      $stmtDelete->bind_param("i", $_POST['iid']);
      $stmtDelete->execute();
      echo '<div class="alert alert-success" role="alert">Guest deleted.</div>';
      break;
  }
}
?>  
  
  <h1 style="text-align:center; font-family:Serif;  font-size:4rem"><span id="title">Guests</span></h1>
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
    
    <td>
    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editGuest<?=$row["GuestID"]?>">
                Edit
              </button>
              <div class="modal fade" id="editGuest<?=$row["GuestID"]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editGuest<?=$row["GuestID"]?>Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="editGuest<?=$row["GuestID"]?>Label">Edit Guest</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="">
                        <div class="mb-3">
                          <label for="editGuest<?=$row["GuestID"]?>Name" class="form-label">Guest Name</label>
                          <input type="text" class="form-control" id="editGuest<?=$row["GuestID"]?>Name" aria-describedby="editGuest<?=$row["GuestID"]?>Help" name="iName" value="<?=$row['Name']?>"><br><br>
                          <br><label for="editGuest<?=$row["GuestID"]?>Email" class="form-label">Guest Email</label>
                          <input type="text" class="form-control" id="editGuest<?=$row["GuestID"]?>Email" aria-describedby="editGuest<?=$row["GuestID"]?>Help" name="iEmail" value="<?=$row['Email']?>">
                          <label for="editGuest<?=$row["GuestID"]?>Phone" class="form-label">Guest Phone Number</label>
                          <input type="text" class="form-control" id="editGuest<?=$row["GuestID"]?>Phone" aria-describedby="editGuest<?=$row["GuestID"]?>Help" name="iPhone" value="<?=$row['Phone']?>">
                          <div id="editGuest<?=$row["GuestID"]?>Help" class="form-text">Enter the guest's information.</div>
                        </div>
                        <input type="hidden" name="iid" value="<?=$row['GuestID']?>">
                        <input type="hidden" name="saveType" value="Edit">
                        <input type="submit" class="btn btn-primary" value="Submit">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <form method="post" action="">
                <input type="hidden" name="iid" value="<?=$row["GuestID"]?>" />
                <input type="hidden" name="saveType" value="Delete">
                <input type="submit" class="btn" onclick="return confirm('Are you sure?')" value="Delete">
              </form>
            </td> 
  </td>        
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
  <br />
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGuest">
        Add New
      </button>

      <!-- Modal -->
      <div class="modal fade" id="addGuest" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addGuestLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="addGuestLabel">Add Guest</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="">
                <div class="mb-3">
                  <label for="Name" class="form-label">Guest Name</label>
                  <input type="text" class="form-control" id="Name" aria-describedby="nameHelp" name="iName"><br>
                   <label for="Email" class="form-label">Guest Email</label>
                  <input type="text" class="form-control" id="Email" aria-describedby="emailHelp" name="iEmail"><br>
                   <label for="Phone" class="form-label">Guest Phone Number</label>
                  <input type="text" class="form-control" id="Phone" aria-describedby="phoneHelp" name="iPhone"><br>
                  <div id="nameHelp" class="form-text">Enter the Guest's information.</div>
                </div>
                <input type="hidden" name="saveType" value="Add">
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
<?php require_once("footer.php"); ?>
