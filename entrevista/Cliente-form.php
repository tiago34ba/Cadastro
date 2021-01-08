<?php 
require_once("cabecalho.php"); 
require_once("banco-categoria.php");
require_once("logica-usuario.php");

verificaUsuario();

$cliente  = array("nome" => "", "email" => "", "rg","CPF","descricao" => "1");
$usado = "";
$categorias = listaCategoria($conexao);

?>
	<h1>Formulário de Cadastro de Cliente</h1>
	<form action="adiciona-cliente .php" method="post">
		<table class="table">
        
            <?php require_once("cliente -formulario-base.php"); ?>
            <tr>
                <td><button class="btn btn-primary btn-lg" type="submit">Cadastrar</button></td>
            </tr>

        </table>

	</form>
<?php require_once("rodape.php"); ?>