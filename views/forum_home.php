<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Forum</title>
</head>
<body>
    <section class="home">
        <div class="container">
            <h1>Bem vindo ao nosso Forum</h1>
            <form action="" method="post" id="form">
                <h2>Cadastre Um Forum</h2>
                <input type="text" name="titulo_forum" id="">
                <input type="submit" name="cadastrar" value="Cadastrar">
            </form>

            <ul>
            <?php
                foreach($forum as $key => $value){
            ?>
                <li><a href="<?php echo INCLUDE_PATH?><?php echo $value['id']?>"><?php echo $value['nome']?></a></li>
            <?php 
                }
            ?>
            </ul>
        </div>
    </section>
</body>
</html>