<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Array, Loop e Tabela (OK)</title>

<style>
    table, td, tr {
        border: solid 1px;
        border-collapse: collapse;
    }

    th { 
        background-color: black;
        color: white;
        padding: 0.5rem;
    }

    td { padding: 0.5rem; }

    tr:nth-child(odd){ background: lightblue; }

    tr:hover { 
        background-color: rgba(120, 120, 120, 0.2); 
    }
</style>

</head>
<body>
    <h1>Exercício 04 - Array, Loop e Tabela (OK)</h1>
    <hr>
    
    <h2>Solução 1</h2>

<table>
    <tr>
        <th>ID</th> 
        <th>Linguagem</th> 
        <th>Descrição</th> 
    </tr>

<?php 
/* Solução 1 */

// Fonte de dados
$linguagens = [
    // Chave associativa (lembra propriedades)
    "HTML" => "Estruturação",
    "CSS" => "Estilos",
    "JS" => "Comportamentos",
    "PHP" => "Back-End",
    "SQL" => "Manipulação de dados",
    "Java" => "Softwares"
];

$id = 1;
foreach($linguagens as $linguagem => $descricao) {
?>
    <tr>
        <td> <?=$id?> </td>
        <td> <?=$linguagem?> </td>
        <td> <?=$descricao?> </td>
    </tr>
<?php 
    $id++;
} 
?>

</table>

<hr>

<h2>Solução 2</h2>



<table>
    <tr>
        <th>ID</th> 
        <th>Linguagem</th> 
        <th>Descrição</th> 
    </tr>

<?php
// Fonte de dados
$linguagens2 = [
    [
        "id" => 1,
        "linguagem" => "HTML",
        "descricao" => "Estruturação"
    ],
    [
        "id" => 2,
        "linguagem" => "CSS",
        "descricao" => "Estilos"
    ],
    [
        "id" => 3,
        "linguagem" => "JS",
        "descricao" => "Comportamentos"
    ],
    [
        "id" => 4,
        "linguagem" => "PHP",
        "descricao" => "Back-End"
    ],
    [
        "id" => 5,
        "linguagem" => "SQL",
        "descricao" => "Manipulação de dados"
    ],
    [
        "id" => 6,
        "linguagem" => "Java",
        "descricao" => "Softwares"
    ]   
];

foreach($linguagens2 as $linguagem) {
?>
    <tr>
        <td> <?= $linguagem['id'] ?> </td>
        <td> <?= $linguagem['linguagem'] ?> </td>
        <td> <?= $linguagem['descricao'] ?> </td>
    </tr>
<?php
}
?>

</table>

</body>
</html>