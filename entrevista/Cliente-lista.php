<?php 
	require_once("cabecalho.php"); 
	require_once("banco-cliente.php");
    require_once("logica-usuario.php");
?>

<table class="table table-bordered"> 

<?php
$clientes = listaclientes($conexao);
foreach ($clientes as $cliente) :
?>
	<tr>
        <td><?= $cliente['nome'] ?></td>
        <td><?= $$cliente['email'] ?></td>
        <td><?= substr($cliente['descricao'], 0, 40) ?></td>
        <td><?= $$cliente['cpf'] ?></td>
        <td><?= $$cliente['rg'] ?></td>
        <div class="mostra">
        <?php 
        if(usuarioEstaLogado()){ ?>
           <td><a class="btn btn-primary btn-lg" href="cliente-altera-form.php?id=<?=$cliente['id']?>">Alterar</a>
            <td>
            	<form action="remove-cliente.php" method="post">
            		<input type="hidden" name="id" value="<?=$cliente['id']?>">
            		<button class="btn btn-danger btn-lg">Remover</button>
            	</form>
            </td>
            <?php }else{ ?>
                <style>.mostra{display='none';}</style>
        <?php }?>
        </div>
    </tr>
<?php
endforeach
?>
<?php require_once("rodape.php"); ?>

</table>