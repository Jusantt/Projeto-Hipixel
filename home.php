<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <Style>
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-image: url(home.png);
            background-size: cover;
            text-align: center;
            color: white;
        }
        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 11, 43, 0.9);
            padding: 3%;
            border-radius: 15px;
        }

        a{
            text-decoration: none;
            font-weight: bold;
            color: white;
            border: 3px solid rgb(0, 49, 184);
            border-radius: 10px;
            padding: 10px;
        }

        a:hover{
            background-color: rgb(0, 49, 184);
        }
        
    </Style>
</head>
<body>
    <h1>HiPixel</h1>
    <h2>Pixelize sua imaginação!</h2>
    <div class="box">
        <a href="login.php">Fazer login</a>
        <a href="formulario.php">Cadastre-se</a>
</body>
</html>