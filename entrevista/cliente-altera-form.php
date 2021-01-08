<?php 
require_once("cabecalho.php"); 
require_once("banco-categoria.php");
require_once("banco-cliente .php");

$id = $_GET['id'];
$cliente  = buscacliente ($conexao, $id);

$categorias = listaCategoria($conexao);

?>
	<h1>Atualizando Cadastro</h1>
	<form action="altera-cliente .php" method="post">
        <input type="hidden" name="id" value="<?=$cliente['id']?>">
		<table class="table">

           <?php require_once("cliente -formulario-base.php"); ?>

            <tr>
                <td><button class="btn btn-primary btn-lg" type="submit">Atualizar</button></td>
            </tr>

        </table>

	</form>
<?php require_once("rodape.php"); ?>