<html>

<head>
  <title>Exemplo PHP</title>
</head>

<body>

  <?php
  ini_set("display_errors", 1);
  header('Content-Type: text/html; charset=iso-8859-1');

  echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

  $servername = "54.134.121.21";
  $username = "root";
  $password = "password";
  $database = "teste";

  $link = new mysqli($servername, $username, $password, $database);

  /* check connection */
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

  $query = "INSERT INTO produtos (nome, descricao, preco, quantidade_estoque, categoria, marca) VALUES ('Galaxy S23', 'Smartphone top de linha com tela dinâmica AMOLED', 5999.99, 100, 'Eletrônicos', 'Samsung');";

  if ($link->query($query) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $link->error;
  }

  ?>
</body>

</html>