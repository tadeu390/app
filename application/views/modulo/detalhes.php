<script type='text/javascript'>
	window.onload = function(){
		
		//document.getElementById('menu_turma').className = "active";
	}
</script>
<div class='row' style='padding: 30px; padding-bottom: 0px;'>
	<p>
		Detalhes do módulo selecionado
	</p>
	<input type='hidden' id='controller' value='<?php echo $controller; ?>'/>
</div>
<div class='row'  style='padding-left: 40px;'>
	<?php 
		echo"<a href='javascript:window.history.go(-1)' class='link' title='Voltar'>";
			echo"<span class='glyphicon glyphicon-arrow-left' style='transform: scale(2);'></span>";
		echo"</a>"; 
	?>
</div>
<br />
<div class='row' id='container' name='container' style='border: 1px solid rgba(0,0,0,.1);'>
	<?php
		echo "<div class='col-lg-10 offset-lg-1'>";
			echo "<div class='table-responsive'>";
				echo "<table class='table table-striped table-hover'>";
					echo"</tr>";
					echo "<tr>";
						echo "<td>Nome</td>";
						echo "<td>".$obj['nome_modulo']."</td>";
					echo"</tr>";
					echo"<tr>";
						echo "<td>Ativo</td>";
						echo "<td>".(($obj['ativo'] == 1) ? 'Sim' : 'Não')."</td>";
					echo "</tr>";
					echo"<tr>";
						echo "<td>Data de registro</td>";
						echo "<td>".$obj['data_registro']."</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>Descrição</td>";
						echo "<td>".$obj['descricao']."</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>Ordem</td>";
						echo "<td>".$obj['ordem']."</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>Menu</td>";
						echo "<td>".$obj['nome_menu']."</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>URL</td>";
						echo "<td>".$obj['url_modulo']."</td>";
					echo "</tr>";
				echo "</table>";
			echo "</div>";
		echo "</div>";
	?>
</div>
