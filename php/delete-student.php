<?php
  include_once "connection.php";
  $id = $_GET['id'];
  $delete_query = "DELETE FROM alunos WHERE id='$id'";
  mysqli_query($conn,$delete_query);
  header("Location: ../pages/enrolled-students.php");
?>