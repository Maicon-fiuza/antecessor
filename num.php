<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <h1>Está Aqui a sua solicitação</h1>
    </header>
    <main>
        <?php 
            if(isset($_GET['numero'])){
                $numero = $_GET['numero'];
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;

                echo "<p> O número escolhido foi $numero </p>";
                echo "<p> O antecessor de $numero é $antecessor.</p>"; 
                echo "<p> O sucessor de $numero é $sucessor.</p>"; 
            }
        ?>
        <button onclick="history.go(-1)">Voltar para a página anterior</button>
    </main>
</body>
</html>
