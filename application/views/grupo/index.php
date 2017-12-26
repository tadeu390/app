<br /><br />
<div class='row' id='container' name='container'>
	<input type='hidden' id='controller' value='<?php echo $controller; ?>'/>
	<?php
		echo "<div class='col-lg-10 offset-lg-1 padding' style='background: #393836;'>";
			echo "<div class='table-responsive'>";
				echo "<table class='table table-striped table-hover' style='color: white;'>";
					echo "<thead>";
						echo"<tr>";
							echo"<td class='text-center' colspan='5'>";
								echo"<p style='color: white; margin-top: 10px;'>Todos os grupos</p>";
							echo"</td>";
						echo"</tr>";
						echo"<tr>";
							echo"<td class='text-right' colspan='3'>";
								echo"<a class='btn btn-success' href='".$url."index.php/$controller/create_edit/0/'>Novo grupo</a>";
							echo"</td>";
						echo"</tr>";
						echo "<tr>";
							echo "<td>Nome</td>";
							echo "<td>Ativo</td>";
							echo "<td class='text-right'></td>";
						echo "</tr>";
					echo "</thead>";
					echo "<tbody>";
						for($i = 0; $i < count($lista_grupos); $i++)
						{
							echo "<tr>";
								echo "<td>".$lista_grupos[$i]['nome_grupo']."</td>";
								echo "<td>".(($lista_grupos[$i]['ativo'] == 1) ? 'Sim' : 'Não')."</td>";
								echo "<td class='text-right'>";
									echo "<a href='".$url."index.php/$controller/create_edit/".$lista_grupos[$i]['id']."' title='Editar' style='color: #dc3545; cursor: pointer;' class='glyphicon glyphicon-edit'></a> | ";
									echo "<a href='".$url."index.php/$controller/detalhes/".$lista_grupos[$i]['id']."' title='Detalhes' style='color: #dc3545; cursor: pointer;' class='glyphicon glyphicon-th'></a> | ";
									echo "<span onclick='Main.confirm_delete(". $lista_grupos[$i]['id'] .");' id='sp_lead_trash' name='sp_lead_trash' title='Apagar' style='color: #dc3545; cursor: pointer;' class='glyphicon glyphicon-trash'></span>";
								echo "</td>";
							echo "</tr>";
						}
					echo "</tbody>";
				echo "</table>";
			echo "</div>";
		echo "</div>";
	?>
</div>
