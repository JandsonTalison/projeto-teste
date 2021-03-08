<?php

include_once("connection.php");

$name = utf8_decode($_POST['name']);
$subject = utf8_decode($_POST['subject']);

$result = "INSERT INTO alunos (nome,materias) VALUES('$name','$subject')";
mysqli_query($conn,$result);

if(mysqli_insert_id($conn)){
  header("Location: ../pages/enrolled-students.php");
}else{

}

?>