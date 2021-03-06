<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="shortcut icon" href="../assets/page-icon.png" type="image/x-icon">
  <title>eClass</title>
  <?php 
    include_once "../php/connection.php";
    $id = $_GET['id'];
    $read_query = "SELECT nome,materias FROM alunos WHERE id='$id'";
    $read_query_result = mysqli_query($conn,$read_query);
    $student_row = mysqli_fetch_assoc($read_query_result);
  ?>
</head>
<body>
  
  <div class="main-container">
    <div class="head-box">
      <h1>Atualização de alunos</h1>
      <button class="back-buttom" onclick="window.location.href = 'enrolled-students.php'">
        <img src="../assets/arrow-left.png" alt="" srcset="">
      </button>
    </div>
    <div class="up-students-box">
      <table class="table table-striped table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Matéria</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <form action="../php/upt-student.php" method="POST">
              <td>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="text" name="name" value="<?php echo utf8_encode($student_row['nome'])?>" autocomplete="off" required>
              </td>
              <td>
                <input type="text" name="subject" value="<?php echo utf8_encode($student_row['materias'])?>" autocomplete="off" required>
              </td>
              <button type="submit" class="update-buttom">Salvar</button>
            </form>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>