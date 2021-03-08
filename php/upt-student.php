<?php
  include_once "connection.php";
  $id = $_POST['id'];
  $name = utf8_decode($_POST['name']);  
  $subject = utf8_decode($_POST['subject']);
  $query_update = "UPDATE alunos
  SET nome = '$name',materias='$subject'
  WHERE id = '$id'";
  mysqli_query($conn,$query_update);
  header("Location: ../pages/enrolled-students.php");

?>