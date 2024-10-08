<?php
include_once "../../class/DAO/usuario.DAO.class.php";

$objusuarioDAO = new usuarioDAO();
$retorno = $objusuarioDAO->listarProfs();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../scss/login/estilo.css">
</head>
<body>
    <header class="flex-row-space">
    <img src="../../imagens/IFSUL.svg" width="350">
        <h2>Sistema para Gestão de Conselho</h2>
    </header>
    <main class="flex-row" id="conteudo" style="flex-direction: column; gap: 10px;">
    <h1 id="texto-lateral">Tabela dos Professores</h1>
    <table id="tabela-p">
        <thead id="tabela-p-h">
            <tr>
                <th>Professor</th>
                <th>Coordenador</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody id="tabela-p-b">
            <?php
            foreach($retorno as $query){?>
            <tr>
                <td><?=$query['nome']?></td>
                <td><?php if($query['coordenador'] != 'i'){
                    echo "<p>Não</p>";
                }else{
                    echo "<p>Sim</p>";
                }?>
                </td>
                <td><a href="mudaCoord.php?id=<?=$query['Usuario_idusuario']?>" >Tornar Coordenador</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </main>
    <footer class="flex-row-space">
        <p>Site experimental criado para o CodeDay 2024</p>
    </footer>
</body>
</html>
