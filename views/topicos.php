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
            <h1>Você esta no <a href="<?php echo INCLUDE_PATH ?>"> Forum</a> > <?php echo $forumInfo['nome'];?></h1>
            <form action="" method="post" id="form">
                <h2>Cadastre Um Topico</h2>
                <label for="titulo_topico">Nome do topico</label>
                <input type="text" name="titulo_topico" id="">
                <input type="hidden" name="forum_id" value="<?php echo $idForum; ?>">
                <input type="submit" name="cadastrar_topico" value="Cadastrar">
            </form>

            <ul>
            <?php
                foreach($topicos as $key => $value){
            ?>
                <li><a href="<?php echo INCLUDE_PATH?><?php echo $forumInfo['id'];?>/<?php echo $value['id']?>"><?php echo $value['nome']?></a></li>
            <?php 
                }
            ?>
            </ul>
            </div>
    </section>
</body>
</html>