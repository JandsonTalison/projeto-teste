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
    $read_query = "SELECT * FROM alunos";
    $read_query_result = mysqli_query($conn,$read_query);
  ?>
</head>
<body>
  
  <div class="main-container">
    <div class="head-box">
      <h1>Alunos matriculados</h1>
      <a class="exit-buttom" href="index.php">
        <img src="../assets/exit-buttom-bg.png">
      </a>
    </div>
    <div class="students-box">
      <table class="table table-striped table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Matéria</th>
            <th scope="col">Excluir</th>
            <th scope="col">Atualizar</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while($student_row = mysqli_fetch_assoc($read_query_result)){
          ?>
            <tr>
              <td>
                <?php
                  echo utf8_encode($student_row['nome']);
                ?>
              </td>
              <td>
                <?php
                  echo utf8_encode($student_row['materias']);
                ?>
              </td>
              <td>
                <?php echo "<a href='../php/delete-student.php?id=".$student_row['id']."'>"?>
                  <button>
                    <img src="../assets/trash-bg.png" alt="">
                  </button>
                <?php echo"</a>";?> 
              </td>
              <td>
                <?php echo "<a href='update-student.php?id=".$student_row['id']."'>"?>
                  <button onclick="window.location.href = 'update-student.php'">
                    <img src="../assets/pencil-bg.png" alt="">
                  </button>
                <?php echo"</a>";?> 
              </td>
            </tr>

          <?php }?>
        </tbody>
        <button class="add-student" onclick="window.location.href = 'insert-student.php'">
          Matricular aluno
          <img src="../assets/plus-bg.png" alt="">
        </button>
      </table>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>