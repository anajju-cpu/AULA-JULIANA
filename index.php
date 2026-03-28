<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Notas com Array</title>
</head>
<body>

<h1>Cadastro de Clientes</h1>

<form method="post">
    Nome: <input type="Text" name="nome" ><br><br>
    E-mail: <input type="email" name="email" ><br><br>
    Idade: <input type="number" name="idade" ><br><br>
    
    <button type="submit">Cadastrar</button>

</form>
  
  <h2> Seleção de Produtos </h2>
  <select class="Lanche" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">X-Salada</option>
  <option value="2">X-Bacon</option>
  <option value="3">X-Frango</option>
  </select>
    
  <script>
    const select = document.getElementById ("Lanche");
    select.addEventListener("change", function() {
    console.log("Valor:", select.value);
    console.log("Texto:", select.options[select.selectedIndex].text);
  }); 
  </script>
 

<?php
if (isset($_POST["Cleinte1"], $_POST["Cleinte2"], $_POST["Cliente3"])) {

    $Cliente = array(
        $_POST["Cliente1"],
        $_POST["Cliente2"],
        $_POST["cliente3"]
    );

    $soma = 0;

    foreach ($notas as $nota) {
        $soma += $nota;
    }

    $media = $soma / count($notas);

    echo "<h2>Resultado</h2>";
    echo "Notas: " . implode(", ", $notas) . "<br>";
    echo "Média: " . number_format($media, 2, ",", ".") . "<br>";

    if ($media >= 6) {
        echo "Situação: APROVADO";
    } else {
        echo "Situação: REPROVADO";
    }
}
?>

</body>
</html>