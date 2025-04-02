<?php
require 'config.php'; // Inclui a conexão com o banco de dados

// Busca todos os corretores cadastrados
$sql = "SELECT * FROM corretores";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Corretores</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Corretores Cadastrados</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>CRECI</th>
    </tr>

    <?php
    // Exibe os dados da tabela `corretores`
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["cpf"] . "</td>";
            echo "<td>" . $row["creci"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Nenhum corretor cadastrado.</td></tr>";
    }
    ?>
</table>

</body>
</html>
