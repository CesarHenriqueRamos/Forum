<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Forum</title>
</head>
<body>
    <section class="home">
        <div class="container">
            <h1>Post do <a href="<?php echo INCLUDE_PATH ?>"> Forum</a> >  <a href="<?php echo INCLUDE_PATH ?><?php echo $idTopico;?>"> <?php echo $forumInfo['nome'];?></a></h1>
            <div class="post">
            <?php
                foreach($Mensagens as $key => $value){
            ?>
                <div class="post-single">
                    <h3><?php echo $value['nome']?></h3> <p><?php echo $value['mensagem']?></p>
                </div>
            <?php 
                }
            ?>
            </div>

            <form action="" method="post" id="form">
            <h2>Mensagem:</h2>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="">
                <label for="mensagem">Mensagem:</label>
                <input type="text" name="mensagem" id="">
                <input type="hidden" name="topico_id" value="<?php echo $idTopico; ?>">
                <input type="submit" name="cadastrar_post" value="Cadastrar">
            </form>
            </div>
    </section>

</body>
</html>