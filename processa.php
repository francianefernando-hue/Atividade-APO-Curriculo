<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $cidade = htmlspecialchars($_POST['cidade']);
    $estado = htmlspecialchars($_POST['estado']);
    $idade = htmlspecialchars($_POST['idade']);
    $linkedin = htmlspecialchars($_POST['linkedin']);
    
    $formacao = array_filter(array_map('trim', $_POST['formacao']));
    $experiencia = array_filter(array_map('trim', $_POST['experiencia']));
    $habilidades = array_filter(array_map('trim', explode("\n", $_POST['habilidades'])));
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Currículo de <?php echo $nome; ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1><?php echo $nome; ?></h1>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Telefone:</strong> <?php echo $telefone; ?></p>
    <p><strong>Cidade:</strong> <?php echo $cidade; ?> / <strong>Estado:</strong> <?php echo $estado; ?></p>
    <p><strong>Idade:</strong> <?php echo $idade; ?></p>
    <p><strong>LinkedIn:</strong> <a href="<?php echo $linkedin; ?>" target="_blank"><?php echo $linkedin; ?></a></p>

    <h2>Formação</h2>
    <ul>
      <?php foreach($formacao as $f) echo "<li>$f</li>"; ?>
    </ul>

    <h2>Experiência Profissional</h2>
    <ul>
      <?php foreach($experiencia as $e) echo "<li>$e</li>"; ?>
    </ul>

    <h2>Habilidades</h2>
    <ul>
      <?php foreach($habilidades as $h) echo "<li>$h</li>"; ?>
    </ul>
  </div>

  <script>
    // Abrir caixa de impressão automaticamente
    window.onload = () => window.print();
  </script>
</body>
</html>
