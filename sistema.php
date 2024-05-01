<?php
session_start();
include_once('config.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Redireciona para a página de login
    header('Location: login.php');
    exit; // Certifique-se de que o script pare aqui
}

$logado = $_SESSION['email'];

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM users WHERE id LIKE '%$data%' or Nome LIKE '%$data%' or Email LIKE '%$data%' ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM users ORDER BY id DESC";
}
$result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HiPixel - Pixelize sua imaginação com a gente!</title>
    <style>
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-image: url(sistema.png);
            background-size: cover;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;

        }
        .table-bg{
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px 15px 0 0;
            text-align: top;
        }

        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }

        a {
            color: white;
            border: none;
        }
        .top-bar {
        background-color: rgba(16, 4, 4, 0.9); 
        color: white;
        padding: 1% 2%; /* Adiciona um espaçamento interno à barra */
        text-align: center; /* Centraliza o texto horizontalmente */
        position: fixed; 
        width: 96%;
        top: 0; 
        left: 0; 
        z-index: 100;
        height: 20px; /* Aumenta a altura da barra para caber o botão */
        display: flex; /* Ativa o modelo flexbox */
        justify-content: space-between; /* Alinha os itens horizontalmente, deixando espaço entre eles */
        align-items: center; /* Centraliza o conteúdo verticalmente */
        font-size: 8px;
        }

        .logout-button {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            background-color: #bd0000;
            border-radius: 5px;
            font-weight: bold;

        }
        .logout-button:hover {
            background-color: #670000;
        }

    </style>
</head>
<body>
<div class="top-bar">
        <h1>Hipixel</h1>
        <a href="sair.php" class="logout-button">Sair</a>
    </div>
    <div class="content">
        <!-- Conteúdo da sua página aqui -->
    </div>
        <br><br>
        <br><br>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
    <br>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
    <div class="m-5">
        <table class="table text-white table-bg">
            </tbody>
        </table>
    </div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'sistema.php?search='+search.value;
    }
</script>
</html>