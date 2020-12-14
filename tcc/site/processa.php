<?php  
  include_once("conexao.php");

  $nome = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $profession = $_POST['profession'];

  $sql = "insert into usuarios (name, email, password) values ('$nome', '$email', '$password')";

  if (mysqli_query($conexao, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
  }

  mysqli_close($conexao);

?>