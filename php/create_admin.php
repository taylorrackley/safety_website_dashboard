<?php
  $username = "";
  $password = "";
  $first_name = "";
  $last_name = "";
  // Private: 100
  // Protected: 50
  // Public 10
  $clearance = 0;

  $hash_password = password_hash($password, PASSWORD_DEFAULT);

  include("connect.php");
  $stmt = $con->prepare("INSERT INTO admins (username, password, first_name, last_name, clearance) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param('ssssd', $username, $hash_password, $first_name, $last_name, $clearance);

  if ($result = $stmt->execute()){
    $stmt->free_result();
  } else {
    echo "Unable to create admin";
  }

  $con->close();
?>
