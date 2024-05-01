<?php

    if(isset($_POST['submit']))
{
    // print_r('Nome: ' . $_POST['Nome']);
    // print_r('<br>');
    // print_r('Email: ' .$_POST['email']);
    // print_r('<br>');
    // print_r('Telefone: ' .$_POST['tel']);
    // print_r('<br>');
    // print_r('Sexo: ' .$_POST['genero']);
    // print_r('<br>');
    // print_r('Data de Nascimento: ' .$_POST['data_nascimento']);
    // print_r('<br>');
    // print_r('Sua senha: ' .$_POST['Senha']);  

    include_once('config.php');

    if(isset($_POST['submit'])) {
        $Nome = $_POST['Nome'];
        $Email = $_POST['email'];
        $Telefone = $_POST['tel'];
        $Sexo = $_POST['genero'];
        $Data_nasc = $_POST['data_nascimento'];
        $Senha = $_POST['Senha'];
    }
        // Verificar se o campo de confirmação de senha foi enviado
        $Conf_senha = isset($_POST['conf_senha']) ? $_POST['conf_senha'] : '';
    
        // Validar se a senha e a confirmação de senha correspondem
        if($Senha !== $Conf_senha) {
            echo "As senhas não correspondem. Por favor, tente novamente.";
        } else {
            $result = mysqli_query($conexao, "INSERT INTO users(Nome, Email, Telefone, Sexo, Data_nasc, Senha) 
            VALUES ('$Nome', '$Email', '$Telefone', '$Sexo', '$Data_nasc', '$Senha')");        
            if($result) {
                echo "Registro inserido com sucesso.";
            } else {
                echo "Erro ao inserir registro: " . mysqli_error($conexao);
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
        <style>
            body{
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                background-image: url(formulario.png);
                background-size: cover;
            }
            .box {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0, 24, 21, 0.9);
                padding: 10px;
                border-radius: 15px;
                color: white;
            }

            fieldset {
                border: 2px solid rgb(0, 192, 160);
                border-radius: 15px;
            }

            legend {
                border: 1px solid rgb(0, 192, 160);
                padding: 10px;
                text-align: center;
                background-color: rgb(0, 192, 160);
                border-radius: 8px;
            }

            .inputBox {
                position: relative;
                font-size: 15px;
            }
            .inputUser {
                background: none;
                border: none;
                border-bottom: 1px solid white;
                outline: none;
                color: white;
                font-size: 15px;
                width: 99%;
                letter-spacing: 2px;
                padding-bottom: 8px;
            }
            .labelInput {
                position: absolute;
                top: 0px;
                left: 0px;
                pointer-events: none;
                transition: .5s;
            }
            .inputUser:focus ~ .labelInput,
            .inputUser:valid ~ .labelInput {
                top: -15px;
                font-size: 12px;
                color: rgb(0, 192, 160);
            }
            #data_nascimento {
                border: none;
                padding: 8px;
                border-radius: 10px;
                outline: none;
                font-size: 15px;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }

            #submit{
            background-color: rgb(0, 192, 160);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            font-weight: bold;
        }
            #submit:hover{
                background-color: rgb(0, 88, 73);
            }

            a{
            text-decoration: none;
            font-weight: bold;
            color: gray;
            border-radius: 10px;
            padding: 10px;
        }
        
        </style>
</head>
<body>
<a href="home.php">< Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastre-se</b></legend>
                <b><span style="font-size: 60%;">Nos deixe conhecer você ;D</span></p></b>
                <div class="inputBox">
                    <input type="text" name="Nome" id="Nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo*</label>
                <div>
                    <br>
                <div class="inputBox">
                        <input type="email" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">E-mail*</label>
                <div>
                    <br>
                <div class="inputBox">
                <input type="tel" name="tel" id="tel" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
                <div>
            <p>Sexo:*</p>
            <input type="radio" id="Feminino" name="genero" value="Feminino" required>
            <label for="Feminino">Feminino</label>
            <br>
            <input type="radio" id="Masculino" name="genero" value="Masculino" required>
            <label for="Masculino">Masculino</label>
            <br>
            <input type="radio" id="Outro" name="genero" value="Outro" required>
            <label for="Outro">Outro</label>
                    <br><br>
                <label for="data_nascimento"><b>Quando você nasceu?*</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
            <div>
                <br>
            <div class="inputBox">
            <input type="password" name="Senha" id="Senha" class="inputUser" required>
            <label for="senha" class="labelInput">Crie sua senha*</label>
            <div>
                <br>
            <div class="inputBox">
            <input type="password" name="conf_senha" id="conf_senha" class="inputUser" required>
            <label for="conf_senha" class="labelInput">Confirme sua senha*</label>
                <br>
            <div>
                <br>
            <b><input type="submit" name="submit" id="submit"></b>
            </fieldset>

</body>
</html>