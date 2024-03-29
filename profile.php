<?php
include "servers.php";

$email1 = $_SESSION['email'];
$join = $con->prepare("SELECT user.username, information.* FROM user, information WHERE user.email = information.email AND user.email = ?;");
$join->bind_param("s", $email1);
$join->execute();
$JoiningResult = $join->get_result();
$join->close();


if ($JoiningResult) {

  $JoiningResult->field_seek(1);
  $fileInfo = $JoiningResult->fetch_assoc();
      echo " Name: " . $fileInfo["fname"]. " " . $fileInfo["lname"]. "<br>".
      "Gender: " . $fileInfo["gender"]. "<br>".
      "Institution Name: " . $fileInfo["inst_name"]. "<br>".
      "Degree: " . $fileInfo["degree"]. "<br>".

      "Parmanent Address: " . $fileInfo["pTown"]. "<br>".
      "Thana: " . $fileInfo["pThana"]. "<br>".
      "ZIP: " . $fileInfo["pZip"]. "<br>".
      "Current Address: " . $fileInfo["cTown"]. "<br>".
      "Thana: " . $fileInfo["cThana"]. "<br>".
      "Zip: " . $fileInfo["cZip"]. "<br>".
      "Mobile No.: " . $fileInfo["mobile_num"]. "<br>".
      "Email: " . $fileInfo["email"]. "<br>";

      $JoiningResult->close();
}

else {
  echo "0 records are inserted.";
}
$con->close();

//logout option
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['email']);
  header('location: form fill up.php');
}

?>
