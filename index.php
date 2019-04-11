<?php
	include "conexao.php";									//incluir no codigo php
	$sql = "SELECT * FROM contato_tb ORDER BY nome";		// variavel que recebe a string
	$contatos = $fusca -> prepare($sql);					//faz conexao e prepara 
	$contatos -> execute();						    	    //executa o comando
	$fusca = null;											//encerra a funcao
															// ->   chamada de funcao		
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title> Tarefas </title>
	</head>
	<body>
		<hr>
		<center>
			<h2>Gerenciamento de tarefas</h2>
		</center>
		<hr>
		<a href="agenda_inserir.php"><input type="button" value="Adicionar"></a><br><br>
		<table border="1">
			<tr>
				<th>Nome</th>
				<th>Celular</th>
				<th>E-mail</th>
				<th>Nascimento</th>
				<th>Estado civil</th>
				<th>Grupo</th>
				<th>Observações</th>
				<th>Ações</th>
			</tr>
			<?PHP
				foreach($contatos as $bolacha){
				//Atribuindo valores capturados da tabela
					$id  			 = $bolacha["id_contato"];
					$nome			 = $bolacha['nome'];
					$celular		 = $bolacha['celular'];
					$email 			 = $bolacha['email'];
					$nascimento 	 = $bolacha['nascimento'];
					$estado_civil 	 = $bolacha['estado_civil'];
					$grupo           = $bolacha['grupo'];
					$obs             = $bolacha['obs'];
					switch ($estado_civil){
						 case 'c':
							 $estado_civil = "casado";
							break;
						 case 's':
							$estado_civil = "solteiro";
							break;
						case 'v':
							$estado_civil = "viuvo";
						break;
						case 'e':
							$estado_civil = "encalhado";			
					}
				//Montando a tabela com os valores recebidos
					echo "<tr>";
					echo "<td>".$nome."</td>";
					echo "<td>".$celular."</td>";
					echo "<td>".$email."</td>";
					echo "<td>".date("d/m/Y",strtotime($nascimento))."</td>";
					echo "<td>".$estado_civil."</td>";
					echo "<td>".$grupo."</td>";
					echo "<td>".$obs."</td>";
					echo "<td align='center'>
						<a href='agenda_excluir.php?id=$id&nome=$nome'><img src='lixo.png' title='Excluir $nome'>
						</a>
						&nbsp;&nbsp;
						<a href='agenda_editar.php?id=$id&nome=$nome'><img src='edit.png' title='Editar $nome'></a></td>";
					echo "</tr>";	
				}
			?>
		</table>
	</body>
</html>