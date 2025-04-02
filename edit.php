<?php
require 'config.php'; // Inclui a conexão com o banco

// Obtém os dados do corretor a ser editado
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM corretores WHERE id=$id");
    $corretor = $result->fetch_assoc();
}

// Atualizar os dados do corretor
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $cpf = $_POST["cpf"];
    $creci = $_POST["creci"];

    $sql = "UPDATE corretores SET name='$name', cpf='$cpf', creci='$creci' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Corretor</title>
</head>
<body>

<h2>Editar Corretor</h2>
<form method="POST">
    <input type="hidden" name="id" value="<?= $corretor['id'] ?>">
    
    <label>Nome:</label>
    <input type="text" name="name" value="<?= $corretor['name'] ?>" required><br><br>

    <label>CPF:</label>
    <input type="text" name="cpf" value="<?= $corretor['cpf'] ?>" required><br><br>

    <label>CRECI:</label>
    <input type="text" name="creci" value="<?= $corretor['creci'] ?>" required><br><br>

    <button type="submit">Salvar Alterações</button>
</form>

<a href="index.php">Voltar</a>

</body>
</html>
