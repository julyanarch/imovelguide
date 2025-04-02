<?php
require 'config.php'; // Conexão com o banco de dados

// Cadastro de corretor
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
    $name = trim($_POST["name"]);
    $cpf = trim($_POST["cpf"]);
    $creci = trim($_POST["creci"]);

    if (strlen($cpf) == 11 && strlen($creci) >= 2 && strlen($name) >= 2) {
        $sql = "INSERT INTO corretores (name, cpf, creci) VALUES ('$name', '$cpf', '$creci')";
        if ($conn->query($sql) === TRUE) {
            header("Location: index.php"); // Redireciona para limpar o formulário
            exit();
        } else {
            echo "<script>alert('Erro ao cadastrar: " . $conn->error . "');</script>";
        }
    } else {
        echo "<script>alert('Preencha os campos corretamente!');</script>";
    }
}

// Exclusão de corretor
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM corretores WHERE id=$id");
    header("Location: index.php");
    exit();
}

// Buscar os corretores cadastrados
$result = $conn->query("SELECT * FROM corretores");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Corretores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        input {
            padding: 10px;
            margin: 5px;
            width: 250px;
        }
        button {
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            cursor: pointer;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th {
            background-color: lightgray;
        }
        a {
            text-decoration: none;
            color: blue;
            margin: 0 5px;
        }
    </style>
</head>
<body>

<h2>Cadastro de Corretor</h2>
<form method="POST" onsubmit="return validarFormulario()">
    <input type="text" name="cpf" id="cpf" placeholder="Digite o seu CPF (11 números)" required maxlength="11" minlength="11" pattern="[0-9]{11}">
    <input type="text" name="creci" id="creci" placeholder="Digite o seu CRECI" required maxlength="20" minlength="2">
    <br>
    <input type="text" name="name" id="name" placeholder="Digite o seu nome" required maxlength="100" minlength="2">
    <br>
    <button type="submit" name="add">Enviar</button>
</form>

<h2>Lista de Corretores</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Creci</th>
        <th>Cpf</th>
        <th>Ações</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row["id"] ?></td>
        <td><?= $row["name"] ?></td>
        <td><?= $row["creci"] ?></td>
        <td><?= $row["cpf"] ?></td>
        <td>
            <a href="index.php?delete=<?= $row["id"] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[Excluir]</a>
            <a href="edit.php?id=<?= $row["id"] ?>">[Editar]</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<script>
function validarFormulario() {
    let cpf = document.getElementById("cpf").value;
    let creci = document.getElementById("creci").value;
    let name = document.getElementById("name").value;

    if (cpf.length !== 11 || isNaN(cpf)) {
        alert("O CPF deve ter exatamente 11 números.");
        return false;
    }
    if (creci.length < 2) {
        alert("O CRECI deve ter pelo menos 2 caracteres.");
        return false;
    }
    if (name.length < 2) {
        alert("O Nome deve ter pelo menos 2 caracteres.");
        return false;
    }
    return true;
}
</script>

</body>
</html>
