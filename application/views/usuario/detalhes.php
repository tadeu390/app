<script type='text/javascript'>
	window.onload = function(){
		
		//document.getElementById('menu_turma').className = "active";
	}
</script>
<div class='row' style='padding: 30px; padding-bottom: 0px;'>
	<p>
		Detalhes do usuário selecionado
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
						echo "<td>".$obj['nome_usuario']."</td>";
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
						echo "<td>E-mail</td>";
						echo "<td>".$obj['email']."</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>Tipo de usuário</td>";
						echo "<td>".$obj['nome_grupo']."</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>Ultimo acesso</td>";
						echo "<td>".$obj['ultimo_acesso']."</td>";
					echo "</tr>";
				echo "</table>";
			echo "</div>";
		echo "</div>";
	?>
</div>
