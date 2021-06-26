<?php


$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];

$conn = new mysqli('localhost','root','root','Kontaktformular');
if($conn->connect_error){
  die('Connection Failed: '.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into Kontaktformular(vorname, nachname, email)
  values(?,?,?)");
  $stmt->bind_param("sss", $vorname, $nachname, $email);
  $stmt->execute();
  echo "registration successfully";
  $stmt->close();
  $conn->close();
}



?>
