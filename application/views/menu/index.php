<script type='text/javascript'>
	window.onload = function(){
		
		//document.getElementById('menu_turma').className = "active";
	}
</script>
<div class='row' style='padding: 30px;'>
	<p>Todos os menus</p><br />
	<input type='hidden' id='controller' value='<?php echo $controller; ?>'/>
</div>
<div class='row' id='container' name='container' style='border: 1px solid rgba(0,0,0,.1);'>
	<?php
		echo "<div class='col-lg-10 offset-lg-1'>";
			echo "<div class='table-responsive'>";
				echo "<table class='table table-striped table-hover'>";
					echo "<thead>";
						echo"<td class='text-right' colspan='5'>";
							echo"<a class='btn btn-success' href='".$url."index.php/$controller/create_edit/0/'>Novo menu</a>";
						echo"</td>";
						echo"</tr>";
						echo "<tr>";
							echo "<td>Nome</td>";
							echo "<td>Ordem</td>";
							echo "<td>Ativo</td>";
						echo "<tr>";
					echo "</thead>";
					echo "<tbody>";
						for($i = 0; $i < count($lista_menus); $i++)
						{
							echo "<tr>";
								echo "<td>".$lista_menus[$i]['nome']."</td>";
								echo "<td>".$lista_menus[$i]['ordem']."</td>";
								echo "<td>".(($lista_menus[$i]['ativo'] == 1) ? 'Sim' : 'Não')."</td>";
								echo "<td>";
									echo "<a href='".$url."index.php/$controller/create_edit/".$lista_menus[$i]['id']."' title='Editar' style='color: #dc3545; cursor: pointer;' class='glyphicon glyphicon-edit'></a> | ";
									echo "<span onclick='Main.confirm_delete(". $lista_menus[$i]['id'] .");' id='sp_lead_trash' name='sp_lead_trash' title='Apagar' style='color: #dc3545; cursor: pointer;' class='glyphicon glyphicon-trash'></span>";
								echo "</td>";
							echo "</tr>";
						}
					echo "</tbody>";
				echo "</table>";
			echo "</div>";
		echo "</div>";
	?>
</div>
