<script type='text/javascript'>
	window.onload = function(){
		
		//document.getElementById('menu_turma').className = "active";
	}
</script>
<div class='row' style='padding: 30px;'>
	<p>Todos os usuários</p><br />
	<input type='hidden' id='controller' value='<?php echo $controller; ?>'/>
</div>
<div class='row' id='container' name='container' style='border: 1px solid rgba(0,0,0,.1);'>
	<?php
		echo "<div class='col-lg-10 offset-lg-1'>";
			echo "<div class='table-responsive'>";
				echo "<table class='table table-striped table-hover'>";
					echo "<thead>";
						echo"<td class='text-right' colspan='5'>";
							echo"<a class='btn btn-success' href='".$url."index.php/$controller/create_edit/0/'>Novo usuário</a>";
						echo"</td>";
						echo"</tr>";
						echo "<tr>";
							echo "<td>Nome</td>";
							echo "<td>Ativo</td>";
							echo "<td>E-mail</td>";
							echo "<td>Grupo</td>";
							echo "<td class='text-right'></td>";
						echo "<tr>";
					echo "</thead>";
					echo "<tbody>";
						for($i = 0; $i < count($usuarios); $i++)
						{
							echo "<tr>";
								echo "<td>".$usuarios[$i]['nome_usuario']."</td>";
								echo "<td>".(($usuarios[$i]['ativo'] == 1) ? 'Sim' : 'Não')."</td>";
								echo "<td>".$usuarios[$i]['email']."</td>";
								echo "<td>".$usuarios[$i]['nome_grupo']."</td>";
								echo "<td class='text-right'>";
									echo "<a href='".$url."index.php/$controller/create_edit/".$usuarios[$i]['id']."' title='Editar' style='color: #dc3545; cursor: pointer;' class='glyphicon glyphicon-edit'></a> | ";
									echo "<a href='".$url."index.php/$controller/detalhes/".$usuarios[$i]['id']."' title='Detalhes' style='color: #dc3545; cursor: pointer;' class='glyphicon glyphicon-th'></a> | ";
									echo "<span onclick='Main.confirm_delete(". $usuarios[$i]['id'] .");' id='sp_lead_trash' name='sp_lead_trash' title='Apagar' style='color: #dc3545; cursor: pointer;' class='glyphicon glyphicon-trash'></span>";
								echo "</td>";
							echo "</tr>";
						}
					echo "</tbody>";
				echo "</table>";
			echo "</div>";
		echo "</div>";
	?>
</div>
