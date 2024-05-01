<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-image: url(login.png);
            background: cover;
            background-size: cover;
            background-repeat: no-repeat;

        }
        div{
            background-color: rgba(18, 0, 28, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 90%;
            border-radius: 5px;
        }
        .inputSubmit{
            background-color: rgb(164, 0, 228);
            font-weight: bold;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 5px;
            color: white;
            font-size: 15px;
        }

       .inputSubmit:hover{
            background-color: rgb(93, 0, 124);
            cursor: pointer;
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
    <div>
        <h1>Bem-vindo de volta!</h1>
        <form action="testLogin.php" method="POST">
        <b><span style="font-size: 80%;">É ótimo ter você aqui de novo ;D</span></p></b>
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>