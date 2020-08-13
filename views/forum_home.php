<h2>Bem vindo ao nosso Forum</h2>
<form action="" method="post">
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